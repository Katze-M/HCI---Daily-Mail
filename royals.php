<?php
// Royals landing page (based on index.php) — royal-themed placeholders
$personal_feed = [
    [
        'title' => '<a href="articles/buyline/Royale_article-1.php" class="text-blue-800 hover:underline">Kate Middleton makes star drop earrings the must-have accessory of the season - shop her exact pair and chic alternatives</a>',
        'excerpt' => "The King met volunteers and launched a new initiative.",
        'comments' => 402,
        'shares' => 22,
        'image' => 'assets/Buyline_assets/Royal_Pic-1.avif',
    ],
    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article4.php" class="text-blue-800 hover:underline">Prince Harry believes Home Office review into his taxpayer-funded security is long overdue, sources reveal - as experts suggest his relationship with the King is thawing</a>',
        'excerpt' => "Experts say the review could change security arrangements.",
        'comments' => 305,
        'shares' => 48,
        'image' => 'assets/Royal_assets/Royal-12.avif',
    ],
    [
        'title' => '<a href="articles/Royals/Royal_catfeed-article2.php" class="text-blue-800 hover:underline">Meghan Markle sends letter to her sick father Thomas in hospital after he made urgent plea he did not want to die with them being estranged</a>',
        'excerpt' => "Meghan's letter to her father raises questions about their estrangement.",
        'comments' => 12,
        'shares' => 1,
        'image' => 'assets/Royal_assets/Royal-18.avif',
    ],

];

$main_feed = [
    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article1.php" class="text-blue-800 hover:underline">How ex-PM John Major played the role of an honest broker between Charles and Diana during the War of the Waleses</a>',
        'excerpt' => "An inside look at John Major's mediating role within the royal family.",
        'comments' => 220,
        'shares' => 34,
        'image' => 'assets/Royal_assets/Royal-1.avif',
        'category' => 'King Charles III'
    ],
    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article2.php" class="text-blue-800 hover:underline">Prince William celebrates 20 years of his patronage with homeless charity Centrepoint - after Princess Diana took him to a shelter when he was 11 years old</a>',
        'excerpt' => "William marks two decades supporting Centrepoint in a heartfelt visit.",
        'comments' => 160,
        'shares' => 19,
        'image' => 'assets/Royal_assets/Royal-5.avif',
        'category' => 'Prince William'
    ],
    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article3.php" class="text-blue-800 hover:underline">Lady Davina Windsor and her daughter Senna support Kate Middleton at Christmas carol concert in rare royal outing</a>',
        'excerpt' => "Davina and her daughter Senna attend a festive outing with Kate.",
        'comments' => 98,
        'shares' => 12,
        'image' => 'assets/Royal_assets/Royal-8.avif',
        'category' => 'Kate Middleton'
    ],
    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article4.php" class="text-blue-800 hover:underline">Prince Harry believes Home Office review into his taxpayer-funded security is long overdue, sources reveal - as experts suggest his relationship with the King is thawing</a>',
        'excerpt' => "Sources say the review into taxpayer-funded security is proceeding.",
        'comments' => 305,
        'shares' => 48,
        'image' => 'assets/Royal_assets/Royal-12.avif',
        'category' => 'Prince Harry'
    ],
    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article5.php" class="text-blue-800 hover:underline">Meghan Markle sends letter to her sick father Thomas in hospital after he made urgent plea he did not want to die with them being estranged</a>',
        'excerpt' => "Meghan reached out to her father amid concerns about his health.",
        'comments' => 142,
        'shares' => 21,
        'image' => 'assets/Royal_assets/Royal-15.avif',
        'category' => 'Meghan Markle'
    ],
];

