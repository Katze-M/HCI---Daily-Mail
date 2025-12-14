<?php
include __DIR__ . '/header.php';

$personal_feed = [

    [
        'title' => "Antiques Roadshow expert captivated by 'stunning' kitchen tool",
        'image' => 'assets/tv_assets/article8-img1.png',
        'link' => 'articles/TV/tv_article8.php',
        'category' => 'personal',
        'comments' => 13,
        'shares' => 2,
        'tags' => ['antiques','kitchen','personal']
    ],
    [
        'title' => "David Walliams: once the nation's favourite — now fighting to return",
        'image' => 'assets/tv_assets/article9-img1.png',
        'link' => 'articles/TV/tv_article9.php',
        'category' => 'personal',
        'comments' => 615,
        'shares' => 48,
        'tags' => ['showbiz','celebrity','tv']
    ],
    ['title'=>'Inside Netflix\'s buzzy new drama: what to expect','excerpt'=>'A first look at the new Netflix series everyone is talking about.','comments'=>15,'shares'=>10,'image'=>'assets/tv_assets/article4-img1.png','link'=>'articles/TV/tv_article4.php'],
    ['title'=>'Shona McGarty shares heartbreaking confession about her mental health before I\'m A Celebrity','excerpt'=>'Shona McGarty reveals how doomscrolling affected her relationships and why the jungle helped her detox.','comments'=>15,'shares'=>3,'image'=>'assets/tv_assets/article5-img1.png','link'=>'articles/TV/tv_article5.php'],
    ['title'=>'Binky Felstead reveals what she eats in a day and how she trains to maintain her strong gym-honed figure while juggling parenting three children','excerpt'=>'Binky Felstead explains her workouts and meals while juggling three children — plus allergy management updates.','comments'=>105,'shares'=>20,'image'=>'assets/tv_assets/article6-img1.png','link'=>'articles/TV/tv_article6.php']
];

$main_feed = [
    ['title'=>'Neighbours finale episode set to hit screens today - after the soap was AXED for the second time less than two years after its revival','excerpt'=>'Neighbours will air its final episode on Thursday after being axed for a second time, this time by Amazon, less than two years after the iconic soap\'s revival.','comments'=>15,'shares'=>4,'image'=>'assets/tv_assets/article7-img1.png','category'=>'Soaps','tags'=>['movies','showbiz','soaps'],'link'=>'articles/TV/tv_article7.php'],
    ['title'=>'Inside Netflix\'s buzzy new drama: what to expect from the gripping first season','excerpt'=>'Our guide to the cast, what happens and why everyone is talking about it.','comments'=>15,'shares'=>10,'image'=>'assets/tv_assets/article4-img1.png','category'=>'Netflix','link'=>'articles/TV/tv_article4.php'],
    ['title'=>"Stranger Things fans spot worrying clue beloved character will be killed off in new Netflix pics - as they fret 'the signs have always been there!'",'excerpt'=>'Fans noticed a missing character photo in the latest Netflix promo and suspect a main character may die.','comments'=>15,'shares'=>4,'image'=>'assets/news_article_pics/tv_latestimg1.png','category'=>'Film, Best Shows','link'=>'articles/tv_latest_article.php'],
    ['title'=>"Cat Deeley just wore this fashionably festive jumper on This Morning - here's where you can buy it and three other Christmassy sweaters still available on the high street",'excerpt'=>'Cat Deeley showed a festive jumper on This Morning — here are four similar Christmassy sweaters you can buy now.','comments'=>7,'shares'=>2,'image'=>'assets/Buyline_assets/PerFeed_Artc_1 pic.avif','category'=>'Daytime TV','link'=>'articles/Buyline/Fashionfeed_article-1.php'],
    ['title'=>"Shona McGarty shares heartbreaking confession about her mental health before I'm A Celebrity",'excerpt'=>'Shona McGarty made a heartbreaking confession about doomscrolling and how the jungle helped her detox.','comments'=>15,'shares'=>3,'image'=>'assets/tv_assets/article5-img1.png','category'=>"I'm a Celebrity",'link'=>'articles/TV/tv_article5.php'],
    ['title'=>"Simon Cowell: The Next Act savaged as 'dated, derivative and as flat as his hairdo'","excerpt"=>"Critics accuse the music mogul of 'rehashing The X Factor for the billionth time' with a new Netflix documentary.",'comments'=>64,'shares'=>8,'image'=>'assets/tv_assets/article2-img1.png','category'=>'Showbiz','link'=>'articles/TV/tv_article2.php'],
    ['title'=>"We've found Keira Knightley's exact outfits from the Waitrose Christmas advert at John Lewis - and they make for the perfect winter wardrobe","excerpt"=>"Everything you need to recreate Keira Knightley's cosy-chic looks from the Waitrose Christmas advert.",'comments'=>5,'shares'=>1,'image'=>'assets/tv_assets/article3-img1.png','category'=>"I'm a Celebrity","tags"=>['fashion','john lewis','keira knightley'],'link'=>'articles/TV/tv_article3.php'],
];

