<?php
$pageTitle = 'DailyMail+';
include __DIR__ . '/header.php';

?>
<style>
/* Slide panel used by homepage filters */
.panel-slide { position: absolute; left: 100%; right: auto; top: 50%; transform-origin: left center; transform: translateY(-50%) translateX(0) scaleX(0); opacity: 0; transition: transform .26s cubic-bezier(.2,.9,.2,1), opacity .2s ease; z-index:30; white-space:nowrap; pointer-events:none; max-width: calc(100vw - 120px); box-sizing: border-box; }
.panel-slide.open { transform: translateY(-50%) translateX(10px) scaleX(1); opacity:1; pointer-events:auto; }

/* hide scrollbars for filter strips */
#mainFiltersStrip, #catFiltersPanel, #mplus-personal-row, #mplus-main-feed-row, #mplus-category-strip-row { -ms-overflow-style: none; scrollbar-width: none; }
#mainFiltersStrip::-webkit-scrollbar, #catFiltersPanel::-webkit-scrollbar, #mplus-personal-row::-webkit-scrollbar, #mplus-main-feed-row::-webkit-scrollbar, #mplus-category-strip-row::-webkit-scrollbar { display:none; width:0; height:0; }
</style>
<?php
// Dummy m+ content arrays (unique to m+)
$mplus_personal = [
    [
        'title' => 'How I started mornings like a chef',
        'excerpt' => 'A simple routine that boosted my creativity.',
        'comments' => 2,
        'shares' => 0,
        'image' => 'assets/Buyline_assets/HomeGarden_1.avif',
        'link' => '#'
    ],
    [
        'title' => 'Small apartment styling tips',
        'excerpt' => 'Maximise space with easy changes.',
        'comments' => 1,
        'shares' => 0,
        'image' => 'assets/HomePage_assets/Homepage_article1-image2.png',
        'link' => '#'
    ],
    [
        'title' => 'Weekend wellness rituals',
        'excerpt' => 'Simple rituals to reset your week.',
        'comments' => 0,
        'shares' => 0,
        'image' => 'assets/HomePage_assets/Homepage_article4-image1.png',
        'link' => '#'
    ]
];

$mplus_main = [
    [
        'title' => "Exclusive: Inside m+ — The City's Most Secret Skin Treatments",
        'excerpt' => "We tried the treatments top insiders swear by — here's what actually works.",
        'comments' => 12,
        'shares' => 3,
        'image' => 'assets/news_article_pics/News-4.avif',
        'category' => 'Exclusive'
    ],
    [
        'title' => "Trending on m+: A-List Fitness Routines You Can Do At Home",
        'excerpt' => "Short, intense workouts recommended by celebs — no equipment needed.",
        'comments' => 4,
        'shares' => 1,
        'image' => 'assets/MPlus_assets/mplus-assets-img1.png',
        'category' => 'Trending'
    ],
    [
        'title' => "Best of DailyMail+: The Fashion Looks We'll Be Wearing",
        'excerpt' => "Our editors round up the season's standout outfits and where to buy them.",
        'comments' => 8,
        'shares' => 2,
        'image' => 'assets/HomePage_assets/Homepage_article1-image1.png',
        'category' => 'Best of DailyMail+'
    ],
    [
        'title' => "Beauty: The Serum That Changed Our Skin",
        'excerpt' => "A deep dive into a cult-favourite product everyone is talking about on m+.",
        'comments' => 3,
        'shares' => 0,
        'image' => 'assets/HomePage_assets/Homepage_article4-image1.png',
        'category' => 'Beauty'
    ],
    [
        'title' => "Lifestyle: How To Create A Calm Bedroom",
        'excerpt' => "Small tweaks that make a big difference to sleep and relaxation.",
        'comments' => 1,
        'shares' => 0,
        'image' => 'assets/news_article_pics/news1coffeeimg2.png',
        'category' => 'Lifestyle'
    ]
];