$category_strip = [
    [
        'title' => '<a href="articles/Royals/Royal_catfeed-article1.php" class="text-blue-800 hover:underline">Prince Harry turns to trusted royal aide for charity role, RICHARD EDEN reveals amid Sentable saga</a>',
        'excerpt' => "Trusted aide steps up to take on a new charity role.",
        'comments' => 84,
        'shares' => 11,
        'image' => 'assets/Royal_assets/Royal-23.avif',
        'category' => 'Charity'
    ],
    [
        'title' => '<a href="articles/Royals/Royal_catfeed-article2.php" class="text-blue-800 hover:underline">Meghan Markle sends letter to her sick father Thomas in hospital after he made urgent plea he did not want to die with them being estranged</a>',
        'excerpt' => "A personal letter to her father surfaces as family tensions persist.",
        'comments' => 12,
        'shares' => 1,
        'image' => 'assets/Royal_assets/Royal-18.avif',
        'category' => 'Style'
    ],

    [
        'title' => '<a href="articles/Royals/Royal_mainfeed-article2.php" class="text-blue-800 hover:underline">Prince William celebrates 20 years of his patronage with homeless charity Centrepoint - after Princess Diana took him to a shelter when he was 11 years old</a>',
        'excerpt' => "William's long-running charity patronage remembered in a celebratory event.",
        'comments' => 160,
        'shares' => 19,
        'image' => 'assets/Royal_assets/Royal-5.avif',
        'category' => 'Charity'
    ],

    [
        'title' => '<a href="articles/buyline/Royale_article-1.php" class="text-blue-800 hover:underline">Kate Middleton makes star drop earrings the must-have accessory of the season - shop her exact pair and chic alternatives</a>',
        'excerpt' => "The King met volunteers and launched a new initiative.",
        'comments' => 402,
        'shares' => 22,
        'image' => 'assets/Buyline_assets/Royal_Pic-1.avif',
        'category' => 'Style'
        
    ],

];

