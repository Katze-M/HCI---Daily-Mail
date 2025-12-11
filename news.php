<?php
// News landing page (copied from index.php and adapted for news feed)
$personal_feed = [
    [
        'title' => "Revealed: Which World Cup games the BBC and ITV will show next summer as broadcasters CONFIRM match split",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-18.avif',
        'category' => 'Sports',
        'link' => 'articles/News/News_catfeed-article1.php'
    ],
    [
        'title' => "The item that sells every minute globally transforms under-eye bags in SECONDS: 'You look 10 years younger'",
        'excerpt' => "An Australian beauty product that mimics the appearance of having had under-eye surgery has become a global bestseller, with one bottle purchased every minute.",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-1.avif',
        'category' => 'Australia',
        'link' => 'articles/News/News_mainfeed-article1.php'
    ],
    [
        'title' => "QUENTIN LETTS: Brother Torsten shimmered, beamed and lovingly stroked his girlishly smooth throat...",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-15.avif',
        'category' => 'Debate',
        'link' => 'articles/News/News_mainfeed-article4.php'
    ],
    [
        'title' => "Michelle Obama blasts 'aging' leaders who 'hold on for too long' in veiled swipe at Joe Biden",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-24.avif',
        'category' => 'Lifestyle',
        'link' => 'articles/News/News_catfeed-article3.php'
    ],
        [
        'title' => "London s 25 best martinis revealed: After five years of research (and hundreds of drinks!), HUGHIE DE ZULUETA and ELLA MAY share their must-read guide",
        'comments' => 112,
        'shares' => 18,
        'image' => 'assets/Buyline_assets/Travel_SPic-5.avif',
        'category' => 'Travel',
        'link' => 'articles/buyline/Travel_article-1.php'
    ],
    [
        'title' => "The best suitcase deals on travel-editor approved brands - including Amazon and John Lewis offers of up to 40% off",
        'comments' => 56,
        'shares' => 6,
        'image' => 'assets/Buyline_assets/Travel_SPic-6.avif',
        'category' => 'Travel',
        'link' => 'articles/buyline/Travel_article-2.php'
    ],
];

$main_feed = [
    [
        'title' => "The item that sells every minute globally transforms under-eye bags in SECONDS: 'You look 10 years younger'",
        'excerpt' => "An Australian beauty product that mimics the appearance of having had under-eye surgery has become a global bestseller, with one bottle purchased every minute.",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-1.avif',
        'category' => 'Australia',
        'link' => 'articles/News/News_mainfeed-article1.php'
    ],

    [
        'title' => "Art swindler shares jaw-dropping explanation of how his wife 'died' and why he chopped up her body",
        'excerpt' => "In opening statements in Norfolk County Superior Court in Dedham on Monday morning, defense attorney Larry Tipton laid out Brian Walshe's version of events - claiming that there was no murder after all.",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-5.avif',
        'category' => 'The Crime Desk',
        'link' => 'articles/News/News_mainfeed-article2.php'
    ],


    [
        'title' => "Husband is charged with murdering Miss Switzerland finalist mother-of-two who was 'strangled, pureed in a blender and had womb cut out'",
        'excerpt' => "A husband has been charged with brutally murdering his Miss Switzerland finalist wife after he allegedly strangled and pureed her in a blender. The 41-year-old, who was named in local media by the pseudonym of Thomas due to Swiss privacy laws, is accused of decapitating Kristina Joksimovic and cutting out her womb.  Her ravaged body was found in their home in Binningen, near Basel, on February 13, 2024. According to a neighbor, the couple's two young children also lived in the house.",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-9.avif',
        'category' => 'World News',
        'link' => 'articles/News/News_mainfeed-article3.php'
    ],

    [
        'title' => "QUENTIN LETTS: Brother Torsten shimmered, beamed and lovingly stroked his girlishly smooth throat...",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-15.avif',
        'category' => 'Debate',
        'link' => 'articles/News/News_mainfeed-article4.php'
    ],

];

