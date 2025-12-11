<?php
// Article: Trump explodes at Zelensky...
$comments = [
    [
        'name' => 'TVBuff',
        'text' => 'Interesting to see him celebrating in style! First‑class flight with a co‑star — that’s one way to mark the win.',
        'time' => '2h'
    ],
    [
        'name' => 'CelebWatcher',
        'text' => 'Congrats to him! Hope the show’s momentum keeps going. Always fun to see winners enjoy their success.',
        'time' => '1h'
    ],
    [
        'name' => 'EntertainmentFan',
        'text' => 'Curious how Lisa Riley feels about all the attention. Media buzz always follows after wins like this.',
        'time' => '45m'
    ],
];

$comment_count = count($comments);







include __DIR__ . '/../../header.php';
?>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Article main column -->
            <main class="relative md:col-span-9 bg-white rounded shadow p-6">
                <div class="mb-4">
                    <img src="/assets/news_article_pics/News-21.avif" alt="Trump interview" class="w-full rounded-lg object-cover" style="height:360px;" />
                </div>

                <h1 class="text-3xl font-bold text-blue-800 mb-2">King Of The Jungle AngryGinge wears his I’m A Celeb winner’s crown as he jets back to Manchester with co-star Lisa Riley on a first class flight</h1>

                <div class="my-4 border-t border-b border-blue-300 py-2">
                    <div class="text-xl text-gray-600 mb-2 byline">By REBECCA DAVISON, DEPUTY HEAD OF SHOWBIZ</div>
                    <div class="text-xl text-gray-600 mb-0 byline">Published: 13:23 GMT, 10 December 2025 | Updated: 13:38 GMT, 10 December 2025</div>
                </div>

                <p class="text-gray-700 leading-relaxed">
                King Of The Jungle AngryGinge looked pretty pleased with himself as he jetted back to Manchester wearing his I’m A Celeb winner’s crown on Wednesday. 

                Both he and fellow campmate Lisa Riley, 49, touched down after flying back on a first class flight.

                English Twitch streamer and YouTuber Ginge, 24, real name Morgan Birtwistle, was wearing a vintage Manchester United strip and Cars-themed Crocs as he was mobbed by overexcited fans upon landing.
                </p><br>
                He delightedly signed pictures for fans and smiled for selfies as he made his way through arrivals with Lisa and his mum Michelle. 

                Lisa - who came in fifth place, had a big smile on her face as Ginge threw his arms around her. 

                The Emmerdale actress wore a comfortable looking all-black ensemble teamed with a colourful green scarf. 
                <br>

                <figure class="mt-6">
                    <img src="/assets/news_article_pics/News-21.avif" alt="Meeting" class="w-full rounded-lg object-cover" />
                    <figcaption class="text-sm text-gray-500 mt-2 my-4 border-t border-b border-black-300 py-2" ><b>King Of The Jungle AngryGinge looked pretty pleased with himself as he jetted back to Manchester wearing his I’m A Celeb winner’s crown on Wednesday</b></figcaption>
                </figure>
                <figure class="mt-6">
                    <img src="/assets/news_article_pics/News-22.avif" alt="Meeting" class="w-full rounded-lg object-cover" />
                    <figcaption class="text-sm text-gray-500 mt-2 my-4 border-t border-b border-black-300 py-2" ><b>Both he and fellow campmate Lisa Riley, 49, touched down after flying back on a first class flight</b></figcaption>
                </figure>
                <p class="text-gray-700 leading-relaxed">
                The campmates were all smiles when they touched down but during the flight AngryGinge was left unimpressed after being pranked by Lisa.

                As Ginge enjoyed a snooze in his luxurious first class seat, Lisa tormented him.

                Taking to Instagram, the Emmerdale actress videoed herself approaching the 24-year-old as she stuck out her middle finger.
                <br>
                In response, Ginge swore at Lisa, calling her a 'b*****d', before immediately closing his eyes.

                Amused Lisa, 49, captioned the clip: 'And the pranks just keep on coming….even when we are on the plane coming home.'

                The pair are some of the last stars to embark on the long journey back to the UK from Australia.

                Ruby Wax, Kelly Brook, Tom Read Wilson, Eddie Kadi and Vogue Williams landed back earlier this week to emotional reunions with their families.

                </p><br>


                <figure class="mt-6">
                    <img src="/assets/news_article_pics/News-23.avif" alt="Meeting" class="w-full rounded-lg object-cover" />
                    <figcaption class="text-sm text-gray-500 mt-2 my-4 border-t border-b border-black-300 py-2" ><b>He delightedly signed pictures for fans and smiled for selfies as he made his way through arrivals with Lisa and his mum Michelle</b></figcaption>
                </figure>




                


                <hr class="my-6" />
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
                                                <div class="text-xs text-gray-500"><?php echo htmlspecialchars($c['time']); ?></div>
                                            </div>
                                            <div class="text-xs text-gray-400"> 
                                                <button type="button" class="px-2 reply-link">Reply</button>
                                            </div>
                                        </div>
                                        <div class="mt-2 text-gray-800"><?php echo htmlspecialchars($c['text']); ?></div>
                                        <div class="mt-2 flex items-center gap-3 text-xs text-gray-500">
                                            <div>Click to rate</div>
                                            <div class="flex items-center gap-2">
                                                <button type="button" class="vote-btn vote-up text-green-600 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="up" aria-label="Upvote">▲</button>
                                                <span class="vote-count-up text-green-600">0</span>
                                                <button type="button" class="vote-btn vote-down text-red-500 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="down" aria-label="Downvote">▼</button>
                                                <span class="vote-count-down text-red-500">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-4 text-center">
                        <?php $remaining = ($comment_count - count($comments)); if ($remaining > 0): ?>
                        <button id="show-more-comments" data-remaining="<?php echo $remaining; ?>" class="bg-blue-700 text-white px-6 py-2 rounded-full">Show <?php echo $remaining; ?> More Comments</button>
                        <?php endif; ?>
                    </div>
                    <style>
                    /*Vote button animation styles*/
                    .vote-btn { transition: transform .12s ease, background-color .18s ease; cursor: pointer; }
                    .vote-btn.pop { transform: scale(1.15); }
                    .vote-btn.active.vote-up { background-color: rgba(16,185,129,0.12); }
                    .vote-btn.active.vote-down { background-color: rgba(239,68,68,0.12); }
                    .vote-count-up, .vote-count-down { transition: transform .12s ease, color .12s ease; display:inline-block; min-width:18px; text-align:center; }
                    .vote-count-up.pop, .vote-count-down.pop { transform: translateY(-4px) scale(1.05); }
                    /* Reply styling + animation for newly added replies */
                    .reply-new { background-color: #fff9ec; border-left: 3px solid #f59e0b; padding: 0.5rem; border-radius: 0.375rem; }
                    .reply-animate { opacity: 0; transform: translateY(8px); transition: opacity .28s ease, transform .28s ease; }
                    .reply-enter { opacity: 1; transform: translateY(0); }
                    .reply-textarea { min-height: 64px; }
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

                                //Parse current counts
                                let up = parseInt(upSpan?.textContent || '0', 10) || 0;
                                let down = parseInt(downSpan?.textContent || '0', 10) || 0;

                                const isActive = btn.classList.contains('active');

                                //brief pop animation
                                btn.classList.add('pop');
                                setTimeout(() => btn.classList.remove('pop'), 180);

                                if (vote === 'up') {
                                    if (isActive) {
                                        //undo upvote
                                        btn.classList.remove('active');
                                        up = Math.max(0, up - 1);
                                        if (upSpan) upSpan.textContent = up;
                                    } else {
                                        //add upvote
                                        btn.classList.add('active');
                                        up = up + 1;
                                        if (upSpan) upSpan.textContent = up;
                                        //if down was active, remove it
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

                                //animate counts
                                if (upSpan) { upSpan.classList.add('pop'); setTimeout(()=> upSpan.classList.remove('pop'),180); }
                                if (downSpan) { downSpan.classList.add('pop'); setTimeout(()=> downSpan.classList.remove('pop'),180); }
                            });

                            //Show more comments logic (client-side only)
                            const showBtn = document.getElementById('show-more-comments');
                            const commentsList = document.getElementById('comments-list');
                            if (showBtn && commentsList) {
                                let remaining = parseInt(showBtn.dataset.remaining || '0', 10) || 0;
                                const batch = 5; //number of comments to append per click

                                //helper to create a comment element
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
                                                    <div class="text-xs text-gray-400"><button type="button" class="px-2 reply-link">Reply</button></div>
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
                                    //start hidden for animation
                                    wrapper.style.opacity = '0';
                                    wrapper.style.transform = 'translateY(8px)';
                                    wrapper.style.transition = 'opacity .28s ease, transform .28s ease';
                                    return wrapper;
                                }

                                showBtn.addEventListener('click', function(){
                                    if (remaining <= 0) return;
                                    const toShow = Math.min(batch, remaining);
                                    const startIndex = (<?php echo count($comments); ?>) + (<?php echo ($comment_count - count($comments)); ?> - remaining) + 1;
                                    //append comments
                                    for (let i = 0; i < toShow; i++) {
                                        const idx = startIndex + i;
                                        const el = createComment(idx);
                                        commentsList.appendChild(el);
                                        //force reflow then reveal with stagger
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

                            // Reply form handling (client-side only)
                            function createReplyForm() {
                                const container = document.createElement('div');
                                container.className = 'mt-3';
                                container.innerHTML = `
                                    <textarea class="reply-textarea w-full border rounded p-2 text-sm resize-none" rows="3" placeholder="Write a reply..."></textarea>
                                    <div class="mt-2 flex items-center gap-2">
                                        <button type="button" class="reply-submit bg-blue-600 text-white px-3 py-1 rounded">Reply</button>
                                        <button type="button" class="reply-cancel bg-gray-200 px-3 py-1 rounded">Cancel</button>
                                    </div>`;
                                return container;
                            }

                            // helper to open a reply form for a given .reply-link element
                            function openReplyFor(link) {
                                if (!link) return;
                                const commentWrapper = link.closest('.border-t');
                                if (!commentWrapper) return;
                                if (commentWrapper.querySelector('.reply-textarea')) return; // already open
                                const form = createReplyForm();
                                const contentArea = commentWrapper.querySelector('.flex-1') || commentWrapper;
                                contentArea.appendChild(form);
                                const textarea = form.querySelector('.reply-textarea');
                                textarea.focus();
                                // no live preview — per request we hide the form on submit and then show the reply
                                form.querySelector('.reply-cancel').addEventListener('click', function(){ form.remove(); });

                                function submitReply(){
                                    const text = textarea.value.trim();
                                    if (!text) return;
                                    const replyEl = document.createElement('div');
                                    replyEl.className = 'mt-3 reply-new reply-animate';
                                    const nowLabel = 'just now';
                                    const initials = 'Y';
                                    replyEl.innerHTML = `
                                        <div class="flex gap-3">
                                            <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold">${initials}</div>
                                            <div class="flex-1">
                                                <div class="text-sm font-semibold">You <span class="text-xs text-gray-500">• ${nowLabel}</span></div>
                                                <div class="mt-1 text-gray-800">${escapeHtml(text)}</div>
                                            </div>
                                        </div>`;
                                    contentArea.appendChild(replyEl);
                                    requestAnimationFrame(()=>{ replyEl.classList.remove('reply-animate'); replyEl.classList.add('reply-enter'); });
                                    setTimeout(()=>{ replyEl.classList.remove('reply-new','reply-enter'); }, 3200);
                                    form.remove();
                                }

                                form.querySelector('.reply-submit').addEventListener('click', submitReply);
                                textarea.addEventListener('keydown', function(ev){ if (ev.key === 'Enter' && !ev.shiftKey) { ev.preventDefault(); submitReply(); } });
                            }

                            // Delegate clicks for Reply links (robust: handle text-node targets)
                            commentsEl.addEventListener('click', function(e){
                                // find nearest ancestor element that is a reply-link
                                let link = null;
                                if (e.target && e.target.closest) {
                                    link = e.target.closest('.reply-link');
                                } else {
                                    // fallback for text nodes: walk up
                                    let node = e.target;
                                    while (node && node !== commentsEl) {
                                        if (node.nodeType === 1 && node.classList && node.classList.contains('reply-link')) { link = node; break; }
                                        node = node.parentNode;
                                    }
                                }
                                if (!link) return;
                                e.preventDefault();
                                openReplyFor(link);
                            });

                            // Attach direct listeners to any existing .reply-link buttons (helps if delegation missed them)
                            document.querySelectorAll('#comments-section .reply-link').forEach(function(btn){
                                btn.addEventListener('click', function(ev){ ev.preventDefault(); openReplyFor(btn); });
                            });

                            // Delegated fallback for reply-submit buttons (handles cases where per-form listener didn't attach)
                            commentsEl.addEventListener('click', function(e){
                                const submitBtn = e.target.closest && e.target.closest('.reply-submit');
                                if (!submitBtn) return;
                                e.preventDefault();
                                const form = submitBtn.closest('.mt-3');
                                if (!form) return;
                                const textarea = form.querySelector('.reply-textarea');
                                if (!textarea) return;
                                const text = textarea.value.trim();
                                if (!text) return;
                                // find parent comment container
                                const commentWrapper = submitBtn.closest('.border-t');
                                const contentArea = (commentWrapper && (commentWrapper.querySelector('.flex-1') || commentWrapper)) || form.parentNode;
                                const replyEl = document.createElement('div');
                                replyEl.className = 'mt-3 reply-new reply-animate';
                                const nowLabel = 'just now';
                                const initials = 'Y';
                                replyEl.innerHTML = `
                                    <div class="flex gap-3">
                                        <div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold">${initials}</div>
                                        <div class="flex-1">
                                            <div class="text-sm font-semibold">You <span class="text-xs text-gray-500">• ${nowLabel}</span></div>
                                            <div class="mt-1 text-gray-800">${escapeHtml(text)}</div>
                                        </div>
                                    </div>`;
                                contentArea.appendChild(replyEl);
                                requestAnimationFrame(()=>{ replyEl.classList.remove('reply-animate'); replyEl.classList.add('reply-enter'); });
                                setTimeout(()=>{ replyEl.classList.remove('reply-new','reply-enter'); }, 3200);
                                form.remove();
                            });
                        });
                    })();
                    </script>
                </section>

            </main>

            <!-- Right ad column -->
            <aside class="hidden md:block md:col-span-3">
                <div class="text-xs text-gray-500 mb-2">ADVERTISEMENT</div>
                <div class="bg-white p-2 rounded shadow flex justify-center">
                    <img src="/assets/ads.png" alt="Ad" class="w-28 h-auto object-contain" />
                </div>
            </aside>
        </div>
    </div>

<?php include __DIR__ . '/../../footer.php'; ?>