// uses shared header/footer
include __DIR__ . '/header.php';
?>

    <main class="max-w-6xl mx-auto px-4 py-8 royals-theme">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Main column -->
            <div class="md:col-span-7">
                <!-- Hero Section -->
                <section class="mb-8">
                    <img src="assets/news_article_pics/Royals_latestimg1.png" alt="Hero" class="w-full rounded-lg shadow object-cover" style="height:320px;" />
                    <div class="mt-4">
                        <h1 class="text-2xl font-semibold"><a href="articles/Royals_latest_article.php" class="text-blue-800 hover:underline">Prince Harry should be stripped of his titles after Trump-mocking Colbert appearance to bring 'clarity' to Americans who just see a 'British prince insulting their head of state'</a></h1>
                        <p class="text-gray-600 mt-2">Prince Harry should be stripped of his title to bring 'clarity' to Americans who believe he speaks for the Royal Family, says one expert on the House of Windsor.</p>
                    </div>
                </section>

                <!-- Personal Feed -->
                <section class="mb-8">
                    <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">PERSONAL FEED</div>
                    <div class="bg-white p-4 rounded-b-lg shadow">
                        <div class="relative">
                            <button aria-label="Scroll personal left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('personal-feed-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="personal-feed-row" class="flex gap-4 overflow-x-auto py-2 px-8">
                                <?php foreach(array_slice($personal_feed,0,7) as $item): ?>
                                        <?php
                                            // Derive a clickable href for the card: prefer explicit 'link', otherwise try to extract from title anchor, otherwise fallback.
                                            $href = isset($item['link']) ? $item['link'] : (preg_match('/href\="([^\"]+)"/i', $item['title'], $m) ? $m[1] : 'articles/article.php');
                                            $plainTitle = strip_tags($item['title']);
                                        ?>
                                        <article class="pf-card border p-3 bg-gray-50">
                                            <a href="<?php echo $href; ?>" class="block h-full">
                                                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($plainTitle); ?>" class="pf-img rounded" />
                                                <h3 class="mt-2 font-bold text-sm"><?php echo $plainTitle; ?></h3>
                                                <?php if (isset($item['excerpt'])): ?>
                                                    <p class="text-xs text-gray-600 mt-1"><?php echo $item['excerpt']; ?></p>
                                                <?php endif; ?>
                                                <div class="mt-2 text-xs text-gray-500"><?php echo $item['comments']; ?> comments • <?php echo $item['shares']; ?> share</div>
                                            </a>
                                        </article>
                                    <?php endforeach; ?>
                            </div>
                            <button aria-label="Scroll personal right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow flex items-center justify-center" onclick="scrollFeed('personal-feed-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Main feed section -->
                <section class="mb-8">
                    <div class="flex items-center">
                        <div class="inline-flex items-center relative">
                            <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">MAIN FEED</div>
                            <button id="mainFiltersToggle" aria-expanded="false" aria-controls="mainFiltersStrip" class="ml-2 h-9 w-9 flex items-center justify-center text-sm rounded bg-white border">
                                <svg id="mainToggleIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-0 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 4a1 1 0 011.707-.707l6 6a1 1 0 010 1.414l-6 6A1 1 0 016 16.586L11.586 11 6 5.414A1 1 0 016 4z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="mainFiltersStrip" class="panel-slide bg-white border rounded h-9 flex items-center gap-2 px-2 overflow-x-auto">
                                <!-- Main feed filter buttons-->
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-b-lg shadow">
                        <div class="relative">
                            <button aria-label="Scroll main left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('main-feed-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="main-feed-row" class="flex gap-6 overflow-x-auto py-2 px-8">
                                <!-- Main feed cards rendered by JS -->
                            </div>
                            <button aria-label="Scroll main right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow flex items-center justify-center" onclick="scrollFeed('main-feed-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Category strip -->
                <section class="mb-8">
                    <div class="flex items-center">
                        <div class="inline-flex items-center relative">
                            <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">CATEGORY STRIP</div>
                            <button id="catFiltersToggle" aria-expanded="false" aria-controls="catFiltersPanel" class="ml-2 h-9 w-9 flex items-center justify-center text-sm rounded bg-white border">
                                <svg id="catToggleIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-0 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 4a1 1 0 011.707-.707l6 6a1 1 0 010 1.414l-6 6A1 1 0 016 16.586L11.586 11 6 5.414A1 1 0 016 4z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="catFiltersPanel" class="panel-slide bg-white border rounded h-9 flex gap-2 items-center overflow-x-auto px-2">
                                <!-- horizontal category filter buttons -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-b-lg shadow">
                        <div class="relative">
                            <button aria-label="Scroll category left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('category-strip-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="category-strip-row" class="flex gap-4 overflow-x-auto py-2 px-8">
                                <!-- Category cards rendered by JS -->
                            </div>
                            <button aria-label="Scroll category right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow flex items-center justify-center" onclick="scrollFeed('category-strip-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar: Don't Miss Section-->
            <aside class="md:col-span-3">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-blue-600 text-white px-4 py-2 font-semibold">Don't Miss</div>
                    <div class="p-3">
                        <?php foreach(array_slice($main_feed,0,9) as $item): ?>
                            <div class="flex gap-3 py-3 border-b last:border-b-0">
                                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-20 h-14 object-cover rounded" />
                                <div>
                                    <div class="text-xs text-red-600 font-semibold">EXCLUSIVE</div>
                                    <a href="#" class="text-sm font-semibold text-blue-700 hover:underline"><?php echo $item['title']; ?></a>
                                    <div class="text-xs text-gray-500 mt-1"><?php echo $item['comments']; ?> comments</div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>

            <!-- Narrow ad column -->
            <div class="hidden md:block md:col-span-2">
                <div class="sticky top-24">
                    <div class="text-xs text-gray-500 mb-2">ADVERTISEMENT</div>
                    <div class="bg-white p-2 rounded shadow flex justify-center">
                        <img src="assets/ads.png" alt="Ad" class="w-28 h-auto object-contain" />
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include __DIR__ . '/footer.php'; ?>