$mplus_categories = [
    [
        'title' => "Sports: Insider Roundup",
        'comments' => 0,
        'shares' => 0,
        'image' => 'assets/news_article_pics/News-18.avif',
        'category' => 'Sports'
    ],
    [
        'title' => "Showbiz: Behind The Scenes",
        'comments' => 2,
        'shares' => 1,
        'image' => 'assets/news_article_pics/tv_latestimg1.png',
        'category' => 'Showbiz'
    ],
    [
        'title' => "Beauty: Editor Picks",
        'comments' => 5,
        'shares' => 2,
        'image' => 'assets/HomePage_assets/Homepage_article4-image1.png',
        'category' => 'Beauty'
    ],
    [
        'title' => "Fashion: Street To Runway",
        'comments' => 7,
        'shares' => 0,
        'image' => 'assets/HomePage_assets/Homepage_article1-image2.png',
        'category' => 'Fashion'
    ],
    [
        'title' => "Lifestyle: Home Edit",
        'comments' => 1,
        'shares' => 0,
        'image' => 'assets/HomePage_assets/Homepage_article4-image1.png',
        'category' => 'Lifestyle'
    ],
    [
        'title' => "Money: Smart Spending",
        'comments' => 0,
        'shares' => 0,
        'image' => 'assets/news_article_pics/News-9.avif',
        'category' => 'Money'
    ],
    [
        'title' => "Health: Wellness Trends",
        'comments' => 2,
        'shares' => 0,
        'image' => 'assets/news_article_pics/News-7.avif',
        'category' => 'Health'
    ]
];

// Titles displays in blue font color style in the modal
$mplus_noquote_titles = [
    'How I started mornings like a chef',
    'Small apartment styling tips',
    'Weekend wellness rituals',
    "Exclusive: Inside m+ — The City's Most Secret Skin Treatments",
    "Trending on m+: A-List Fitness Routines You Can Do At Home",
    "Best of DailyMail+: The Fashion Looks We'll Be Wearing",
    "Beauty: The Serum That Changed Our Skin",
    "Lifestyle: How To Create A Calm Bedroom",
    "Sports: Insider Roundup",
    "Showbiz: Behind The Scenes",
    "Beauty: Editor Picks",
    "Fashion: Street To Runway",
    "Lifestyle: Home Edit",
    "Money: Smart Spending",
    "Health: Wellness Trends"
];

