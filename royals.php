<?php
// Royals landing page (based on index.php) — royal-themed placeholders
$personal_feed = [
    [
        'title' => "King Charles III visits local community centre",
        'excerpt' => "The King met volunteers and launched a new initiative.",
        'comments' => 34,
        'shares' => 6,
        'image' => 'https://via.placeholder.com/400x200?text=King+Charles'
    ],
    [
        'title' => 'Kate Middleton attends school charity event',
        'excerpt' => "The Princess of Wales praised teachers and pupils.",
        'comments' => 27,
        'shares' => 4,
        'image' => 'https://via.placeholder.com/400x200?text=Kate+Middleton'
    ],
    [
        'title' => 'Prince William visits wildlife reserve',
        'excerpt' => "Focus on conservation and youth engagement.",
        'comments' => 18,
        'shares' => 2,
        'image' => 'https://via.placeholder.com/400x200?text=Prince+William'
    ],
    [
        'title' => 'Prince Harry launches new veterans charity',
        'excerpt' => "Programme aims to support ex-service personnel.",
        'comments' => 22,
        'shares' => 3,
        'image' => 'https://via.placeholder.com/400x200?text=Prince+Harry'
    ],
    [
        'title' => 'Meghan Markle shares mental health advice',
        'excerpt' => "Actor and campaigner speaks about wellbeing.",
        'comments' => 41,
        'shares' => 7,
        'image' => 'https://via.placeholder.com/400x200?text=Meghan+Markle'
    ],
    [
        'title' => 'Royal garden party highlights young artists',
        'excerpt' => "Young creatives display work in palace gardens.",
        'comments' => 5,
        'shares' => 0,
        'image' => 'https://via.placeholder.com/400x200?text=Garden+Party'
    ],
    [
        'title' => 'Historic portrait unveiled at National Gallery',
        'excerpt' => "A new painting of a senior royal is revealed.",
        'comments' => 9,
        'shares' => 1,
        'image' => 'https://via.placeholder.com/400x200?text=Portrait'
    ],
];

$main_feed = [
    [
        'title' => "King Charles III hosts diplomatic reception",
        'excerpt' => "Ambassadors gathered for talks at Buckingham Palace.",
        'comments' => 220,
        'shares' => 34,
        'image' => 'https://via.placeholder.com/360x220?text=Royal+Reception',
        'category' => 'Royals'
    ],
    [
        'title' => 'Kate Middleton to champion early years education',
        'excerpt' => "A new campaign will focus on nursery support.",
        'comments' => 160,
        'shares' => 19,
        'image' => 'https://via.placeholder.com/360x220?text=Kate+Education',
        'category' => 'Features'
    ],
    [
        'title' => 'Prince William visits youth mental health centre',
        'excerpt' => "Emphasis on services for young people.",
        'comments' => 98,
        'shares' => 12,
        'image' => 'https://via.placeholder.com/360x220?text=William+Visit',
        'category' => 'U.K.'
    ],
    [
        'title' => 'Prince Harry releases new memoir excerpt',
        'excerpt' => "A chapter reflects on military service and family.",
        'comments' => 305,
        'shares' => 48,
        'image' => 'https://via.placeholder.com/360x220?text=Harry+Memoir',
        'category' => 'Books'
    ],
    [
        'title' => 'Meghan Markle advocates for women entrepreneurs',
        'excerpt' => "Initiative to provide mentoring and seed funding.",
        'comments' => 142,
        'shares' => 21,
        'image' => 'https://via.placeholder.com/360x220?text=Meghan+Campaign',
        'category' => 'Business'
    ],
    [
        'title' => 'Royal tour schedule announced for spring',
        'excerpt' => "A series of engagements across the UK and Commonwealth.",
        'comments' => 73,
        'shares' => 8,
        'image' => 'https://via.placeholder.com/360x220?text=Royal+Tour',
        'category' => 'U.K.'
    ],
    [
        'title' => 'Palace reveals archival footage of coronation',
        'excerpt' => "Restored clips to be part of a public exhibition.",
        'comments' => 56,
        'shares' => 6,
        'image' => 'https://via.placeholder.com/360x220?text=Coronation',
        'category' => 'Culture'
    ],
];

$category_strip = [
    [
        'title' => "Kate Middleton visits children's hospice",
        'comments' => 84,
        'shares' => 11,
        'image' => 'https://via.placeholder.com/300x180?text=Kate+Hospice',
        'category' => 'Charity'
    ],
    [
        'title' => 'William speaks at climate forum',
        'comments' => 47,
        'shares' => 6,
        'image' => 'https://via.placeholder.com/300x180?text=William+Climate',
        'category' => 'Environment'
    ],
    [
        'title' => 'Harry attends veterans wellbeing workshop',
        'comments' => 59,
        'shares' => 7,
        'image' => 'https://via.placeholder.com/300x180?text=Harry+Veterans',
        'category' => 'Welfare'
    ],
    [
        'title' => 'Meghan launches mentoring platform',
        'comments' => 101,
        'shares' => 14,
        'image' => 'https://via.placeholder.com/300x180?text=Meghan+Mentor',
        'category' => 'Business'
    ],
    [
        'title' => 'King Charles highlights conservation grants',
        'comments' => 33,
        'shares' => 3,
        'image' => 'https://via.placeholder.com/300x180?text=Charles+Conservation',
        'category' => 'Royals'
    ],
    [
        'title' => 'Royal fashion: Kate’s season favourites',
        'comments' => 12,
        'shares' => 1,
        'image' => 'https://via.placeholder.com/300x180?text=Kate+Style',
        'category' => 'Style'
    ],
    [
        'title' => 'Guide: Visiting royal palaces this winter',
        'comments' => 6,
        'shares' => 0,
        'image' => 'https://via.placeholder.com/300x180?text=Palaces',
        'category' => 'Travel'
    ],
];

