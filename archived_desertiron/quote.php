<?php
$page_title = 'Request a Technical Quote | Desert Iron';
require_once 'header.php';
?>

<!-- Cinematic Hero Banner -->
<section class="relative min-h-[40vh] flex items-center bg-charcoal overflow-hidden pt-24 pb-12">
    <div class="absolute inset-0 z-0">
        <img src="public/images/peb_warehouse.jpg" alt="Request a Quote" class="w-full h-full object-cover opacity-75">
        <div class="absolute inset-0 bg-gradient-to-t from-charcoal/90 via-charcoal/40 to-charcoal/20"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 text-center" >
        <div class="flex items-center justify-center gap-4 mb-4">
            <div class="w-12 h-[3px] bg-saudi"></div>
            <span class="text-white opacity-90 text-xs md:text-sm font-bold uppercase tracking-widest drop-shadow-sm">
                <?= $lang === 'ar' ? 'فريق المبيعات والتقدير في المملكة' : 'KSA Sales & Estimation Team' ?>
            </span>
            <div class="w-12 h-[3px] bg-saudi"></div>
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold mb-4 leading-tight drop-shadow-lg <?= $headingFontClass ?>">
            <?= $lang === 'ar' ? 'طلب عرض سعر فني وتجاري' : 'Request a Fast Quote' ?>
        </h1>
        <p class="text-gray-300 max-w-2xl mx-auto text-sm md:text-base font-light leading-relaxed">
            <?= $lang === 'ar' ? 'ناقش مشروعك، وأرسل جدول الكميات (BOQ) أو المخططات، واطلب عرض سعر تنافسي من فريق المبيعات والتقدير في المملكة.' : 'Discuss your project, submit a BOQ or drawing, and request a competitive quotation from our KSA Sales & Estimation Team.' ?>
        </p>
    </div>
</section>

