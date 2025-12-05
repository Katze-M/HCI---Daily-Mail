<?php
// Shared header include: contains <head> and the site header/nav
$current = basename($_SERVER['SCRIPT_NAME']);
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

        <!-- Main blue header area -->
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
                    <!-- Subscribe pill -->
                    <div class="rounded-3xl bg-white px-5 py-3 shadow-md flex items-center gap-4 w-full justify-center">
                        <!-- Bell icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-800 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2a4 4 0 00-4 4v1.08A7.002 7.002 0 006 14v3l-1.707 1.707A1 1 0 005 20h14a1 1 0 00.707-1.707L18 17v-3a7.002 7.002 0 00-2-6.92V6a4 4 0 00-4-4zM8 20a4 4 0 008 0H8z" />
                        </svg>
                        <div class="flex flex-col items-start md:items-center text-left">
                            <div class="text-2xl md:text-3xl font-black text-gray-900 leading-none">SUBSCRIBE</div>
                            <div class="mt-1 flex items-center gap-2">
                                <img src="/assets/dailymail.png" alt="Daily Mail" class="h-6 md:h-8 inline-block" />
                                <span class="text-2xl md:text-3xl font-bold text-gray-900">+</span>
                            </div>
                        </div>
                    </div>

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
                                                    return $current === $page ? 'text-sm px-4 py-2 bg-blue-600 text-white rounded-sm' : 'text-sm px-4 py-2 text-black';
                                                }
                                            }
                                        ?>
                                <a href="index.php" aria-current="<?php echo $current === 'index.php' ? 'page' : ''; ?>" class="<?php echo navClass($current, 'index.php'); ?>">Home</a>
                                <a href="news.php" class="<?php echo navClass($current, 'news.php'); ?>">News</a>
                                <a href="royals.php" class="<?php echo navClass($current, 'royals.php'); ?>">Royals</a>
                                <a href="us.php" class="<?php echo navClass($current, 'us.php'); ?>">U.S.</a>
                                <a href="tv.php" class="<?php echo navClass($current, 'tv.php'); ?>">TV</a>
                                <a href="podcasts.php" class="<?php echo navClass($current, 'podcasts.php'); ?>">Podcasts</a>
                                <a href="buyline.php" class="<?php echo navClass($current, 'buyline.php'); ?>">Buyline</a>
                                <a href="/mplus.php" class="w-6 h-6 flex items-center justify-center <?php echo navClass($current, 'mplus.php'); ?>"><img src="/assets/m-logo.png" alt="m" class="inline-block h-4 w-auto mr-1">+</a>
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

    <main class="max-w-6xl mx-auto px-4 py-8">