// uses shared header/footer
include __DIR__ . '/header.php';
?>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Main column -->
            <div class="md:col-span-7">
                <!-- Hero Section -->
                <section class="mb-8">
                    <img src="assets/news_article_pics/royals_latestimg1.png" alt="Hero" class="w-full rounded-lg shadow object-cover" style="height:320px;" />
                    <div class="mt-4">
                        <h1 class="text-2xl font-semibold"><a href="articles/royals_latest_article.php" class="text-blue-800 hover:underline">Prince Harry should be stripped of his titles after Trump-mocking Colbert appearance to bring 'clarity' to Americans who just see a 'British prince insulting their head of state'</a></h1>
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
                                    <article class="pf-card border p-3 bg-gray-50">
                                        <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="pf-img rounded" />
                                        <h3 class="mt-2 font-bold text-sm"><?php echo $item['title']; ?></h3>
                                        <p class="text-xs text-gray-600 mt-1"><?php echo $item['excerpt']; ?></p>
                                        <div class="mt-2 text-xs text-gray-500"><?php echo $item['comments']; ?> comments • <?php echo $item['shares']; ?> share</div>
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
                        <?php foreach(array_slice($main_feed,0,3) as $item): ?>
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
/* brand color: royal purple */
:root{ --brand: #540C75; }
/* Override a few Tailwind-ish classes locally for this page only */
.bg-blue-700 { background-color: var(--brand) !important; }
.bg-blue-600 { background-color: var(--brand) !important; }
.text-blue-700 { color: var(--brand) !important; }
.text-blue-800 { color: var(--brand) !important; }
.bg-blue-50 { background-color: rgba(84,12,117,0.06) !important; }

/* Feed sizing variables and shared card/image helpers (copied from index) */
:root{
    --pf-card-width: 200px;
    --pf-img-height: 140px;
}
.pf-card{ flex: 0 0 var(--pf-card-width); width: var(--pf-card-width); box-sizing: border-box; border-radius:0.5rem; overflow:hidden; }
.pf-img{ width:100%; height:var(--pf-img-height); object-fit:cover; display:block; }

/* keep other helpers similar to index */
.anim-hidden { max-height: 0; opacity: 0; transform: translateY(-6px); transition: max-height .28s ease, opacity .28s ease, transform .28s ease; overflow: hidden; }
.anim-open { max-height: 600px; opacity: 1; transform: translateY(0); transition: max-height .35s ease, opacity .35s ease, transform .35s ease; }
.panel-slide { position: absolute; left: 100%; right: auto; top: 50%; transform-origin: left center; transform: translateY(-50%) translateX(0) scaleX(0); opacity: 0; transition: transform .26s cubic-bezier(.2,.9,.2,1), opacity .2s ease; z-index: 30; white-space: nowrap; pointer-events: none; }
.panel-slide.open { transform: translateY(-50%) translateX(10px) scaleX(1); opacity: 1; pointer-events: auto; }

#mainFiltersStrip, #catFiltersPanel, #category-strip-row, #personal-feed-row, #main-feed-row { -ms-overflow-style: none; scrollbar-width: none; }
#mainFiltersStrip::-webkit-scrollbar, #catFiltersPanel::-webkit-scrollbar, #category-strip-row::-webkit-scrollbar, #personal-feed-row::-webkit-scrollbar, #main-feed-row::-webkit-scrollbar { display: none; width: 0; height: 0; }
#mainFiltersStrip::-webkit-scrollbar-button, #catFiltersPanel::-webkit-scrollbar-button, #category-strip-row::-webkit-scrollbar-button, #personal-feed-row::-webkit-scrollbar-button, #main-feed-row::-webkit-scrollbar-button { display: none; width: 0; height: 0; }
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
    const items = MAIN_FEED.filter(i => !filter || filter === 'All' ? true : i.category === filter).slice(0,7);
    if (items.length === 0) { row.innerHTML = '<div class="text-center text-gray-500">No items for this filter.</div>'; return; }
    items.forEach(post => {
        const art = document.createElement('article');
        art.className = 'pf-card bg-gray-50 rounded overflow-hidden shadow-sm';
        art.innerHTML = `
            <img src="${post.image}" alt="${escapeHtml(post.title)}" class="pf-img" />
            <div class="p-3">
                <h3 class="font-semibold">${escapeHtml(post.title)}</h3>
                <p class="text-sm text-gray-600 mt-1">${escapeHtml(post.excerpt || '')}</p>
                <div class="mt-3 text-xs text-gray-500">${post.comments} comments • ${post.shares} shares</div>
            </div>`;
        row.appendChild(art);
    });
}

function renderCategoryStrip(filter) {
    const row = document.getElementById('category-strip-row');
    row.innerHTML = '';
    const items = CAT_STRIP.filter(i => !filter || filter === 'All' ? true : i.category === filter).slice(0,7);
    if (items.length === 0) { row.innerHTML = '<div class="text-gray-500">No items for this filter.</div>'; return; }
    items.forEach(cat => {
        const card = document.createElement('div');
        card.className = 'pf-card bg-gray-50 rounded shadow-sm p-3';
        card.innerHTML = `
            <img src="${cat.image}" alt="${escapeHtml(cat.title)}" class="pf-img rounded" />
            <h4 class="mt-2 font-semibold text-sm">${escapeHtml(cat.title)}</h4>
            <div class="text-xs text-gray-500 mt-1">${cat.comments} comments • ${cat.shares} shares</div>`;
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