<!-- Main Estimator Portal Section -->
<section class="py-16 md:py-24 bg-offwhite">
    <div class="container mx-auto px-4 max-w-7xl">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left Info Sidebar -->
            <div class="lg:col-span-4 space-y-8">
                
                <div>
                    <span class="text-xs uppercase tracking-widest text-saudi font-bold mb-2 block">KSA Sales & Estimation Team</span>
                    <h2 class="text-3xl text-charcoal font-bold <?= $headingFontClass ?> mb-4">
                        <?= $lang === 'ar' ? 'لماذا تطلب عرض سعر معنا؟' : 'Why RFQ With Us?' ?>
                    </h2>
                    <p class="text-gray-600 text-sm font-light leading-relaxed">
                        <?= $lang === 'ar' ? 'يقوم فريق المهندسين والمقدرين لدينا بمراجعة كل طلب بعناية لتقديم عروض أسعار تنافسية ومتوافقة مع كود البناء السعودي.' : 'Our KSA Sales & Estimation Team evaluates every inquiry, BOQ, and drawing to provide competitive, code-compliant engineering proposals.' ?>
                    </p>
                </div>

                <!-- Benefits List -->
                <div class="space-y-4">
                    
                    <div class="bg-white p-5 rounded-sm border border-gray-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 bg-saudi/10 text-saudi flex items-center justify-center rounded shrink-0 font-bold">24h</div>
                        <div>
                            <h4 class="text-charcoal font-bold text-sm <?= $headingFontClass ?>"><?= $lang === 'ar' ? 'استجابة سريعة' : '24-Hour Proposal Turnaround' ?></h4>
                            <p class="text-gray-500 text-xs font-light mt-1">Fast technical evaluation for PEB, structural steel, and civil construction inquiries.</p>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-sm border border-gray-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 bg-saudi/10 text-saudi flex items-center justify-center rounded shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-charcoal font-bold text-sm <?= $headingFontClass ?>"><?= $lang === 'ar' ? 'التوافق مع كود البناء السعودي (SBC)' : 'SBC Code Pre-Check' ?></h4>
                            <p class="text-gray-500 text-xs font-light mt-1">All design estimates are pre-vetted to ensure compliance with Saudi Building Codes.</p>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-sm border border-gray-200 shadow-sm flex items-start gap-4">
                        <div class="w-10 h-10 bg-saudi/10 text-saudi flex items-center justify-center rounded shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-charcoal font-bold text-sm <?= $headingFontClass ?>"><?= $lang === 'ar' ? 'مراجعة المخططات وجداول الكميات (BOQ)' : 'BOQ & Drawing Review' ?></h4>
                            <p class="text-gray-500 text-xs font-light mt-1">Direct upload of AutoCAD/DWG drawings, PDFs, and BOQ spreadsheets.</p>
                        </div>
                    </div>

                </div>

                <!-- Direct Assistance Box -->
                <div class="bg-charcoal text-white p-6 rounded-sm shadow-md">
                    <h4 class="text-base font-bold mb-2 <?= $headingFontClass ?>">Urgent Tender or RFQ?</h4>
                    <p class="text-gray-400 text-xs font-light mb-4">For immediate tender submissions or urgent budget estimates, contact our KSA Sales & Estimation Team directly.</p>
                    <div class="text-saudi font-bold text-sm">+966 59 951 0213</div>
                    <div class="text-gray-300 text-xs">sales@thedesertiron.com</div>
                </div>

            </div>
            
            <!-- Right Multi-Step Form Portal -->
            <div class="lg:col-span-8">
                <div class="bg-white p-8 md:p-10 rounded-sm shadow-md border border-gray-200">
                    
                    <?php if(isset($_GET['success'])): ?>
                    <div class="bg-green-50 border border-saudi text-saudi p-4 rounded-sm mb-6">
                        <h4 class="font-bold text-sm">Thank you for your inquiry!</h4>
                        <p class="text-xs mt-1">Your RFQ has been received and our KSA Sales & Estimation Team will get back to you shortly.</p>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Progress Step Bar -->
                    <div class="mb-10">
                        <div class="flex justify-between items-center relative">
                            <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-1 bg-gray-200 z-0 rounded-full"></div>
                            <div id="progress-line" class="absolute left-0 top-1/2 -translate-y-1/2 w-1/3 h-1 bg-saudi z-0 rounded-full transition-all duration-500"></div>
                            
                            <div class="flex flex-col items-center relative z-10">
                                <div id="ind-1" class="w-10 h-10 rounded-full bg-saudi text-white flex items-center justify-center font-bold text-sm shadow-md transition-colors">1</div>
                                <span class="text-[11px] font-bold text-charcoal mt-2 uppercase tracking-wider">Contact</span>
                            </div>
                            <div class="flex flex-col items-center relative z-10">
                                <div id="ind-2" class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-sm transition-colors">2</div>
                                <span class="text-[11px] font-bold text-gray-400 mt-2 uppercase tracking-wider">Service Scope</span>
                            </div>
                            <div class="flex flex-col items-center relative z-10">
                                <div id="ind-3" class="w-10 h-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-sm transition-colors">3</div>
                                <span class="text-[11px] font-bold text-gray-400 mt-2 uppercase tracking-wider">Files & Submit</span>
                            </div>
                        </div>
                    </div>

                    <form id="rfq-form" action="process-form.php" method="POST" enctype="multipart/form-data">
                        
                        <!-- STEP 1: Contact Details -->
                        <div class="step-container space-y-5" id="step-1">
                            <h3 class="text-xl font-bold text-charcoal mb-4 <?= $headingFontClass ?>">Step 1: Contact & Company Details</h3>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Full Name *</label>
                                    <input type="text" id="name" name="name" required placeholder="John Doe" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Company Name *</label>
                                    <input type="text" id="company" name="company" required placeholder="Saudi Construction Co." class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Business Email *</label>
                                    <input type="email" id="email" name="email" required placeholder="j.doe@company.com" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Phone / WhatsApp *</label>
                                    <input type="tel" id="phone" name="phone" required placeholder="+966 50 000 0000" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pt-2">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Position</label>
                                    <input type="text" id="position" name="position" placeholder="e.g. Procurement Manager" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Project Name</label>
                                    <input type="text" id="project_name" name="project_name" placeholder="e.g. Dammam Warehouse" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                            </div>
                            
                            <div class="pt-4 flex justify-end">
                                <button type="button" onclick="goToStep(2)" class="bg-saudi text-white px-8 py-3 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-charcoal transition-colors shadow-md">
                                    Next Step: Select Scope &rarr;
                                </button>
                            </div>
                        </div>

                        <!-- STEP 2: Service & Scope Selection -->
                        <div class="step-container space-y-5 hidden" id="step-2">
                            <h3 class="text-xl font-bold text-charcoal mb-4 <?= $headingFontClass ?>">Step 2: Select Scope & Requirements</h3>
                            
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Primary Service Needed *</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <label class="border border-gray-200 p-4 rounded-sm cursor-pointer hover:border-saudi flex items-center gap-3 bg-offwhite transition-colors">
                                    <input type="radio" name="service" value="Structural Steel" checked class="text-saudi focus:ring-saudi">
                                    <span class="text-sm font-medium text-charcoal">Structural Steel Buildings</span>
                                </label>
                                <label class="border border-gray-200 p-4 rounded-sm cursor-pointer hover:border-saudi flex items-center gap-3 bg-offwhite transition-colors">
                                    <input type="radio" name="service" value="Pre-Engineered Buildings" class="text-saudi focus:ring-saudi">
                                    <span class="text-sm font-medium text-charcoal">PEB Warehouse Systems</span>
                                </label>
                                <label class="border border-gray-200 p-4 rounded-sm cursor-pointer hover:border-saudi flex items-center gap-3 bg-offwhite transition-colors">
                                    <input type="radio" name="service" value="Civil Construction & Turnkey Solutions" class="text-saudi focus:ring-saudi">
                                    <span class="text-sm font-medium text-charcoal">Civil Construction & Turnkey Solutions</span>
                                </label>
                                <label class="border border-gray-200 p-4 rounded-sm cursor-pointer hover:border-saudi flex items-center gap-3 bg-offwhite transition-colors">
                                    <input type="radio" name="service" value="Roof & Wall Panels" class="text-saudi focus:ring-saudi">
                                    <span class="text-sm font-medium text-charcoal">Cladding & Sandwich Panels</span>
                                </label>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 pt-2">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Project Location</label>
                                    <input type="text" name="location" placeholder="e.g. Dammam, Riyadh, Jubail, Jeddah" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Estimated Tonnage / Area</label>
                                    <input type="text" name="tonnage" placeholder="e.g. 500 Tons / 5,000 sqm" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 gap-5 pt-2">
                                <div>
                                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Required Date</label>
                                    <input type="date" name="required_date" class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors">
                                </div>
                            </div>
                            
                            <div class="pt-4 flex justify-between">
                                <button type="button" onclick="goToStep(1)" class="bg-gray-200 text-charcoal px-6 py-3 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-gray-300 transition-colors">
                                    &larr; Back
                                </button>
                                <button type="button" onclick="goToStep(3)" class="bg-saudi text-white px-8 py-3 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-charcoal transition-colors shadow-md">
                                    Next Step: Uploads & Submit &rarr;
                                </button>
                            </div>
                        </div>

                        <!-- STEP 3: Details, Uploads & Submit -->
                        <div class="step-container space-y-5 hidden" id="step-3">
                            <h3 class="text-xl font-bold text-charcoal mb-4 <?= $headingFontClass ?>">Step 3: Specifications & File Upload</h3>
                            
                            <div style="display:none;">
                                <label>Leave this empty</label>
                                <input type="text" name="honeypot" tabindex="-1" autocomplete="off">
                            </div>
                            
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Scope Summary / Technical Requirements</label>
                                <textarea name="message" rows="4" placeholder="Mention steel grades, clear heights, crane capacities, civil scope, timeline, or special requirements..." class="w-full bg-offwhite border border-gray-200 p-3 text-sm rounded-sm outline-none focus:border-saudi focus:bg-white transition-colors"></textarea>
                            </div>

                            <!-- File Upload Box -->
                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Upload Drawings / BOQ (Optional)</label>
                                <div class="border-2 border-dashed border-gray-300 rounded-sm p-6 text-center bg-offwhite hover:border-saudi transition-colors cursor-pointer" onclick="document.getElementById('rfq-file').click()">
                                    <svg class="w-8 h-8 text-saudi mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <span class="text-xs text-gray-700 font-medium block">Click or Drag & Drop Drawings / BOQ here</span>
                                    <span class="text-[10px] text-gray-400 font-light block mt-1">Accepts PDF, DWG, ZIP, XLSX, DOCX (Max 10MB)</span>
                                    <input type="file" name="attachment" id="rfq-file" accept=".pdf,.dwg,.zip,.xlsx,.xls,.doc,.docx" class="hidden">
                                </div>
                            </div>
                            
                            <div class="pt-4 flex justify-between">
                                <button type="button" onclick="goToStep(2)" class="bg-gray-200 text-charcoal px-6 py-3 rounded-sm font-bold text-xs uppercase tracking-widest hover:bg-gray-300 transition-colors">
                                    &larr; Back
                                </button>
                                <button type="submit" class="bg-saudi text-white px-10 py-3.5 rounded-sm font-bold text-xs uppercase tracking-widest shadow-xl hover:bg-charcoal transition-colors">
                                    Submit RFQ Proposal Request
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    function goToStep(step) {
        // Validation check for Step 1 before proceeding to Step 2
        if (step > 1) {
            const name = document.getElementById('name').value.trim();
            const company = document.getElementById('company').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            
            if (!name || !company || !email || !phone) {
                alert('Please fill out all required contact fields before proceeding.');
                return;
            }
        }

        // Hide all step containers
        document.querySelectorAll('.step-container').forEach(el => el.classList.add('hidden'));
        
        // Show target step container
        document.getElementById('step-' + step).classList.remove('hidden');
        
        // Update Step Indicators
        for(let i = 1; i <= 3; i++) {
            const ind = document.getElementById('ind-' + i);
            if (i <= step) {
                ind.classList.remove('bg-gray-200', 'text-gray-600');
                ind.classList.add('bg-saudi', 'text-white');
            } else {
                ind.classList.remove('bg-saudi', 'text-white');
                ind.classList.add('bg-gray-200', 'text-gray-600');
            }
        }
        
        // Update Progress Bar Line
        const percentages = {1: '33%', 2: '66%', 3: '100%'};
        document.getElementById('progress-line').style.width = percentages[step];
    }
</script>

<?php require_once 'footer.php'; ?>