<style>
/* brand color: royal purple (page-scoped) */
.royals-theme { --brand: #540C75; }
/* Override a few Tailwind-ish classes only inside this page wrapper */
.royals-theme .bg-blue-700 { background-color: var(--brand) !important; }
.royals-theme .bg-blue-600 { background-color: var(--brand) !important; }
.royals-theme .text-blue-700 { color: var(--brand) !important; }
.royals-theme .text-blue-800 { color: var(--brand) !important; }
.royals-theme .bg-blue-50 { background-color: rgba(84,12,117,0.06) !important; }

/* Feed sizing variables and shared card/image helpers (copied from index) */
/* Feed sizing variables and shared card/image helpers are centralized in header.php */

/* keep other helpers similar to index */
.anim-hidden { max-height: 0; opacity: 0; transform: translateY(-6px); transition: max-height .28s ease, opacity .28s ease, transform .28s ease; overflow: hidden; }
.anim-open { max-height: 600px; opacity: 1; transform: translateY(0); transition: max-height .35s ease, opacity .35s ease, transform .35s ease; }
.panel-slide { position: absolute; left: 100%; right: auto; top: 50%; transform-origin: left center; transform: translateY(-50%) translateX(0) scaleX(0); opacity: 0; transition: transform .26s cubic-bezier(.2,.9,.2,1), opacity .2s ease; z-index: 30; white-space: nowrap; pointer-events: none; }
.panel-slide.open { transform: translateY(-50%) translateX(10px) scaleX(1); opacity: 1; pointer-events: auto; }

#mainFiltersStrip, #catFiltersPanel, #category-strip-row, #personal-feed-row, #main-feed-row { -ms-overflow-style: none; scrollbar-width: none; }
#mainFiltersStrip::-webkit-scrollbar, #catFiltersPanel::-webkit-scrollbar, #category-strip-row::-webkit-scrollbar, #personal-feed-row::-webkit-scrollbar, #main-feed-row::-webkit-scrollbar { display: none; width: 0; height: 0; }
#mainFiltersStrip::-webkit-scrollbar-button, #catFiltersPanel::-webkit-scrollbar-button, #category-strip-row::-webkit-scrollbar-button, #personal-feed-row::-webkit-scrollbar-button, #main-feed-row::-webkit-scrollbar-button { display: none; width: 0; height: 0; }

.pf-card h3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}


/* Multi-line truncation for excerpt (e.g., 2 lines) */
.pf-card p {
    display: -webkit-box;
    -webkit-line-clamp: 2;    /* Number of lines to show */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}

</style>

<script>
// Embed PHP arrays as JSON for client-side filtering
const MAIN_FEED = <?php echo json_encode($main_feed, JSON_HEX_TAG); ?>;
const CAT_STRIP = <?php echo json_encode($category_strip, JSON_HEX_TAG); ?>;

const MAIN_FILTERS = ['All','King Charles III','Prince William','Kate Middleton','Prince Harry','Meghan Markle'];
const CAT_FILTERS = ['All','Charity','Environment','Welfare','Culture','Style','Travel'];

function renderMainFeed(filter) {
    const row = document.getElementById('main-feed-row');
    row.innerHTML = '';
    const items = MAIN_FEED.filter(i => !filter || filter === 'All' ? true : i.category === filter);
    if (items.length === 0) { row.innerHTML = '<div class="text-center text-gray-500">No items for this filter.</div>'; return; }
    items.forEach(post => {
        const art = document.createElement('article');
        art.className = 'pf-card bg-gray-50 rounded overflow-hidden shadow-sm';
        // derive href from explicit link or from title HTML anchor, fallback to article.php
        let href = 'articles/article.php';
        if (post.link) href = post.link;
        else if (post.title) {
            const tmp = document.createElement('div'); tmp.innerHTML = post.title;
            const a = tmp.querySelector('a'); if (a && a.getAttribute('href')) href = a.getAttribute('href');
        }
        // display title as plain text
        let displayTitle = post.title || '';
        if (post.title) { const tmp2 = document.createElement('div'); tmp2.innerHTML = post.title; displayTitle = tmp2.textContent || tmp2.innerText || post.title; }
        art.innerHTML = `
            <a href="${href}" class="block h-full">
                <img src="${post.image}" alt="${escapeHtml(displayTitle)}" class="pf-img" />
                <div class="p-3">
                    <h3 class="mt-2 font-bold text-sm">${escapeHtml(displayTitle)}</h3>
                    <p class="text-xs text-gray-600 mt-1">${escapeHtml(post.excerpt || post.title || '')}</p>
                    <div class="mt-3 text-xs text-gray-500">${post.comments} comments • ${post.shares} shares</div>
                </div>
            </a>`;
        row.appendChild(art);
    });
}

