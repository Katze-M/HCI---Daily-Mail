<?php
// Shared header include: contains <head> and the site header/nav
$current = basename($_SERVER['SCRIPT_NAME']);
// Page brand hex mapping (used for filter hover backgrounds etc.)
$brandMap = [
    'buyline.php' => '#ea580c',
    'royals.php'  => '#540C75',
    'news.php'    => '#00AAD2',
    'tv.php'      => '#C562A5',
    'us.php'      => '#08306b',
    'mplus.php'   => '#2563eb',
    'podcasts.php'=> '#0C2D78',
    'index.php'   => '#2563eb'
];
$brandHex = isset($brandMap[$current]) ? $brandMap[$current] : '#2563eb';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dailymail.co.uk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Serif font for bylines: prefer local 'Instrument Serif' then Playfair Display fallback -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* If you add a local font file at assets/fonts/InstrumentSerif.woff2 it will be used. Otherwise Playfair Display will be used. */
        @font-face {
            font-family: 'Instrument Serif';
            src: url('/assets/fonts/InstrumentSerif.woff2') format('woff2');
            font-weight: 400 700;
            font-style: normal;
            font-display: swap;
        }

        .byline {
            font-family: 'Instrument Serif', 'Playfair Display', Georgia, serif;
        }
        /* Global back button for article pages: fixed to the viewport so it
           does not reserve layout space (won't push the article). A small
           script positions it just below the header on load/resize so it
           appears visually under the header and then stays fixed while
           scrolling (sticky-like behavior without affecting layout). */
        header { position: relative; }
        .global-back-btn {
            position: fixed; /* fixed to viewport so it doesn't affect document flow */
            left: 16px;
            top: 72px; 
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #ffffff;
            border-radius: 9999px;
            box-shadow: 0 6px 12px rgba(15,23,42,0.08);
            color: #374151; 
            border: none;
            cursor: pointer;
            z-index: 70;
        }
        @media (max-width: 640px) {
            .global-back-btn { left: 12px; top: 64px; width: 36px; height: 36px; }
        }
            /* Shared feed sizing variables and card helpers so all pages (including
               article pages) render feed items consistently. */
            :root{
                --pf-card-width: 200px;
                --pf-img-height: 140px;
                --brand-hex: <?php echo $brandHex; ?>;
            }
            .pf-card{ flex: 0 0 var(--pf-card-width); width: var(--pf-card-width); box-sizing: border-box; border-radius:0.5rem; overflow:hidden; transition: transform .22s cubic-bezier(.2,.9,.2,1), box-shadow .22s cubic-bezier(.2,.9,.2,1); will-change: transform, box-shadow; }
            .pf-card:hover{ transform: translateY(-6px) scale(1.02); box-shadow: 0 18px 40px rgba(2,6,23,0.12); }
            .pf-img{ width:100%; height:var(--pf-img-height); object-fit:cover; display:block; }

            /* Make whole card clickable when wrapped by anchor */
            .pf-card > a { display: block; color: inherit; text-decoration: none; }

            /* Filter button hover uses the current page brand color */
            #mainFiltersStrip button:hover, #catFiltersPanel button:hover, .panel-slide button:hover { background-color: var(--brand-hex) !important; color: #fff !important; }
            /* Slight raise on filter hover */
            #mainFiltersStrip button, #catFiltersPanel button { transition: background-color .18s ease, transform .12s ease, box-shadow .12s ease; position: relative; z-index: 1; }
            /* Allow hover lift to be visible outside the rounded container without breaking horizontal scroll */
            #mainFiltersStrip, #catFiltersPanel, .panel-slide { overflow-x: auto; overflow-y: visible; }
            #mainFiltersStrip button:hover, #catFiltersPanel button:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(2,6,23,0.06); z-index: 30; }
            

            /* Header hover transitions */
            header a, header button { transition: transform .12s ease, box-shadow .18s ease, background-color .18s ease; }
            header a:hover, header button:hover { transform: translateY(-2px); }

            /* Nav smooth color changes (works with inline active styles) */
            nav a { transition: background-color .28s ease, color .28s ease; border-radius: 0.25rem; }

            /* Social buttons scale */
            .social-btn { transition: transform .12s ease, box-shadow .12s ease; }
            .social-btn:hover { transform: translateY(-3px); box-shadow: 0 10px 24px rgba(15,23,42,0.08); }

            /* Search focus flourish */
            #search:focus { box-shadow: 0 6px 18px rgba(59,130,246,0.12); transform: translateY(-1px); }
            /* Success modal (site-wide) */
            .dm-success-modal { display: none; position: fixed; inset: 0; z-index: 60; align-items: center; justify-content: center; }
            .dm-success-modal.show { display: flex; }
            .dm-success-backdrop { position: absolute; inset: 0; background: rgba(0,0,0,0.42); }
            .dm-success-card { position: relative; z-index: 2; background: #fff; border-radius: 14px; padding: 24px 32px; box-shadow: 0 18px 48px rgba(2,6,23,0.22); display:flex; align-items:center; gap:18px; min-width:320px; max-width:90%; }
            .dm-check { width:64px; height:64px; flex:0 0 64px; }
            .dm-check svg { width:64px; height:64px; display:block; }
            .dm-check-circle { fill: none; stroke: #10B981; stroke-width: 3.8; stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 160; stroke-dashoffset: 160; }
            .dm-check-tick { fill: none; stroke: #10B981; stroke-width: 4.2; stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 64; stroke-dashoffset: 64; }
            @keyframes dm-circle-draw { to { stroke-dashoffset: 0; } }
            @keyframes dm-check-draw { to { stroke-dashoffset: 0; } }
            @keyframes dm-pop { 0% { transform: scale(.88); opacity: .0 } 60% { transform: scale(1.05); opacity: 1 } 100% { transform: scale(1); opacity: 1 } }
            /* Slightly slower animations for better visibility */
            .dm-success-card.animate { animation: dm-pop 560ms cubic-bezier(.2,.9,.2,1); }
            .dm-check-circle.animate { animation: dm-circle-draw 700ms cubic-bezier(.2,.9,.2,1) forwards; }
            .dm-check-tick.animate { animation: dm-check-draw 900ms cubic-bezier(.2,.9,.2,1) 300ms forwards; }
            /* modal backdrop blur utility used by page-level modals (podcasts details/register) */
            .modal-bg { backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); background: rgba(0,0,0,0.56); }

            /* Article loading overlay */
            .dm-loader { position: fixed; inset: 0; display:flex; align-items:center; justify-content:center; z-index:80; pointer-events:none; }
            .dm-loader .backdrop { position:absolute; inset:0; background:rgba(0,0,0,0.4); }
            .dm-loader .spinner { position:relative; z-index:2; width:64px; height:64px; border-radius:50%; display:flex; align-items:center; justify-content:center; background:rgba(255,255,255,0.9); box-shadow:0 10px 30px rgba(2,6,23,0.2); }
            .dm-spinner-ring { width:36px; height:36px; border-radius:50%; border:4px solid rgba(0,0,0,0.08); border-top-color:#2563eb; animation: spin 900ms linear infinite; }
            @keyframes spin { to { transform: rotate(360deg); } }
        </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <header>
        <!-- Top thin bar (light) -->
        <div class="bg-blue-100 border-b border-blue-300">
            <div class="max-w-6xl mx-auto px-4 py-2 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <!-- small m icon -->
                    <div class="w-6 h-6 flex items-center justify-center"><img src="/assets/m-logo.png" alt="m" class="w-full h-full object-contain" /></div>
                        <div class="text-sm text-blue-900 font-medium" id="current-date">Loading date...</div>
                </div>
                <div>
                        <a href="/login.php" class="text-sm bg-blue-600 text-white px-3 py-1 rounded flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="sr-only">Login</span>
                        <span>Login</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main header area: full site header for most pages; a compact header is shown on podcasts.php -->
        <?php if ($current === 'podcasts.php') : ?>
        <div class="bg-[#0C2D78]">
            <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="/assets/dailymail-white.png" alt="Daily Mail" class="h-14 object-contain" />
                    <h1 class="text-white text-3xl font-bold">Podcasts</h1>
                </div>
                <button onclick="openRegisterModal()" class="bg-white text-[#0C2D78] px-4 py-2 rounded-md font-bold">Subscribe to Podcasts</button>
            </div>
        </div>
        <?php else: ?>
        <div class="bg-blue-900">
            <div class="max-w-6xl mx-auto px-4 py-6 flex items-start justify-between gap-6">
                <!-- Left column: logo box and its last-updated line beneath -->
                <div class="flex flex-col items-start gap-2">
                    <div class="bg-white rounded-xl px-6 py-4 shadow-md flex flex-col items-start gap-2">
                        <img src="/assets/dailymail.png" alt="Daily Mail Logo" class="h-10 object-contain" />
                        <div class="text-sm text-gray-600 flex items-center gap-2">
                            <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="UK flag" class="w-6 h-4 object-cover rounded-sm" />
                            <span>UK Edition</span>
                        </div>
                    </div>
                    <div class="text-sm text-white my-6">Last updated: 02:06 GMT, 18 November 2025</div>
                </div>

                <!-- Right side: subscribe + contact -->
                <div class="flex flex-col items-end gap-3 w-1/3 min-w-[260px]">
                    <!-- Subscribe pill (clickable) -->
                    <a href="login.php?next=/subscribe" role="button" aria-label="Subscribe to DailyMail+" class="site-auth-btn subscribe-pill rounded-3xl bg-white px-5 py-3 shadow-md flex items-center gap-4 w-full justify-center hover:shadow-lg transition-shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300">
                        <!-- Icon with badge -->
                        <div class="relative flex-shrink-0">
                            <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-800" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 2a4 4 0 00-4 4v1.08A7.002 7.002 0 006 14v3l-1.707 1.707A1 1 0 005 20h14a1 1 0 00.707-1.707L18 17v-3a7.002 7.002 0 00-2-6.92V6a4 4 0 00-4-4zM8 20a4 4 0 008 0H8z" />
                                </svg>
                            </div>
                            <span class="absolute -right-1 -top-1 inline-flex items-center justify-center w-6 h-6 bg-blue-600 text-white rounded-full text-xs font-bold subscribe-badge">+</span>
                        </div>
                        <div class="flex flex-col items-start md:items-center text-left">
                            <div class="text-lg md:text-xl font-black text-gray-900 leading-none">SUBSCRIBE</div>
                            <div class="mt-1 flex items-center gap-2 text-sm text-gray-700">
                                <img src="/assets/dailymail.png" alt="Daily Mail" class="h-5 md:h-6 inline-block" />
                                <span class="font-semibold text-3xl">+</span>
                            </div>
                        </div>
                    </a>

                    <!-- Got a story box -->
                    <div class="bg-white rounded-lg px-4 py-3 shadow w-full text-sm text-gray-900 flex items-center justify-between gap-4">
                        <div>
                            <div class="mb-1 font-semibold">Got a story for Daily Mail?</div>
                            <div class="whitespace-normal">Contact as at: <a href="mailto:tips@dailymail.com" class="text-blue-700 underline">tips@dailymail.com</a></div>
                        </div>
                        <!-- Newspaper icon -->
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M3 5a2 2 0 012-2h11a2 2 0 012 2v14H5a2 2 0 01-2-2V5zm4 2h8v2H7V7zm0 4h8v2H7v-2zM21 7h-2v12h2a1 1 0 001-1V8a1 1 0 00-1-1z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Navigation bar placed below the header -->
            <nav class="bg-blue-100 border-t border-slate-200">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="flex items-center">
                        <!-- Gray strip behind nav links only -->
                        <div class="bg-gray-200 rounded-sm">
                            <div class="flex items-center gap-2 px-2">
                                <?php
                                            if (!function_exists('navClass')) {
                                                function navClass($current, $page) {
                                                    // Base classes for nav items; active styling is applied via inline style to use the brand hex
                                                    if ($current === $page) {
                                                        return 'text-sm px-4 py-2 text-white rounded-sm';
                                                    }
                                                    return 'text-sm px-4 py-2 text-black';
                                                }

                                                function navStyle($current, $page) {
                                                    // Hex mapping for each page's brand colour (used for active nav background)
                                                    $hexMap = [
                                                        'buyline.php' => '#ea580c', 
                                                        'royals.php'  => '#540C75', 
                                                        'news.php'    => '#00AAD2', 
                                                        'tv.php'      => '#C562A5', 
                                                        'us.php'      => '#08306b', 
                                                        'mplus.php'   => '#2563eb', // blue-600 fallback for mplus
                                                    ];
                                                    if ($current !== $page) return '';
                                                    $hex = isset($hexMap[$page]) ? $hexMap[$page] : '#2563eb';
                                                    return 'style="background-color: ' . $hex . '; color: #fff;"';
                                                }
                                            }
                                        ?>
                                <a href="/index.php" aria-current="<?php echo $current === 'index.php' ? 'page' : ''; ?>" class="<?php echo navClass($current, 'index.php'); ?>" <?php echo navStyle($current,'index.php'); ?>>Home</a>
                                <a href="/news.php" class="<?php echo navClass($current, 'news.php'); ?>" <?php echo navStyle($current,'news.php'); ?>>News</a>
                                <a href="/royals.php" class="<?php echo navClass($current, 'royals.php'); ?>" <?php echo navStyle($current,'royals.php'); ?>>Royals</a>
                                <a href="/us.php" class="<?php echo navClass($current, 'us.php'); ?>" <?php echo navStyle($current,'us.php'); ?>>U.S.</a>
                                <a href="/tv.php" class="<?php echo navClass($current, 'tv.php'); ?>" <?php echo navStyle($current,'tv.php'); ?>>TV</a>
                                <a href="/podcasts.php" class="<?php echo navClass($current, 'podcasts.php'); ?>" <?php echo navStyle($current,'podcasts.php'); ?>>Podcasts</a>
                                <a href="/buyline.php" class="<?php echo navClass($current, 'buyline.php'); ?>" <?php echo navStyle($current,'buyline.php'); ?>>Buyline</a>
                                <a href="/mplus.php" class="w-6 h-6 flex items-center justify-center <?php echo navClass($current, 'mplus.php'); ?>" <?php echo navStyle($current,'mplus.php'); ?>><img src="/assets/m-logo.png" alt="m" class="inline-block h-4 w-auto mr-1">M+</a>
                            </div>
                        </div>

                        <div class="flex-1"></div>

                        <!-- Search bar (not inside gray strip) -->
                                <div class="flex items-center gap-4">
                            <div class="relative">
                                <input id="search" type="text" placeholder="Hinted search text" class="pl-4 pr-10 py-2 rounded-full bg-white border border-gray-300 text-sm w-64" />
                                <button class="absolute right-1 top-1/2 -translate-y-1/2 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

    <?php if (strpos($_SERVER['SCRIPT_NAME'], '/articles/') !== false) : ?>
    <!-- site-level back button is rendered inside the header so it doesn't affect layout -->
    <button type="button" onclick="history.back()" aria-label="Back" class="global-back-btn" id="site-back-btn">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
    </button>

    <script>
        /* Position the back button directly below the header so it appears
            visually under the header, but because it's `position: fixed` it
            won't affect the article container layout (it won't push content).*/
        (function positionBackButton(){
            function update() {
                var header = document.querySelector('header');
                var btn = document.getElementById('site-back-btn');
                if (!btn) return;
                var offset = 8; // px gap between header and button
                // Default to a small top offset (upper-left) if header isn't available
                var top = 16;
                if (header) {
                    var rect = header.getBoundingClientRect();
                    // When header is visible, place the button a few px below it.
                    /* When header scrolls away (rect.bottom becomes small/negative),
                        clamp so the button remains at the viewport top (upper-left).*/
                    top = Math.round(Math.max(16, rect.bottom + offset));
                }
                btn.style.top = top + 'px';
                // For very narrow viewports keep a small left offset
                btn.style.left = (window.innerWidth <= 640) ? '12px' : '16px';
            }
            /* Update on load, resize and scroll. Update scroll using
            requestAnimationFrame to avoid layout thrashing and keep the
            button clamped to the upper-left once the header scrolls away.*/
            var ticking = false;
            function onScroll() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        update();
                        ticking = false;
                    });
                    ticking = true;
                }
            }

            window.addEventListener('load', update);
            window.addEventListener('resize', update);
            window.addEventListener('scroll', onScroll, { passive: true });
            // Also run after a short timeout to catch late layout shifts
            setTimeout(update, 250);
        })();
    </script>
    <?php endif; ?>
                <script>
                    // Article click loader and site auth interception
                    (function(){
                    /* Article loader: when clicking links that point to article pages,
                    show a brief loading overlay (1-2s) then navigate. Anchors
                    referencing the 'articles/' path will trigger the loader (loading animation).*/
                    function isArticleHref(href){
                        if(!href) return false;
                        try{ const u = new URL(href, location.origin); return /\/articles\//.test(u.pathname) || /articles\//.test(href); }catch(e){ return /articles\//.test(href); }
                    }

                    function showLoaderThenGo(href){
                        let loader = document.getElementById('dm-loader');
                        if(!loader){
                        loader = document.createElement('div'); loader.id = 'dm-loader'; loader.className = 'dm-loader';
                        loader.innerHTML = `<div class="backdrop"></div><div class="spinner"><div class="dm-spinner-ring"></div></div>`;
                        document.body.appendChild(loader);
                        }
                        loader.style.display = 'flex';
                        // choose 1-2s randomly for slight variance
                        const delay = 1000 + Math.floor(Math.random()*900);
                        setTimeout(()=>{ loader.style.display = 'none'; window.location.href = href; }, delay);
                    }

                    document.addEventListener('click', function(e){
                        const a = e.target.closest && e.target.closest('a');
                        if(!a) return;
                        // skip if anchor has target _blank or download or explicit class no-loader
                        if(a.target === '_blank' || a.hasAttribute('download') || a.classList.contains('no-loader')) return;
                        const href = a.getAttribute('href');
                        if(isArticleHref(href)){
                        e.preventDefault();
                        showLoaderThenGo(new URL(href, location.origin).toString());
                        }
                    }, true);
                    })();
                </script>

                <!-- Site-wide success modal (used when user clicks Login/Register/Subscribe) -->
                <div id="dm-success" class="dm-success-modal" aria-hidden="true">
                    <div class="dm-success-backdrop" aria-hidden="true"></div>
                    <div class="dm-success-card" role="status" aria-live="polite">
                        <div class="dm-check" aria-hidden="true">
                            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <circle class="dm-check-circle" cx="24" cy="24" r="20"></circle>
                                <path class="dm-check-tick" d="M15 24l6.5 6L35 17" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="dm-success-text">
                            <div class="text-lg font-semibold">Signed in</div>
                            <div class="text-sm text-gray-600">You have successfully logged in to the website.</div>
                        </div>
                    </div>
                </div>

                <script>
                    // Intercept clicks on auth-related buttons so the success modal shows
                    // on the originating page, then navigate after the timeout.
                    (function(){
                        const modal = document.getElementById('dm-success');
                        const card = modal && modal.querySelector('.dm-success-card');
                        const tick = modal && modal.querySelector('.dm-check-tick');
                        const circle = modal && modal.querySelector('.dm-check-circle');

                        function showSuccessAndNavigate(href){
                            if(!modal) { if(href) window.location.href = href; return; }
                            // respect reduced-motion
                            const short = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                            modal.classList.add('show');
                            modal.setAttribute('aria-hidden', 'false');
                            if(card) card.classList.add('animate');
                            if(circle) circle.classList.add('animate');
                            if(tick) tick.classList.add('animate');
                            const timeout = short ? 1200 : 3000;
                            setTimeout(()=>{
                                modal.classList.remove('show');
                                modal.setAttribute('aria-hidden', 'true');
                                if(card) card.classList.remove('animate');
                                if(circle) circle.classList.remove('animate');
                                if(tick) tick.classList.remove('animate');
                                if(href) window.location.href = href;
                            }, timeout);
                        }

                        /* Header auth buttons no longer trigger the success modal
                        on click. The success modal is shown only when the login flow
                        completes and the destination page includes `login_success=1`.*/

                        // If the destination page was loaded after a login (login_success=1), show the success modal on page load and then remove the flag from the URL.
                        document.addEventListener('DOMContentLoaded', function(){
                            try{
                                const sp = new URLSearchParams(window.location.search);
                                if(sp.get('login_success') === '1'){
                                    // Remove the flag from the URL to avoid repeated popups
                                    sp.delete('login_success');
                                    const newUrl = window.location.pathname + (sp.toString() ? ('?' + sp.toString()) : '') + window.location.hash;
                                    history.replaceState({}, '', newUrl);
                                    // show modal (no navigation)
                                    showSuccessAndNavigate();
                                }
                            }catch(e){/* ignore */}
                        });
                    })();
                </script>

    <main class="max-w-6xl mx-auto px-4 py-8">
