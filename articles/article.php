<?php
// Simple article page placeholder with right-hand ad column
// header/footer are in the project root; include from parent directory
include __DIR__ . '/../header.php';
?>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Article main column -->
            <main class="md:col-span-9 bg-white rounded shadow p-6">
                <div class="relative mb-4">
                    <img src="/assets/news_article_pics/news1coffeeimg1.png" alt="Article hero" class="w-full rounded-lg object-cover" style="height:360px;" />
                    <button type="button" onclick="history.back()" aria-label="Back" class="absolute left-3 top-1/2 -translate-y-1/2 z-50 inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                    </button>
                </div>
                <h1 class="text-3xl font-bold text-blue-800 mb-2">Best bean-to-cup coffee machine: The tried and tested automatics I recommend for a fuss-free brew, even if you're a complete beginner</h1>

                <div class="my-4 border-t border-b border-blue-300 py-2">
                    <div class="text-sm text-gray-600 mb-2 byline">By DANIELLE AMATO - LIFESTYLE AND CONSUMER REVIEWS WRITER</div>
                    <div class="text-sm text-gray-600 mb-0 byline">Published: 12:57 GMT, 4 December 2025 | Updated: 12:59 GMT, 4 December 2025</div>
                </div>

                
                <p class="text-gray-700 leading-relaxed">If you care about good coffee but don't have the patience or time for a fully manual espresso machine, a good bean-to-cup coffee machine can produce professional-ish results with just a few taps of a button. <br>
                <br>These fully- and semi-automatic machines tend to come in a little pricier than their manual counterparts and pod coffee machines, mostly because they are complex machines that do everything for you. There's no need to purchase an extra grinder, portafilter or milk frother.</p>
                <div class="my-4 border-t border-blue-300 py-2">
                    <!-- Section -->
                <section class="mt-6">
                    <h2 class="text-xl font-semibold">What exactly is a bean-to-cup coffee machine?</h2>
                    <p class="text-gray-700 mt-2">If we are being pedantic, a true bean-to-cup coffee machine is one with an integrated bean hopper and internal brewing unit. This means some of my favourite machines, such as the <a href="#" class="text-blue-700 hover:underline">Ninja Cafe Luxe Premier</a> and the <a href="#" class="text-blue-700 hover:underline">Sage Oracle Jet</a>, don't technically qualify.</p>
                    <div class="mt-4">
                        <img src="/assets/news_article_pics/news1coffeeimg2.png" alt="Coffee machine close-up" class="w-full h-auto object-contain rounded-lg shadow" />
                    </div>
                    <p class="text-gray-700 mt-2">However, there are so many machines that are now blurring the lines between a true fully automatic bean-to-cup and a semi-automatic with assisted brewing. Because of this, I've included a couple of these options in our roundup. They’re almost as easy to use as a true bean-to-cup, so I'm happy to recommend them.<br>
                        <br>If you're a true coffee lover that values convenience, quality and time-saving, these are the tried and tested bean-to-cup picks that I recommend to everyone.</p>
                </section>
                </div>

                <div class="my-4 border-t border-blue-300 py-2">
                    <ul class="list-disc ml-6 space-y-1 text-gray-800">
                        <li>Best value bean-to-cup: <a href="#" class="text-blue-700 hover:underline">De'Longhi Magnifica</a></li>
                        <li>Best for quality espresso: <a href="#" class="text-blue-700 hover:underline">Gaggia Accademia</a></li>
                        <li>Best does it all automatic: <a href="#" class="text-blue-700 hover:underline">De'Longhi Eletta Explore</a></li>
                        <li>Best in-between machine: <a href="#" class="text-blue-700 hover:underline">Sage Oracle Jet</a></li>
                        <li>Best Ninja machine: <a href="#" class="text-blue-700 hover:underline">Ninja Luxe Cafe Premier</a></li>
                        <li>Prestige pick: <a href="#" class="text-blue-700 hover:underline">KitchenAid KF8</a></li>
                    </ul>
                </div>

                <!-- Comments section -->
                <?php
                $comment_count = 41;
                $comments = [
                    [
                        'name' => 'Reg Trousers',
                        'location' => 'Migrants-on-Sea, United Kingdom',
                        'time' => 'moments ago',
                        'text' => "Does he slag off the royals and call them racy ist like Harry?",
                        'up' => 0,
                        'down' => 0,
                    ],
                    [
                        'name' => 'pexi',
                        'location' => 'Colwyn Bay, United Kingdom',
                        'time' => '12 minutes ago',
                        'text' => "Yes he is but that is a happy friendly face, the eyes are happy and friendly",
                        'up' => 3,
                        'down' => 0,
                    ],
                    [
                        'name' => 'Nigel Fartage',
                        'location' => 'Clacton on Sea, United Kingdom',
                        'time' => '28 minutes ago',
                        'text' => "He looks nothing like him.",
                        'up' => 4,
                        'down' => 0,
                    ],
                ];
                ?>

                <section id="comments-section" class="mt-6 bg-white rounded shadow p-4">
                    <div class="flex items-start justify-between">
                        <h3 class="text-lg font-semibold">Comments (<?php echo $comment_count; ?>)</h3>
                        <div class="text-sm text-gray-600"> <a href="/login.php" class="text-blue-600 hover:underline">Log in</a> </div>
                    </div>

                    <div class="mt-4 flex gap-4 items-start">
                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500"> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        </div>
                        <textarea placeholder="Enter your comment..." class="flex-1 border rounded p-3 text-sm resize-none h-12"></textarea>
                        <a href="/login.php" class="ml-4 bg-blue-600 text-white px-4 py-2 rounded-full inline-flex items-center justify-center">Log in to comment</a>
                    </div>

                    <div class="mt-4 text-sm text-gray-600">Comments are subject to our <a href="#" class="text-blue-600 underline">House rules</a> and <a href="#" class="text-blue-600 underline">Terms</a></div>

                    <!-- Comments list -->
                    <div id="comments-list" class="mt-4 space-y-4">
                        <?php foreach($comments as $c): ?>
                            <div class="border-t pt-4">
                                <div class="flex gap-3">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-sm text-gray-600"><?php echo strtoupper($c['name'][0]); ?></div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <div class="text-sm font-semibold"><?php echo htmlspecialchars($c['name']); ?></div>
                                                <div class="text-xs text-gray-500"><?php echo htmlspecialchars($c['location']); ?>, <?php echo $c['time']; ?></div>
                                            </div>
                                            <div class="text-xs text-gray-400"> 
                                                <a href="#" class="px-2">Reply</a>
                                            </div>
                                        </div>
                                        <div class="mt-2 text-gray-800"><?php echo htmlspecialchars($c['text']); ?></div>
                                        <div class="mt-2 flex items-center gap-3 text-xs text-gray-500">
                                            <div>Click to rate</div>
                                            <div class="flex items-center gap-2">
                                                <button type="button" class="vote-btn vote-up text-green-600 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="up" aria-label="Upvote">▲</button>
                                                <span class="vote-count-up text-green-600"><?php echo $c['up']; ?></span>
                                                <button type="button" class="vote-btn vote-down text-red-500 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="down" aria-label="Downvote">▼</button>
                                                <span class="vote-count-down text-red-500"><?php echo $c['down']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-4 text-center">
                        <button id="show-more-comments" data-remaining="<?php echo ($comment_count - count($comments)); ?>" class="bg-blue-700 text-white px-6 py-2 rounded-full">Show <?php echo ($comment_count - count($comments)); ?> More Comments</button>
                    </div>
                </section>
                <style>
                /* Vote button animation styles */
                .vote-btn { transition: transform .12s ease, background-color .18s ease; cursor: pointer; }
                .vote-btn.pop { transform: scale(1.15); }
                .vote-btn.active.vote-up { background-color: rgba(16,185,129,0.12); }
                .vote-btn.active.vote-down { background-color: rgba(239,68,68,0.12); }
                .vote-count-up, .vote-count-down { transition: transform .12s ease, color .12s ease; display:inline-block; min-width:18px; text-align:center; }
                .vote-count-up.pop, .vote-count-down.pop { transform: translateY(-4px) scale(1.05); }
                </style>

                <script>
                (function(){
                    document.addEventListener('DOMContentLoaded', function(){
                        const commentsEl = document.getElementById('comments-section');
                        if (!commentsEl) return;

                        commentsEl.addEventListener('click', function(e){
                            const btn = e.target.closest('.vote-btn');
                            if (!btn) return;
                            e.preventDefault();

                            const vote = btn.dataset.vote; // 'up' or 'down'
                            const wrapper = btn.closest('.border-t');
                            if (!wrapper) return;
                            const upSpan = wrapper.querySelector('.vote-count-up');
                            const downSpan = wrapper.querySelector('.vote-count-down');

                            // Parse current counts
                            let up = parseInt(upSpan?.textContent || '0', 10) || 0;
                            let down = parseInt(downSpan?.textContent || '0', 10) || 0;

                            const isActive = btn.classList.contains('active');

                            // brief pop animation
                            btn.classList.add('pop');
                            setTimeout(() => btn.classList.remove('pop'), 180);

                            if (vote === 'up') {
                                if (isActive) {
                                    // undo upvote
                                    btn.classList.remove('active');
                                    up = Math.max(0, up - 1);
                                    if (upSpan) upSpan.textContent = up;
                                } else {
                                    // add upvote
                                    btn.classList.add('active');
                                    up = up + 1;
                                    if (upSpan) upSpan.textContent = up;
                                    // if down was active, remove it
                                    const other = wrapper.querySelector('[data-vote="down"]');
                                    if (other && other.classList.contains('active')) {
                                        other.classList.remove('active');
                                        down = Math.max(0, down - 1);
                                        if (downSpan) downSpan.textContent = down;
                                    }
                                }
                            } else if (vote === 'down') {
                                if (isActive) {
                                    btn.classList.remove('active');
                                    down = Math.max(0, down - 1);
                                    if (downSpan) downSpan.textContent = down;
                                } else {
                                    btn.classList.add('active');
                                    down = down + 1;
                                    if (downSpan) downSpan.textContent = down;
                                    const other = wrapper.querySelector('[data-vote="up"]');
                                    if (other && other.classList.contains('active')) {
                                        other.classList.remove('active');
                                        up = Math.max(0, up - 1);
                                        if (upSpan) upSpan.textContent = up;
                                    }
                                }
                            }

                            // animate counts
                            if (upSpan) { upSpan.classList.add('pop'); setTimeout(()=> upSpan.classList.remove('pop'),180); }
                            if (downSpan) { downSpan.classList.add('pop'); setTimeout(()=> downSpan.classList.remove('pop'),180); }
                        });

                        // Show more comments logic (client-side only)
                        const showBtn = document.getElementById('show-more-comments');
                        const commentsList = document.getElementById('comments-list');
                        if (showBtn && commentsList) {
                            let remaining = parseInt(showBtn.dataset.remaining || '0', 10) || 0;
                            const batch = 5; // number of comments to append per click

                            // helper to create a comment element
                            function createComment(i) {
                                const wrapper = document.createElement('div');
                                wrapper.className = 'border-t pt-4';
                                const initials = String.fromCharCode(65 + (i % 26));
                                wrapper.innerHTML = `
                                    <div class="flex gap-3">
                                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-sm text-gray-600">${initials}</div>
                                        <div class="flex-1">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <div class="text-sm font-semibold">Commenter ${i}</div>
                                                    <div class="text-xs text-gray-500">Somewhere, United Kingdom, just now</div>
                                                </div>
                                                <div class="text-xs text-gray-400"><a href="#" class="px-2">Reply</a></div>
                                            </div>
                                            <div class="mt-2 text-gray-800">This is a sample additional comment number ${i} appended by the "Show more" button.</div>
                                            <div class="mt-2 flex items-center gap-3 text-xs text-gray-500">
                                                <div>Click to rate</div>
                                                <div class="flex items-center gap-2">
                                                    <button type="button" class="vote-btn vote-up text-green-600 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="up">▲</button>
                                                    <span class="vote-count-up text-green-600">0</span>
                                                    <button type="button" class="vote-btn vote-down text-red-500 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="down">▼</button>
                                                    <span class="vote-count-down text-red-500">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;
                                // start hidden for animation
                                wrapper.style.opacity = '0';
                                wrapper.style.transform = 'translateY(8px)';
                                wrapper.style.transition = 'opacity .28s ease, transform .28s ease';
                                return wrapper;
                            }

                            showBtn.addEventListener('click', function(){
                                if (remaining <= 0) return;
                                const toShow = Math.min(batch, remaining);
                                const startIndex = (<?php echo count($comments); ?>) + (<?php echo ($comment_count - count($comments)); ?> - remaining) + 1;
                                // append comments
                                for (let i = 0; i < toShow; i++) {
                                    const idx = startIndex + i;
                                    const el = createComment(idx);
                                    commentsList.appendChild(el);
                                    // force reflow then reveal with stagger
                                    (function(node, delay){
                                        setTimeout(()=>{
                                            node.style.opacity = '1';
                                            node.style.transform = 'translateY(0)';
                                        }, delay);
                                    })(el, i * 80);
                                }
                                remaining -= toShow;
                                showBtn.dataset.remaining = String(remaining);
                                if (remaining > 0) {
                                    showBtn.textContent = `Show ${remaining} More Comments`;
                                } else {
                                    showBtn.style.display = 'none';
                                }
                            });
                        }
                    });
                })();
                </script>
            </main>

            <!-- Right ad column -->
            <aside class="hidden md:block md:col-span-3">
                <div class="sticky top-24">
                    <div class="text-xs text-gray-500 mb-2">ADVERTISEMENT</div>
                    <div class="bg-white p-2 rounded shadow flex justify-center">
                        <img src="/assets/ads.png" alt="Advertisement" class="w-36 h-auto object-contain" />
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php include __DIR__ . '/../footer.php'; ?>