function renderCategoryStrip(filter) {
    const row = document.getElementById('category-strip-row');
    row.innerHTML = '';
    const items = CAT_STRIP.filter(i => !filter || filter === 'All' ? true : i.category === filter);
    if (items.length === 0) { row.innerHTML = '<div class="text-gray-500">No items for this filter.</div>'; return; }
    items.forEach(cat => {
        const card = document.createElement('article');
        card.className = 'pf-card bg-gray-50 rounded shadow-sm p-3';
        // derive href for category item
        let href = 'articles/article.php';
        if (cat.link) href = cat.link;
        else if (cat.title) { const tmp = document.createElement('div'); tmp.innerHTML = cat.title; const a = tmp.querySelector('a'); if (a && a.getAttribute('href')) href = a.getAttribute('href'); }
        let displayTitle = cat.title || '';
        if (cat.title) { const tmp2 = document.createElement('div'); tmp2.innerHTML = cat.title; displayTitle = tmp2.textContent || tmp2.innerText || cat.title; }
        card.innerHTML = `
            <a href="${href}" class="block h-full">
                <img src="${cat.image}" alt="${escapeHtml(displayTitle)}" class="pf-img rounded" />
                <h4 class="mt-2 font-bold text-sm">${escapeHtml(displayTitle)}</h4>
                <p class="text-xs text-gray-600 mt-1">${escapeHtml(cat.excerpt || cat.title || '')}</p>
                <div class="text-xs text-gray-500 mt-1">${cat.comments} comments • ${cat.shares} shares</div>
            </a>`;
        row.appendChild(card);
    });
}

function escapeHtml(str) { return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;'); }

function renderMainFilters() {
    const container = document.getElementById('mainFiltersStrip'); if(!container) return;
    MAIN_FILTERS.forEach(f => {
        const btn = document.createElement('button');
        btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap';
        btn.textContent = f; btn.dataset.filter = f;
        btn.addEventListener('click', () => { document.querySelectorAll('#mainFiltersStrip button').forEach(b => { b.classList.remove('bg-blue-600','text-white'); b.classList.add('bg-white','text-gray-800'); }); btn.classList.remove('bg-white','text-gray-800'); btn.classList.add('bg-blue-600','text-white'); renderMainFeed(f); });
        container.appendChild(btn);
    });
    const first = container.querySelector('button[data-filter="All"]'); if (first) first.click();
}

function renderCatFilters() {
    const panel = document.getElementById('catFiltersPanel'); if(!panel) return;
    CAT_FILTERS.forEach(f => {
        const btn = document.createElement('button'); btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap'; btn.textContent = f; btn.dataset.filter = f;
        btn.addEventListener('click', () => { document.querySelectorAll('#catFiltersPanel button').forEach(b => { b.classList.remove('bg-blue-600','text-white'); b.classList.add('bg-white','text-gray-800'); }); btn.classList.remove('bg-white','text-gray-800'); btn.classList.add('bg-blue-600','text-white'); renderCategoryStrip(f); });
        panel.appendChild(btn);
    });
    const first = panel.querySelector('button[data-filter="All"]'); if (first) first.click();
}

document.addEventListener('DOMContentLoaded', function(){ renderMainFilters(); renderCatFilters(); const mainToggle = document.getElementById('mainFiltersToggle'); const mainStrip = document.getElementById('mainFiltersStrip'); const mainIcon = document.getElementById('mainToggleIcon'); if (mainToggle && mainStrip) { mainToggle.addEventListener('click', () => { const isOpen = mainStrip.classList.toggle('open'); mainToggle.setAttribute('aria-expanded', String(isOpen)); if (mainIcon) mainIcon.classList.toggle('rotate-180', isOpen); }); }
    const catToggle = document.getElementById('catFiltersToggle'); const catPanel = document.getElementById('catFiltersPanel'); const catIcon = document.getElementById('catToggleIcon'); if (catToggle && catPanel) { catToggle.addEventListener('click', () => { const isOpen = catPanel.classList.toggle('open'); catToggle.setAttribute('aria-expanded', String(isOpen)); if (catIcon) catIcon.classList.toggle('rotate-180', isOpen); }); }
    window.scrollFeed = function(id, dir) { const el = document.getElementById(id); if (!el) return; const amount = Math.round(el.clientWidth * 0.7) || 300; el.scrollBy({ left: dir === 'left' ? -amount : amount, behavior: 'smooth' }); };
});
</script>   
