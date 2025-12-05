<?php
// Simple Home page using Tailwind via CDN, PHP arrays for content, and minimal JS
$personal_feed = [
    [
        'title' => "Gary Neville reveals David Luiz's message",
        'excerpt' => "Former Manchester United man reveals unusual message.",
        'comments' => 23,
        'shares' => 1,
        'image' => 'https://via.placeholder.com/400x200?text=Personal+1'
    ],
    [
        'title' => 'World Cup play-off draw: Wales and Northern Ireland',
        'excerpt' => "Wales and Northern Ireland in collision course for place in tournament.",
        'comments' => 1,
        'shares' => 0,
        'image' => 'assets/news_article_pics/news1coffeeimg1.png'
    ],
    [
        'title' => 'Tom Hanks makes lo subway official',
        'excerpt' => "Tom Hanks made a cameo in a surprise appearance.",
        'comments' => 1,
        'shares' => 0,
        'image' => 'https://via.placeholder.com/400x200?text=Personal+3'
    ],
    [
        'title' => 'Local baker wins national pie award',
        'excerpt' => "Small bakery takes home grand prize for rhubarb pie.",
        'comments' => 5,
        'shares' => 2,
        'image' => 'https://via.placeholder.com/400x200?text=Personal+4'
    ],
    [
        'title' => 'City park reopens after renovation',
        'excerpt' => "Playgrounds and paths have been upgraded for families.",
        'comments' => 2,
        'shares' => 0,
        'image' => 'https://via.placeholder.com/400x200?text=Personal+5'
    ],
    [
        'title' => 'New exhibition celebrates local artists',
        'excerpt' => "Gallery opens a month-long show of contemporary work.",
        'comments' => 0,
        'shares' => 0,
        'image' => 'https://via.placeholder.com/400x200?text=Personal+6'
    ],
    [
        'title' => 'Weekend farmers market: what to expect',
        'excerpt' => "Seasonal produce and live music on the high street.",
        'comments' => 3,
        'shares' => 1,
        'image' => 'https://via.placeholder.com/400x200?text=Personal+7'
    ],
];

$main_feed = [
    [
        'title' => "Trump's officials arrive in Ukraine",
        'excerpt' => "Officials arrived to try to force Zelensky into accepting peace deal.",
        'comments' => 547,
        'shares' => 30,
        'image' => 'https://via.placeholder.com/360x220?text=Main+1',
        'category' => 'News'
    ],
    [
        'title' => 'Austria will ban girls from wearing Islamic headscarves',
        'excerpt' => "Ban is set to apply across all schools and public places.",
        'comments' => 214,
        'shares' => 8,
        'image' => 'https://via.placeholder.com/360x220?text=Main+2',
        'category' => 'World'
    ],
    [
        'title' => 'UK considers military Putin spy shipping',
        'excerpt' => "Warships and planes will intercept any move.",
        'comments' => 632,
        'shares' => 29,
        'image' => 'https://via.placeholder.com/360x220?text=Main+3',
        'category' => 'U.S.'
    ],
    [
        'title' => 'EU leaders meet to discuss energy crisis',
        'excerpt' => "A plan is proposed to stabilize gas prices across member states.",
        'comments' => 120,
        'shares' => 12,
        'image' => 'https://via.placeholder.com/360x220?text=Main+4',
        'category' => 'World'
    ],
    [
        'title' => 'Tech stocks rally after earnings beat',
        'excerpt' => "Major technology companies reported stronger-than-expected results.",
        'comments' => 88,
        'shares' => 9,
        'image' => 'https://via.placeholder.com/360x220?text=Main+5',
        'category' => 'Business'
    ],
    [
        'title' => 'Climate summit: nations pledge new targets',
        'excerpt' => "Commitments aim to reduce emissions by 2035.",
        'comments' => 402,
        'shares' => 55,
        'image' => 'https://via.placeholder.com/360x220?text=Main+6',
        'category' => 'Science'
    ],
    [
        'title' => 'Breakthrough in renewable battery storage',
        'excerpt' => "A prototype promises longer life and faster charging.",
        'comments' => 77,
        'shares' => 11,
        'image' => 'https://via.placeholder.com/360x220?text=Main+7',
        'category' => 'Science'
    ],
];

