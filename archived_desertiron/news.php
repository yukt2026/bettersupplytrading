<?php $page_title = 'News & Insights | Desert Iron'; require_once 'header.php'; require_once 'components.php'; ?>
<section class="relative pt-32 pb-20 bg-charcoal text-offwhite overflow-hidden">
<div class="container mx-auto px-4 relative z-10 text-center">
<h1 class="text-4xl md:text-5xl <?= $headingFontClass ?> mb-4">News & Insights</h1>
<p class="text-steel max-w-2xl mx-auto">The latest updates from Desert Iron and the construction sector.</p>
</div>
</section>
<section class="py-20 bg-white min-h-[50vh]">
<div class="container mx-auto px-4">
<?= renderSectionHeading('News & Insights Overview') ?>
<div class='grid grid-cols-1 md:grid-cols-3 gap-6'>
    <div class='border border-gray-200 rounded overflow-hidden'><div class='h-48 bg-gray-200'></div><div class='p-6'><h3 class='text-xl text-charcoal font-bold mb-2'>Project Milestone Reached</h3><a href='#' class='text-saudi font-bold'>Read Article &rarr;</a></div></div><div class='border border-gray-200 rounded overflow-hidden'><div class='h-48 bg-gray-200'></div><div class='p-6'><h3 class='text-xl text-charcoal font-bold mb-2'>Project Milestone Reached</h3><a href='#' class='text-saudi font-bold'>Read Article &rarr;</a></div></div><div class='border border-gray-200 rounded overflow-hidden'><div class='h-48 bg-gray-200'></div><div class='p-6'><h3 class='text-xl text-charcoal font-bold mb-2'>Project Milestone Reached</h3><a href='#' class='text-saudi font-bold'>Read Article &rarr;</a></div></div></div>
</div>
</section>
<?php require_once 'footer.php'; ?>