// If true, apply blue/no-quotes modal style to all m+ titles
$mplus_noquote_all = true;
?>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <div class="md:col-span-7">
                <section class="mb-8">
                    <h1 class="text-2xl font-semibold">DailyMail+</h1>
                    <p class="text-gray-600 mt-2">Premium content for DailyMail+ subscribers. Click any article to learn more.</p>
                </section>

                <!-- HERO ARTICLE -->
                <section class="mb-8">
                    <img src="assets/HomePage_assets/Homepage_article2-image1.png" alt="m+ hero" class="w-full rounded-lg shadow object-cover" style="height:320px;" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold"><a href="#" class="text-blue-800 hover:underline mplus-trigger" data-title="How m+ curates exclusive content" data-return="/mplus.php#mplus:hero">How m+ curates exclusive content</a></h2>
                        <p class="text-gray-600 mt-2">A selection of the best articles, interviews and features available on DailyMail+.</p>
                    </div>
                </section>

                <!-- PERSONAL FEED (matches homepage layout) -->
                <section class="mb-8">
                    <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">PERSONAL FEED</div>
                    <div class="bg-white p-4 rounded-b-lg shadow mt-2">
                        <div class="relative">
                            <button aria-label="Scroll personal left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('mplus-personal-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="mplus-personal-row" class="flex gap-4 overflow-x-auto py-2 px-8">
                                <!-- personal feed cards rendered by JS -->
                            </div>
                            <button aria-label="Scroll personal right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('mplus-personal-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- MAIN FEED -->
                <section class="mb-8">
                    <div class="flex items-center">
                                <div class="inline-flex items-center relative" style="position:relative;">
                                    <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">MAIN FEED</div>
                                    <button id="mainFiltersToggle" aria-expanded="false" aria-controls="mainFiltersStrip" class="ml-2 h-9 w-9 flex items-center justify-center text-sm rounded bg-white border">
                                        <svg id="mainToggleIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-0 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 4a1 1 0 011.707-.707l6 6a1 1 0 010 1.414l-6 6A1 1 0 016 16.586L11.586 11 6 5.414A1 1 0 016 4z" clip-rule="evenodd"/></svg>
                                    </button>
                                    <div id="mainFiltersStrip" class="panel-slide bg-white border rounded h-9 flex items-center gap-2 px-2 overflow-x-auto"></div>
                                </div>
                    </div>
                    <div class="bg-white p-4 rounded-b-lg shadow">
                        <div class="relative">
                            <button aria-label="Scroll main left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('mplus-main-feed-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="mplus-main-feed-row" class="flex gap-6 overflow-x-auto py-2 px-8">
                                <!-- m+ main feed cards rendered by JS -->
                            </div>
                            <button aria-label="Scroll main right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('mplus-main-feed-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- CATEGORY STRIP -->
                <section class="mb-8">
                    <div class="flex items-center">
                        <div class="inline-flex items-center relative" style="position:relative;">
                            <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">CATEGORY STRIP</div>
                            <button id="catFiltersToggle" aria-expanded="false" aria-controls="catFiltersPanel" class="ml-2 h-9 w-9 flex items-center justify-center text-sm rounded bg-white border">
                                <svg id="catToggleIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-0 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 4a1 1 0 011.707-.707l6 6a1 1 0 010 1.414l-6 6A1 1 0 016 16.586L11.586 11 6 5.414A1 1 0 016 4z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="catFiltersPanel" class="panel-slide bg-white border rounded h-9 flex items-center gap-2 px-2 overflow-x-auto"></div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-b-lg shadow">
                        <div class="relative">
                            <button aria-label="Scroll category left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('mplus-category-strip-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="mplus-category-strip-row" class="flex gap-4 overflow-x-auto py-2 px-8">
                                <!-- m+ category cards rendered by JS -->
                            </div>
                            <button aria-label="Scroll category right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('mplus-category-strip-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <aside class="md:col-span-3">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-blue-600 text-white px-4 py-2 font-semibold">Don't Miss (M+)</div>
                    <div class="p-3">
                        <?php foreach(array_slice($mplus_main,0,3) as $item): ?>
                            <div class="flex gap-3 py-3 border-b last:border-b-0">
                                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-20 h-14 object-cover rounded" />
                                <div>
                                    <div class="text-xs text-red-600 font-semibold">EXCLUSIVE</div>
                                    <a href="#" class="text-sm font-semibold text-blue-700 hover:underline mplus-trigger" data-title="<?php echo htmlspecialchars($item['title']); ?>" data-return="<?php echo '/mplus.php#mplus:' . rawurlencode($item['title']); ?>"><?php echo $item['title']; ?></a>
                                    <div class="text-xs text-gray-500 mt-1"><?php echo $item['comments']; ?> comments</div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>

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

    <!-- Subscription modal -->
    <div id="mplusModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg max-w-md w-full p-6">
            <h2 class="text-xl font-semibold">Subscribe to DailyMail+</h2>
            <p class="text-gray-600 mt-2">This content is available to DailyMail+ subscribers only. Subscribe to access exclusive m+ articles.</p>
            <div class="mt-4 flex justify-end gap-2">
                <button id="mplusCancel" class="px-4 py-2 rounded border">Close</button>
                <a id="mplusSubscribe" href="login.php" class="px-4 py-2 rounded bg-blue-600 text-white">Subscribe</a>
            </div>
        </div>
    </div>

<?php include __DIR__ . '/footer.php'; ?>

<script>
const MPLUS_MAIN = <?php echo json_encode($mplus_main, JSON_HEX_TAG); ?>;
const MPLUS_CAT = <?php echo json_encode($mplus_categories, JSON_HEX_TAG); ?>;
const MPLUS_PERSONAL = <?php echo json_encode($mplus_personal, JSON_HEX_TAG); ?>;

const MPLUS_MAIN_FILTERS = ['All','Exclusive','Trending','Best of DailyMail+'];
const MPLUS_CAT_FILTERS = ['All','Sports','Showbiz','Beauty','Fashion','Lifestyle','Money','Health'];

// Titles that should display modal text without quotes and in blue (injected from PHP)
const MPLUS_NOQUOTE_TITLES = <?php echo json_encode($mplus_noquote_titles, JSON_HEX_TAG); ?>;
// Global flag: if true, all m+ modal titles render without quotes and in blue
const MPLUS_NOQUOTE_ALL = <?php echo json_encode($mplus_noquote_all, JSON_HEX_TAG); ?>;