$category_strip = [
    [
        'title' => "America's deadliest volcano enters unprecedented 72-hour tremor",
        'comments' => 567,
        'shares' => 1500,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+1',
        'category' => 'News'
    ],
    [
        'title' => 'Rapid earthquake swarm rocks California',
        'comments' => 65,
        'shares' => 65,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+2',
        'category' => 'U.S.'
    ],
    [
        'title' => 'NASA under fire as its interstellar visitor',
        'comments' => 105,
        'shares' => 18,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+3',
        'category' => 'Science'
    ],
    [
        'title' => 'New fashion week trends: what to wear',
        'comments' => 12,
        'shares' => 2,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+4',
        'category' => 'Showbiz'
    ],
    [
        'title' => 'Local team wins regional finals',
        'comments' => 45,
        'shares' => 6,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+5',
        'category' => 'Sports'
    ],
    [
        'title' => 'How to save money on holiday flights',
        'comments' => 8,
        'shares' => 1,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+6',
        'category' => 'Travel'
    ],
    [
        'title' => 'Guide to healthy winter recipes',
        'comments' => 6,
        'shares' => 0,
        'image' => 'https://via.placeholder.com/300x180?text=Cat+7',
        'category' => 'Lifestyle'
    ],
];

//uses shared header/footer
include __DIR__ . '/header.php';
?>

    <main class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Main column -->
            <div class="md:col-span-7">
                <!-- Hero Section -->
                <section class="mb-8">
                    <img src="assets/news_article_pics/news1coffeeimg1.png" alt="Hero" class="w-full rounded-lg shadow object-cover" style="height:320px;" />
                    <div class="mt-4">
                        <h1 class="text-2xl font-semibold"><a href="articles/article.php" class="text-blue-800 hover:underline">Best bean-to-cup coffee machine: The tried and tested automatics I recommend for a fuss-free brew, even if you're a complete beginner</a></h1>
                        <p class="text-gray-600 mt-2">If you're a coffee lover that values convenience, quality and time, these are the tested bean-to-cup picks that I recommend to everyone. From espresso...</p>
                    </div>
                </section>

                <!-- Main sections kept below the hero -->
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
/* Feed sizing variables and shared card/image helpers */
:root{
    --pf-card-width: 200px; /* slightly wider as requested */
    --pf-img-height: 140px; /* shortened image height as requested */
}
.pf-card{ flex: 0 0 var(--pf-card-width); width: var(--pf-card-width); box-sizing: border-box; border-radius:0.5rem; overflow:hidden; }
.pf-img{ width:100%; height:var(--pf-img-height); object-fit:cover; display:block; }

/* Slide + fade animation helpers for filter strips */
.anim-hidden {
    max-height: 0;
    opacity: 0;
    transform: translateY(-6px);
    transition: max-height .28s ease, opacity .28s ease, transform .28s ease;
    overflow: hidden;
}
.anim-open {
    max-height: 600px;
    opacity: 1;
    transform: translateY(0);
    transition: max-height .35s ease, opacity .35s ease, transform .35s ease;
}

/* Panels that expand to the right from the chevron and "cramp" back into it when closed.
   Implementation notes:
   - Closed state: scaleX(0) at the left edge (chevron) so the panel visually collapses into the chevron.
   - Open state: small rightward offset + scaleX(1) so the panel appears to slide to the right when opened.
   - transform-origin is set to left so scaling always collapses toward the chevron and never slides through the heading.
*/
.panel-slide {
    position: absolute;
    left: 100%;
    right: auto;
    top: 50%;
    transform-origin: left center;
    /* closed visual: collapsed toward the chevron */
    transform: translateY(-50%) translateX(0) scaleX(0);
    opacity: 0;
    transition: transform .26s cubic-bezier(.2,.9,.2,1), opacity .2s ease;
    z-index: 30;
    white-space: nowrap;
    pointer-events: none; /* avoid tabbing into hidden panel */
}
.panel-slide.open {
    /* open visual: slightly translated to the right and fully expanded */
    transform: translateY(-50%) translateX(10px) scaleX(1);
    opacity: 1;
    pointer-events: auto;
}

/* Hide native scrollbar arrows for the horizontal filter strips while keeping scrolling usable
   - Targets the main filter strip, category filter panel, and the category strip row. */
#mainFiltersStrip,
#catFiltersPanel,
#category-strip-row,
#personal-feed-row,
#main-feed-row {
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
}