$category_strip = [
    // Consolidated single tile for tv_article7 that should match multiple filters via tags
    ['title'=>'Neighbours finale episode set to hit screens today - after the soap was AXED for the second time less than two years after its revival','excerpt'=>'Neighbours will air its final episode on Thursday after being axed for a second time, this time by Amazon, less than two years after the iconic soap\'s revival.','comments'=>15,'shares'=>4,'image'=>'assets/tv_assets/article7-img1.png','category'=>'Showbiz','tags'=>['movies','showbiz','soaps'],'link'=>'articles/TV/tv_article7.php'],
    ['title'=>"David Walliams: once the nation's favourite — now fighting to return","excerpt"=>"David Walliams has faced a turbulent few years since leaving BGT and is now focused on books and podcasts.",'comments'=>615,'shares'=>48,'image'=>'assets/tv_assets/article9-img1.png','category'=>'Showbiz','tags'=>['showbiz','tv','celebrity'],'link'=>'articles/TV/tv_article9.php'],
    ['title'=>"Stranger Things fans spot worrying clue beloved character will be killed off in new Netflix pics - as they fret 'the signs have always been there!'",'excerpt'=>'Fans noticed a missing character photo in the latest Netflix promo and suspect a main character may die.','comments'=>3,'shares'=>0,'image'=>'/assets/news_article_pics/tv_latestimg1.png','category'=>'Netflix','link'=>'articles/tv_latest_article.php'],
    ['title'=>'Inside Netflix\'s buzzy new drama: what to expect from the gripping first season','excerpt'=>'First look at the cast, the tone and why the show is on everyone\'s watchlist.','comments'=>15,'shares'=>10,'image'=>'assets/tv_assets/article4-img1.png','category'=>'Netflix','link'=>'articles/TV/tv_article4.php'],
    ['title'=>"We've found Keira Knightley's exact outfits from the Waitrose Christmas advert at John Lewis - and they make for the perfect winter wardrobe","excerpt"=>"Recreate the festive looks from the Waitrose ad with pieces from John Lewis.",'comments'=>5,'shares'=>1,'image'=>'assets/tv_assets/article3-img2.png','category'=>'Fashion','link'=>'articles/TV/tv_article3.php'],
    ['title'=>"Cat Deeley just wore this fashionably festive jumper on This Morning - here's where you can buy it and three other Christmassy sweaters still available on the high street","excerpt"=>"Cat Deeley showed a festive jumper on This Morning — here are four similar Christmassy sweaters you can buy now.",'comments'=>7,'shares'=>2,'image'=>'assets/Buyline_assets/PerFeed_Artc_1 pic.avif','category'=>'Fashion','link'=>'articles/Buyline/Fashionfeed_article-1.php'],
    ['title'=>"Binky Felstead reveals what she eats in a day and how she trains to maintain her strong gym-honed figure while juggling parenting three children","excerpt"=>"Binky Felstead explains her workouts and meals while juggling three children — practical tips and allergy-management updates.",'comments'=>105,'shares'=>20,'image'=>'assets/tv_assets/article6-img1.png','category'=>'Lifestyle','link'=>'articles/TV/tv_article6.php']
];
?>

    <main class="max-w-6xl mx-auto px-4 py-8 tv-theme">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Main column -->
            <div class="md:col-span-7">
                <!-- Hero Section -->
                <section class="mb-8">
                    <img src="/assets/news_article_pics/tv_latestimg1.png" alt="TV Hero" class="w-full rounded-lg shadow object-cover" style="height:320px;" />
                    <div class="mt-4">
                        <h1 class="text-2xl font-semibold"><a href="articles/tv_latest_article.php" class="text-blue-800 hover:underline">Stranger Things fans spot worrying clue beloved character will be killed off in new Netflix pics - as they fret 'the signs have always been there!'</a></h1>
                        <p class="text-gray-600 mt-2">Viewers were left up in arms earlier this week after noticing a missing character photo from the most recent promo for episodes that will drop on Netflix on Christmas Day and New Year's Day.</p>
                    </div>
                </section>

                <!-- PERSONAL FEED -->
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

                <section class="mb-8">
                    <div class="flex items-center">
                        <div class="inline-flex items-center relative">
                            <div class="bg-blue-700 text-white px-4 py-2 rounded-t-lg inline-block">MAIN FEED</div>
                            <button id="mainFiltersToggle" aria-expanded="false" aria-controls="mainFiltersStrip" class="ml-2 h-9 w-9 flex items-center justify-center text-sm rounded bg-white border">
                                <svg id="mainToggleIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transform rotate-0 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 4a1 1 0 011.707-.707l6 6a1 1 0 010 1.414l-6 6A1 1 0 016 16.586L11.586 11 6 5.414A1 1 0 016 4z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="mainFiltersStrip" class="panel-slide bg-white border rounded h-9 flex items-center gap-2 px-2 overflow-x-auto">
                                <!-- Main feed filter buttons -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-b-lg shadow">
                        <div class="relative">
                            <button aria-label="Scroll main left" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow" onclick="scrollFeed('main-feed-row','left')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 15.707a1 1 0 01-1.414 0L5.172 10l5.707-5.707a1 1 0 011.414 1.414L8.414 10l3.879 3.879a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </button>
                            <div id="main-feed-row" class="flex gap-6 overflow-x-auto py-2 px-8">
                                <?php foreach($main_feed as $item): ?>
                                    <?php $mHref = isset($item['link']) ? $item['link'] : 'articles/article.php'; ?>
                                    <article class="pf-card bg-gray-50 rounded overflow-hidden shadow-sm p-3 min-w-[14rem]">
                                        <a href="<?php echo $mHref; ?>" class="block h-full">
                                            <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="pf-img rounded" />
                                            <h3 class="mt-2 font-bold text-sm"><?php echo $item['title']; ?></h3>
                                            <p class="text-xs text-gray-600 mt-1"><?php echo isset($item['excerpt']) ? $item['excerpt'] : strip_tags($item['title']); ?></p>
                                            <div class="mt-2 text-xs text-gray-500"><?php echo $item['comments']; ?> comments • <?php echo $item['shares']; ?> share</div>
                                        </a>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                            <button aria-label="Scroll main right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow flex items-center justify-center" onclick="scrollFeed('main-feed-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- CATEGORY STRIP -->
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
                                <?php foreach($category_strip as $item): ?>
                                    <?php $cHref = isset($item['link']) ? $item['link'] : 'articles/article.php'; ?>
                                    <article class="pf-card bg-gray-50 rounded overflow-hidden shadow-sm">
                                        <a href="<?php echo $cHref; ?>" class="block h-full">
                                            <img src="<?php echo $item['image']; ?>" class="pf-img" />
                                            <div class="p-3">
                                                <h3 class="font-semibold text-sm"><?php echo $item['title']; ?></h3>
                                                <?php if (isset($item['excerpt'])): ?>
                                                    <p class="text-xs text-gray-600 mt-2"><?php echo $item['excerpt']; ?></p>
                                                <?php endif; ?>
                                                <div class="mt-2 text-xs text-gray-500"><?php echo isset($item['comments']) ? $item['comments'] : 0; ?> comments • <?php echo isset($item['shares']) ? $item['shares'] : 0; ?> shares</div>
                                            </div>
                                        </a>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                            <button aria-label="Scroll category right" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 bg-white rounded-full p-2 shadow flex items-center justify-center" onclick="scrollFeed('category-strip-row','right')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700 block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar: Don't Miss Section -->
            <aside class="md:col-span-3">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-blue-600 text-white px-4 py-2 font-semibold">Don't Miss</div>
                    <div class="p-3">
                        <?php foreach(array_slice($main_feed,0,9) as $item): ?>
                            <div class="flex gap-3 py-3 border-b last:border-b-0">
                                <img src="<?php echo $item['image']; ?>" class="w-20 h-14 object-cover rounded" />
                                <div>
                                    <div class="text-xs text-red-600 font-semibold">EXCLUSIVE</div>
                                    <a href="<?php echo isset($item['link']) ? $item['link'] : 'articles/article.php'; ?>" class="text-sm font-semibold text-blue-700 hover:underline"><?php echo $item['title']; ?></a>
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
    /* brand color: page-scoped for TV */
    .tv-theme { --brand: #C562A5; }
    /* Override a few Tailwind-ish classes only inside `.tv-theme` */
    .tv-theme .bg-blue-700 { background-color: var(--brand) !important; }
    .tv-theme .bg-blue-600 { background-color: var(--brand) !important; }
    .tv-theme .text-blue-700 { color: var(--brand) !important; }
    .tv-theme .text-blue-800 { color: var(--brand) !important; }
    .tv-theme .bg-blue-50 { background-color: rgba(197,98,165,0.06) !important; }
    </style>
    <style>
    /* Panels that expand from the chevron (same behaviour as homepage) */
    .panel-slide {
        position: absolute;
        left: 100%;
        right: auto;
        top: 50%;
        transform-origin: left center;
        transform: translateY(-50%) translateX(0) scaleX(0);
        opacity: 0;
        transition: transform .26s cubic-bezier(.2,.9,.2,1), opacity .2s ease;
        z-index: 30;
        white-space: nowrap;
        pointer-events: none;
    }
    .panel-slide.open {
        transform: translateY(-50%) translateX(10px) scaleX(1);
        opacity: 1;
        pointer-events: auto;
    }
    </style>
    <style>
    /* Hide native scrollbar for filter panels while keeping them scrollable */
    #mainFiltersStrip, #catFiltersPanel {
        -ms-overflow-style: none; /* IE and Edge */
        scrollbar-width: none; /* Firefox */
    }
    #mainFiltersStrip::-webkit-scrollbar, #catFiltersPanel::-webkit-scrollbar {
        display: none;
        width: 0;
        height: 0;
    }
    </style>

    <script>
    // Embed PHP arrays as JSON for client-side filtering on TV page
    const MAIN_FEED = <?php echo json_encode($main_feed, JSON_HEX_TAG); ?>;
    const CAT_STRIP = <?php echo json_encode($category_strip, JSON_HEX_TAG); ?>;

    // TV-specific filters per request
    const MAIN_FILTERS = ['All','Daytime TV','Reality','Film','Soaps','Best Shows','I\'m a Celebrity'];
    const CAT_FILTERS = ['All','Netflix','Showbiz','Lifestyle','Fashion','Movies'];

    // Helper: return true when an item should match the given filter.
    // Matching rules:
    // - 'All' matches everything
    // - case-insensitive substring match against `item.category`
    // - match any entry in `item.tags` (if present) by exact or substring
    function filterMatches(item, filter) {
        if (!filter || filter === 'All') return true;
        const f = String(filter).toLowerCase();
        if (item.category && String(item.category).toLowerCase().includes(f)) return true;
        if (item.tags && Array.isArray(item.tags)) {
            for (const t of item.tags) {
                if (String(t).toLowerCase().includes(f)) return true;
            }
        }
        return false;
    }

    function renderMainFeed(filter) {
        const row = document.getElementById('main-feed-row');
        if (!row) return;
        row.innerHTML = '';
        const items = MAIN_FEED.filter(i => filterMatches(i, filter));
        if (items.length === 0) { row.innerHTML = '<div class="text-center text-gray-500">No items for this filter.</div>'; return; }
        items.forEach(post => {
            const art = document.createElement('article');
            art.className = 'pf-card bg-gray-50 rounded overflow-hidden shadow-sm p-3 min-w-[14rem]';
            const href = post.link ? post.link : 'articles/article.php';
            art.innerHTML = `
                <a href="${href}" class="block h-full">
                    <img src="${post.image}" alt="${escapeHtml(post.title)}" class="pf-img rounded" />
                    <h3 class="mt-2 font-bold text-sm">${escapeHtml(post.title)}</h3>
                    <p class="text-xs text-gray-600 mt-1">${escapeHtml(post.excerpt || post.title || '')}</p>
                    <div class="mt-2 text-xs text-gray-500">${post.comments || 0} comments • ${post.shares || 0} share</div>
                </a>`;
            row.appendChild(art);
        });
    }

    function renderCategoryStrip(filter) {
        const row = document.getElementById('category-strip-row');
        if (!row) return;
        row.innerHTML = '';
        const items = CAT_STRIP.filter(i => filterMatches(i, filter));
        if (items.length === 0) { row.innerHTML = '<div class="text-gray-500">No items for this filter.</div>'; return; }
        items.forEach(cat => {
            const cHref = cat.link ? cat.link : 'articles/article.php';
            const card = document.createElement('article');
            card.className = 'pf-card bg-gray-50 rounded overflow-hidden shadow-sm';
            card.innerHTML = `
                <a href="${cHref}" class="block h-full">
                    <img src="${cat.image}" alt="${escapeHtml(cat.title)}" class="pf-img" />
                    <div class="p-3">
                        <h3 class="mt-2 font-bold text-sm">${escapeHtml(cat.title)}</h3>
                        <p class="text-xs text-gray-600 mt-2">${escapeHtml(cat.excerpt || cat.title || '')}</p>
                        <div class="mt-2 text-xs text-gray-500">${cat.comments || 0} comments • ${cat.shares || 0} shares</div>
                    </div>
                </a>`;
            row.appendChild(card);
        });
    }

    function escapeHtml(str) { return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;'); }

    function renderMainFilters() {
        const container = document.getElementById('mainFiltersStrip'); if(!container) return;
        container.innerHTML = '';
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
        panel.innerHTML = '';
        CAT_FILTERS.forEach(f => {
            const btn = document.createElement('button'); btn.className = 'text-sm px-3 h-9 flex items-center rounded bg-white text-gray-800 whitespace-nowrap'; btn.textContent = f; btn.dataset.filter = f;
            btn.addEventListener('click', () => { document.querySelectorAll('#catFiltersPanel button').forEach(b => { b.classList.remove('bg-blue-600','text-white'); b.classList.add('bg-white','text-gray-800'); }); btn.classList.remove('bg-white','text-gray-800'); btn.classList.add('bg-blue-600','text-white'); renderCategoryStrip(f); });
            panel.appendChild(btn);
        });
        const first = panel.querySelector('button[data-filter="All"]'); if (first) first.click();
    }

    document.addEventListener('DOMContentLoaded', function(){
        renderMainFilters(); renderCatFilters();
        const mainToggle = document.getElementById('mainFiltersToggle'); const mainStrip = document.getElementById('mainFiltersStrip'); const mainIcon = document.getElementById('mainToggleIcon'); if (mainToggle && mainStrip) { mainToggle.addEventListener('click', () => { const isOpen = mainStrip.classList.toggle('open'); mainToggle.setAttribute('aria-expanded', String(isOpen)); if (mainIcon) mainIcon.classList.toggle('rotate-180', isOpen); }); }
        const catToggle = document.getElementById('catFiltersToggle'); const catPanel = document.getElementById('catFiltersPanel'); const catIcon = document.getElementById('catToggleIcon'); if (catToggle && catPanel) { catToggle.addEventListener('click', () => { const isOpen = catPanel.classList.toggle('open'); catToggle.setAttribute('aria-expanded', String(isOpen)); if (catIcon) catIcon.classList.toggle('rotate-180', isOpen); }); }
        window.scrollFeed = function(id, dir) { const el = document.getElementById(id); if (!el) return; const amount = Math.round(el.clientWidth * 0.7) || 300; el.scrollBy({ left: dir === 'left' ? -amount : amount, behavior: 'smooth' }); };
    });
    </script>