function escapeHtml(str){ return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;'); }

function renderMPlusMain(filter){
    const row = document.getElementById('mplus-main-feed-row');
    row.innerHTML = '';
    const items = MPLUS_MAIN.filter(i => !filter || filter === 'All' ? true : i.category === filter).slice(0,7);
    items.forEach(post => {
        const art = document.createElement('article');
        art.className = 'pf-card bg-gray-50 rounded overflow-hidden shadow-sm';
        art.innerHTML = `
            <a href="#" class="block h-full mplus-trigger" data-title="${escapeHtml(post.title)}" data-return="${location.pathname}#mplus:${encodeURIComponent(post.title)}">
                <img src="${post.image}" alt="${escapeHtml(post.title)}" class="pf-img" />
                <div class="p-3">
                    <h3 class="mt-2 font-bold text-sm">${escapeHtml(post.title)}</h3>
                    <p class="text-xs text-gray-600 mt-1">${escapeHtml(post.excerpt || post.title)}</p>
                    <div class="mt-3 text-xs text-gray-500">${post.comments} comments • ${post.shares || 0} shares</div>
                </div>
            </a>`;
        row.appendChild(art);
    });
}

function renderMPlusCategories(filter){
    const row = document.getElementById('mplus-category-strip-row');
    row.innerHTML = '';
    const items = MPLUS_CAT.filter(i => !filter || filter === 'All' ? true : i.category === filter).slice(0,7);
    items.forEach(cat => {
        const card = document.createElement('div');
        card.className = 'pf-card bg-gray-50 rounded shadow-sm p-3';
        card.innerHTML = `
            <a href="#" class="block h-full mplus-trigger" data-title="${escapeHtml(cat.title)}" data-return="${location.pathname}#mplus:${encodeURIComponent(cat.title)}">
                <img src="${cat.image}" alt="${escapeHtml(cat.title)}" class="pf-img rounded" />
                <h4 class="mt-2 font-bold text-sm">${escapeHtml(cat.title)}</h4>
                <p class="text-xs text-gray-600 mt-1">${escapeHtml(cat.excerpt || cat.title || '')}</p>
                <div class="text-xs text-gray-500 mt-1">${cat.comments} comments</div>
            </a>`;
        row.appendChild(card);
    });
}

function renderMPlusPersonal(){
    const row = document.getElementById('mplus-personal-row');
    if(!row) return;
    row.innerHTML = '';
    MPLUS_PERSONAL.forEach(item => {
        const art = document.createElement('article');
        art.className = 'pf-card border p-3 bg-gray-50';
        const href = item.link || '#';
        art.innerHTML = `
            <a href="${href}" class="block h-full mplus-trigger" data-title="${escapeHtml(item.title)}" data-return="${location.pathname}#mplus:${encodeURIComponent(item.title)}">
                <img src="${item.image}" alt="${escapeHtml(item.title)}" class="pf-img rounded" />
                <h3 class="mt-2 font-bold text-sm">${escapeHtml(item.title)}</h3>
                <p class="text-xs text-gray-600 mt-1">${escapeHtml(item.excerpt || '')}</p>
                <div class="mt-2 text-xs text-gray-500">${item.comments} comments • ${item.shares || 0} shares</div>
            </a>`;
        row.appendChild(art);
    });
}

// helper to scroll horizontal rows
window.scrollFeed = function(id, dir) {
    const el = document.getElementById(id);
    if (!el) return;
    const amount = Math.round(el.clientWidth * 0.7) || 300;
    el.scrollBy({ left: dir === 'left' ? -amount : amount, behavior: 'smooth' });
}

function renderMPlusMainFilters(){
    const container = document.getElementById('mainFiltersStrip');
    if(!container) return;
    MPLUS_MAIN_FILTERS.forEach(f => {
        const btn = document.createElement('button');
        btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap';
        btn.textContent = f;
        btn.dataset.filter = f;
        btn.addEventListener('click', () => {
            // mirror index.php behaviour: reset all buttons to white/gray, then make clicked one blue/white
            document.querySelectorAll('#mainFiltersStrip button').forEach(b => { b.classList.remove('bg-blue-600','text-white'); b.classList.add('bg-white','text-gray-800'); });
            btn.classList.remove('bg-white','text-gray-800');
            btn.classList.add('bg-blue-600','text-white');
            renderMPlusMain(f);
        });
        container.appendChild(btn);
    });
    const first = container.querySelector('button[data-filter="All"]'); if(first) first.click();
}

function renderMPlusCatFilters(){
    const container = document.getElementById('catFiltersPanel');
    if(!container) return;
    MPLUS_CAT_FILTERS.forEach(f => {
        const btn = document.createElement('button');
        btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap';
        btn.textContent = f;
        btn.dataset.filter = f;
        btn.addEventListener('click', () => {
            // mirror index.php behaviour: reset all buttons to white/gray, then make clicked one blue/white
            document.querySelectorAll('#catFiltersPanel button').forEach(b => { b.classList.remove('bg-blue-600','text-white'); b.classList.add('bg-white','text-gray-800'); });
            btn.classList.remove('bg-white','text-gray-800');
            btn.classList.add('bg-blue-600','text-white');
            renderMPlusCategories(f);
        });
        container.appendChild(btn);
    });
    const first = container.querySelector('button[data-filter="All"]'); if(first) first.click();
}

function openMPlusModal(title, returnUrl, forceNoQuote){
    const modal = document.getElementById('mplusModal');
    if(!modal) return;
    const p = modal.querySelector('p');
    if (p) {
        // Determine whether to display the raw title (no quotes) or quoted title
        const listed = Array.isArray(MPLUS_NOQUOTE_TITLES) && MPLUS_NOQUOTE_TITLES.indexOf(title) !== -1;
        const useNoQuote = Boolean(forceNoQuote) || listed || (typeof MPLUS_NOQUOTE_ALL !== 'undefined' && MPLUS_NOQUOTE_ALL);
        const escaped = escapeHtml(title);
        const displayTitle = useNoQuote ? escaped : `"${escaped}"`;
        // Only the title span should be blue; the rest of the message remains gray.
        const rest = ' is available to DailyMail+ subscribers only. Subscribe to access this article.';
        p.innerHTML = `<span class="text-blue-700 font-semibold">${displayTitle}</span><span class="text-gray-600"> ${rest}</span>`;
        // ensure p does not carry a contradictory color class
        p.classList.remove('text-blue-700');
        p.classList.add('mt-2');
    }
    // set subscribe link to include next=returnUrl so user returns after login
    const subscribe = document.getElementById('mplusSubscribe');
    if(subscribe){
        const next = returnUrl ? encodeURIComponent(returnUrl) : encodeURIComponent(location.pathname);
        subscribe.setAttribute('href', `login.php?next=${next}`);
    }
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeMPlusModal(){
    const modal = document.getElementById('mplusModal');
    if(!modal) return;
    modal.classList.remove('flex');
    modal.classList.add('hidden');
}

document.addEventListener('DOMContentLoaded', function(){
    renderMPlusPersonal();
    renderMPlusMainFilters();
    renderMPlusCatFilters();

    // delegate click to mplus-trigger anchors to open modal
    document.body.addEventListener('click', function(e){
        const a = e.target.closest && e.target.closest('.mplus-trigger');
        if(a){
                e.preventDefault();
                const title = a.dataset.title || a.textContent.trim() || 'This article';
                const returnUrl = a.dataset.return || (location.pathname + '#mplus:' + encodeURIComponent(title));
                // determine no-quote usage: explicit data-noquote, server list, or global flag
                const explicit = (a.dataset.noquote === '1');
                const inList = Array.isArray(MPLUS_NOQUOTE_TITLES) && MPLUS_NOQUOTE_TITLES.indexOf(title) !== -1;
                const useNoQuote = explicit || inList || (typeof MPLUS_NOQUOTE_ALL !== 'undefined' && MPLUS_NOQUOTE_ALL);
                openMPlusModal(title, returnUrl, useNoQuote);
            }
    });

    const cancel = document.getElementById('mplusCancel'); if(cancel) cancel.addEventListener('click', closeMPlusModal);
    // clicking outside the modal content closes it
    const modalEl = document.getElementById('mplusModal'); if(modalEl) modalEl.addEventListener('click', function(e){ if (e.target === this) closeMPlusModal(); });

    // Wire filter toggles to behave like the homepage (panel-slide)
    const mainToggle = document.getElementById('mainFiltersToggle');
    const mainStrip = document.getElementById('mainFiltersStrip');
    const mainIcon = document.getElementById('mainToggleIcon');
    if (mainToggle && mainStrip) {
        mainToggle.addEventListener('click', () => {
            const isOpen = mainStrip.classList.toggle('open');
            mainToggle.setAttribute('aria-expanded', String(isOpen));
            if (mainIcon) mainIcon.classList.toggle('rotate-180', isOpen);
        });
    }
    const catToggle = document.getElementById('catFiltersToggle');
    const catPanel = document.getElementById('catFiltersPanel');
    const catIcon = document.getElementById('catToggleIcon');
    if (catToggle && catPanel) {
        catToggle.addEventListener('click', () => {
            const isOpen = catPanel.classList.toggle('open');
            catToggle.setAttribute('aria-expanded', String(isOpen));
            if (catIcon) catIcon.classList.toggle('rotate-180', isOpen);
        });
    }
});
</script>
