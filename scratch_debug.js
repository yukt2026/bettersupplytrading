const { spawn } = require('child_process');

async function run() {
    const chrome = spawn('C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe', [
        '--headless=new',
        '--remote-debugging-port=9222',
        '--window-size=390,844',
        '--disable-gpu',
        'http://localhost/bettersupplytrading/ar/'
    ]);

    await new Promise(r => setTimeout(r, 2000));

    try {
        const listRes = await fetch('http://127.0.0.1:9222/json');
        const tabs = await listRes.json();
        const tab = tabs.find(t => t.type === 'page');

        const ws = new WebSocket(tab.webSocketDebuggerUrl);
        await new Promise((res, rej) => { ws.onopen = res; ws.onerror = rej; });

        let msgId = 1;
        function send(method, params = {}) {
            return new Promise((resolve) => {
                const id = msgId++;
                const handler = (evt) => {
                    const data = JSON.parse(evt.data);
                    if (data.id === id) {
                        ws.removeEventListener('message', handler);
                        resolve(data.result);
                    }
                };
                ws.addEventListener('message', handler);
                ws.send(JSON.stringify({ id, method, params }));
            });
        }

        // Set device metrics to mobile 390x844
        await send('Emulation.setDeviceMetricsOverride', {
            width: 390,
            height: 844,
            deviceScaleFactor: 2,
            mobile: true
        });

        const evalRes = await send('Runtime.evaluate', {
            expression: `(() => {
                function serializeRect(el) {
                    if (!el) return null;
                    const r = el.getBoundingClientRect();
                    return { left: Math.round(r.left), right: Math.round(r.right), width: Math.round(r.width), height: Math.round(r.height), top: Math.round(r.top) };
                }
                const header = document.getElementById('site-header');
                const btn = document.getElementById('mobile-menu-btn');
                const logo = document.querySelector('#site-header a img');
                const langPill = document.querySelector('#site-header .nav\\\\:hidden a');
                const inner = document.querySelector('.header-inner');
                return {
                    url: location.href,
                    dir: document.documentElement.dir,
                    windowInnerWidth: window.innerWidth,
                    bodyScrollWidth: document.body.scrollWidth,
                    docScrollWidth: document.documentElement.scrollWidth,
                    headerRect: serializeRect(header),
                    innerRect: serializeRect(inner),
                    logoRect: serializeRect(logo),
                    langPillRect: serializeRect(langPill),
                    btnRect: serializeRect(btn),
                };
            })()`,
            returnByValue: true
        });

        console.log('Mobile AR (390px):', JSON.stringify(evalRes.result.value, null, 2));

        ws.close();
    } catch(e) {
        console.error('Error:', e);
    }
    chrome.kill();
}
run();