$category_strip = [
    [
        'title' => "Revealed: Which World Cup games the BBC and ITV will show next summer as broadcasters CONFIRM match split",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-18.avif',
        'category' => 'Sports',
        'link' => 'articles/News/News_catfeed-article1.php'
    ],
    [
        'title' => "King Of The Jungle AngryGinge wears his I'm A Celeb winner's crown as he jets back to Manchester with co-star Lisa Riley on a first class flight",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-21.avif',
        'category' => 'Showbiz',
        'link' => 'articles/News/News_catfeed-article2.php'
    ],
    [
        'title' => "Michelle Obama blasts 'aging' leaders who 'hold on for too long' in veiled swipe at Joe Biden",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-24.avif',
        'category' => 'Lifestyle',
        'link' => 'articles/News/News_catfeed-article3.php'
    ],
    [
        'title' => "The item that sells every minute globally transforms under-eye bags in SECONDS: 'You look 10 years younger'",
        'excerpt' => "An Australian beauty product that mimics the appearance of having had under-eye surgery has become a global bestseller, with one bottle purchased every minute.",
        'comments' => 214,
        'shares' => 12,
        'image' => 'assets/news_article_pics/News-1.avif',
        'category' => 'Health',
        'link' => 'articles/News/News_mainfeed-article1.php'
    ],
    [
        'title' => 'We still owe £300,000, can an offset mortgage save us money?',
        'excerpt' => 'Reader asks whether switching to an offset mortgage would reduce payments on a £300,000 balance.',
        'comments' => 19,
        'shares' => 2,
        'image' => 'assets/US_assets/article6-img1.png',
        'category' => 'Money',
        'link' => 'articles/US/US-article6.php'
    ],
    [
        'title' => "Maven, we have a problem: NASA has lost contact with a spacecraft that has been orbiting Mars for more than a DECADE",
        'excerpt' => "NASA has lost contact with the MAVEN orbiter — a setback that could halt a decade of Martian atmospheric research.",
        'comments' => 35,
        'shares' => 35,
        'image' => 'assets/HomePage_assets/Homepage_article5-image1.png',
        'category' => 'Science',
        'link' => 'articles/HomePage/Home_mainfeed-article5.php'
    ],
    [
        'title' => "London s 25 best martinis revealed: After five years of research (and hundreds of drinks!), HUGHIE DE ZULUETA and ELLA MAY share their must-read guide",
        'comments' => 112,
        'shares' => 18,
        'image' => 'assets/Buyline_assets/Travel_SPic-5.avif',
        'category' => 'Travel',
        'link' => 'articles/buyline/Travel_article-1.php'
    ],
    [
        'title' => "The best suitcase deals on travel-editor approved brands - including Amazon and John Lewis offers of up to 40% off",
        'comments' => 56,
        'shares' => 6,
        'image' => 'assets/Buyline_assets/Travel_SPic-6.avif',
        'category' => 'Travel',
        'link' => 'articles/buyline/Travel_article-2.php'
    ],



];

// uses shared header/footer
include __DIR__ . '/header.php';
?>

    <main class="max-w-6xl mx-auto px-4 py-8 news-theme">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Main column -->
            <div class="md:col-span-7">
                <!-- Hero Section -->
                <section class="mb-8">
                    <img src="assets/news_article_pics/news_latestimg1.png" alt="Hero" class="w-full rounded-lg shadow object-cover" style="height:320px;" />
                    <div class="mt-4">
                        <h1 class="text-2xl font-semibold"><a href="articles/news_latest_article.php" class="text-blue-800 hover:underline">US tells Europe it must take over 'the majority' of NATO's defence capabilities by 2027 as Trump shifts American military focus while Putin's war in Ukraine rages...</a></h1>
                        <p class="text-gray-600 mt-2">The message, recounted by five sources familiar with the discussion, including a US official, was conveyed at a meeting in Washington this week of...</p>
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
                                        <?php $href = isset($item['link']) ? $item['link'] : 'articles/article.php'; ?>
                                        <article class="pf-card border p-3 bg-gray-50">
                                            <a href="<?php echo $href; ?>" class="block h-full">
                                                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="pf-img rounded" />
                                                <h3 class="mt-2 font-bold text-sm"><?php echo $item['title']; ?></h3>
                                                <p class="text-xs text-gray-600 mt-1"><?php echo isset($item['excerpt']) ? $item['excerpt'] : strip_tags($item['title']); ?></p>
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
                            <?php $sHref = isset($item['link']) ? $item['link'] : 'articles/article.php'; ?>
                            <div class="flex gap-3 py-3 border-b last:border-b-0">
                                <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-20 h-14 object-cover rounded" />
                                <div>
                                    <div class="text-xs text-red-600 font-semibold">EXCLUSIVE</div>
                                    <a href="<?php echo $sHref; ?>" class="text-sm font-semibold text-blue-700 hover:underline"><?php echo $item['title']; ?></a>
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
/* brand color: cyan (page-scoped to avoid header overrides) */
.news-theme { --brand: #00AAD2; }
/* Override a few Tailwind-ish classes only inside this page wrapper */
.news-theme .bg-blue-700 { background-color: var(--brand) !important; }
.news-theme .bg-blue-600 { background-color: var(--brand) !important; }
.news-theme .text-blue-700 { color: var(--brand) !important; }
.news-theme .text-blue-800 { color: var(--brand) !important; }
.news-theme .bg-blue-50 { background-color: rgba(0,170,210,0.06) !important; }

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

const MAIN_FILTERS = ['All','Latest headlines','Australia','Deep Dive','The Crime Desk','World News', 'Debate'];
const CAT_FILTERS = ['All','Sports','Showbiz','Lifestyle','Health','Science','Money','Travel'];

function renderMainFeed(filter) {
    const row = document.getElementById('main-feed-row');
    row.innerHTML = '';
    const items = MAIN_FEED.filter(i => !filter || filter === 'All' ? true : i.category === filter);
    if (items.length === 0) { row.innerHTML = '<div class="text-center text-gray-500">No items for this filter.</div>'; return; }
    items.forEach(post => {
        const art = document.createElement('article');
        art.className = 'pf-card bg-gray-50 rounded overflow-hidden shadow-sm';
        const href = post.link ? post.link : 'articles/article.php';
        art.innerHTML = `
            <a href="${href}" class="block h-full">
                <img src="${post.image}" alt="${escapeHtml(post.title)}" class="pf-img" />
                <div class="p-3">
                    <h3 class="mt-2 font-bold text-sm">${escapeHtml(post.title)}</h3>
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
        const href = cat.link ? cat.link : 'articles/article.php';
        card.innerHTML = `
            <a href="${href}" class="block h-full">
                <img src="${cat.image}" alt="${escapeHtml(cat.title)}" class="pf-img rounded" />
                <h4 class="mt-2 font-bold text-sm">${escapeHtml(cat.title)}</h4>
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