/* WebKit browsers: remove scrollbar entirely (no arrows). */
#mainFiltersStrip::-webkit-scrollbar,
#catFiltersPanel::-webkit-scrollbar,
#category-strip-row::-webkit-scrollbar,
#personal-feed-row::-webkit-scrollbar,
#main-feed-row::-webkit-scrollbar {
    display: none; /* Safari/Chrome */
    width: 0;
    height: 0;
}

/* Also hide any scrollbar buttons specifically (extra safety for some engines) */
#mainFiltersStrip::-webkit-scrollbar-button,
#catFiltersPanel::-webkit-scrollbar-button,
#category-strip-row::-webkit-scrollbar-button,
#personal-feed-row::-webkit-scrollbar-button,
#main-feed-row::-webkit-scrollbar-button {
    display: none;
    width: 0;
    height: 0;
}
</style>
<script>
// Embed PHP arrays as JSON for client-side filtering
const MAIN_FEED = <?php echo json_encode($main_feed, JSON_HEX_TAG); ?>;
const CAT_STRIP = <?php echo json_encode($category_strip, JSON_HEX_TAG); ?>;

const MAIN_FILTERS = ['All','Latest headlines','Australia','Scotland','Books','Columnists'];
const CAT_FILTERS = ['All','Sports','Showbiz','Lifestyle','Health','Science','Money','Travel'];

function renderMainFeed(filter) {
    const container = document.getElementById('main-feed-grid');
    // render into the horizontal row
    const row = document.getElementById('main-feed-row');
    row.innerHTML = '';
    const items = MAIN_FEED.filter(i => !filter || filter === 'All' ? true : i.category === filter).slice(0,7);
    if (items.length === 0) {
        row.innerHTML = '<div class="text-center text-gray-500">No items for this filter.</div>';
        return;
    }
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
    if (items.length === 0) {
        row.innerHTML = '<div class="text-gray-500">No items for this filter.</div>';
        return;
    }
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

function escapeHtml(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

function renderMainFilters() {
    const container = document.getElementById('mainFiltersStrip');
    if(!container) return;
    MAIN_FILTERS.forEach(f => {
        const btn = document.createElement('button');
        btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap';
        btn.textContent = f;
        btn.dataset.filter = f;
        btn.addEventListener('click', () => {
            document.querySelectorAll('#mainFiltersStrip button').forEach(b => {
                b.classList.remove('bg-blue-600','text-white');
                b.classList.add('bg-white','text-gray-800');
            });
            btn.classList.remove('bg-white','text-gray-800');
            btn.classList.add('bg-blue-600','text-white');
            renderMainFeed(f);
        });
        container.appendChild(btn);
    });
    const first = container.querySelector('button[data-filter="All"]');
    if (first) first.click();
}

function renderCatFilters() {
    const panel = document.getElementById('catFiltersPanel');
    if(!panel) return;
    CAT_FILTERS.forEach(f => {
        const btn = document.createElement('button');
        btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap';
        btn.textContent = f;
        btn.dataset.filter = f;
        btn.addEventListener('click', () => {
            document.querySelectorAll('#catFiltersPanel button').forEach(b => {
                b.classList.remove('bg-blue-600','text-white');
                b.classList.add('bg-white','text-gray-800');
            });
            btn.classList.remove('bg-white','text-gray-800');
            btn.classList.add('bg-blue-600','text-white');
            renderCategoryStrip(f);
        });
        panel.appendChild(btn);
    });
    const first = panel.querySelector('button[data-filter="All"]');
    if (first) first.click();
}

document.addEventListener('DOMContentLoaded', function(){
    renderMainFilters();
    renderCatFilters();
    // toggles
    const mainToggle = document.getElementById('mainFiltersToggle');
    const mainStrip = document.getElementById('mainFiltersStrip');
    const mainIcon = document.getElementById('mainToggleIcon');
    if (mainToggle && mainStrip) {
        mainToggle.addEventListener('click', () => {
            // toggle horizontal slide panel
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

    // expose scroll controls for carousels
    window.scrollFeed = function(id, dir) {
        const el = document.getElementById(id);
        if (!el) return;
        const amount = Math.round(el.clientWidth * 0.7) || 300;
        el.scrollBy({ left: dir === 'left' ? -amount : amount, behavior: 'smooth' });
    };
});
</script>
