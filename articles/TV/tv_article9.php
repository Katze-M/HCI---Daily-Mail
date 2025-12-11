<?php
include __DIR__ . '/../../header.php';
?>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <main class="relative md:col-span-9 bg-white rounded shadow p-6">
                <div class="mb-4">
                    <img src="/assets/tv_assets/article9-img1.png" alt="David Walliams" class="w-full rounded-lg object-cover" style="height:360px;" />
                </div>

                <h1 class="text-3xl font-bold text-blue-800 mb-2">He was a judge on Britain's Got Talent, one half of the nation's most successful comedy duo, a best-selling author and always seemed to have a glamorous woman on his arm</h1>

                <div class="my-4 border-t border-b border-blue-300 py-2">
                    <div class="text-xl text-gray-600 mb-2 byline">By DAILY MAIL REPORTER</div>
                    <div class="text-xl text-gray-600 mb-0 byline">Published: 09:00 GMT, 11 December 2025</div>
                </div>

                <p class="text-gray-700 leading-relaxed">There was a time when David Walliams was the toast of the entertainment industry and one of the most eligible bachelors in showbiz, equally loved by the audiences he charmed with his witty persona and extravagant character.</p>

                <p class="text-gray-700 leading-relaxed mt-4">But since the star was forced off Britain's Got Talent for making an offensive comment about a pensioner and vile sexual remarks about another female contestant during a break in auditions, the comedian's career has not quite recovered - nor has his relationship with Simon Cowell.</p>

                <p class="text-gray-700 leading-relaxed mt-4">He used to describe himself as Simon's 'Number one girl' on BGT, and was in the habit of leaping on the music mogul at red carpet events. However, the Daily Mail revealed last year that the pair are 'are no longer on speaking terms at all'.</p>

                <p class="text-gray-700 leading-relaxed mt-4">Those who know them both say Simon has now gone to every possible length to distance himself from the Little Britain star, with a source describing how the end of his BGT career hit the 'troubled soul' comedian hard.</p>

                <p class="text-gray-700 leading-relaxed mt-4">Meanwhile, Walliams, who hails from suburban Banstead in Surrey, has in the past been tortured by crushes on unattainable women, and many of his supposed relationships have turned out to be sexless.</p>

                <p class="text-gray-700 leading-relaxed mt-4">He has been single since his divorce from Lara Stone a decade ago, the mother of his son Alfred. This week he shared his pain at not spending Christmas with the 12-year-old, because it's his turn to be with his mother, stepfather and half brother.</p>

                <p class="text-gray-700 leading-relaxed mt-4">When he left the BGT David revealed he suffered suicidal thoughts and at times thought he'd 'lost his ability to be funny', turning instead to his passion for writing - with his latest children's book Santa And Son released in time for Christmas.</p>

                <p class="text-gray-700 leading-relaxed mt-4">Although the best-selling author continues to succeed on the publishing front, David appears to be struggling with getting back into mainstream TV and is instead fronting a podcast with his former Little Britain co-star Matt Lucas, Making A Scene.</p>

                <figure class="mt-6">
                    <img src="/assets/tv_assets/article9-img2.png" alt="Walliams with Simon Cowell" class="w-full rounded-lg object-cover" />
                </figure>

                <p class="text-gray-700 leading-relaxed mt-4">Meanwhile, David found himself on the rough end of 'cancel culture' when the show he co-created with Matt Lucas in 2003, Little Britain, was yanked from the air in 2022.</p>

                <p class="text-gray-700 leading-relaxed mt-4">The hit sketch show, which poked fun at British social stereotypes included segments that featured white actors in black face.</p>

                <p class="text-gray-700 leading-relaxed mt-4">In an apparent reaction to the Black Lives Matter protests, Netflix pulled the show along with Come Fly With Me, also created by David and Matt.</p>

                <p class="text-gray-700 leading-relaxed mt-4">Later the BBC and BritBox both confirmed they had also decided to remove Little Britain saying 'times have changed' since the show first aired.</p>

                <p class="text-gray-700 leading-relaxed mt-4">His last attempt to climb back to the top coincides with the ongoing tease of a TV return, following a turbulent few years for the star.</p>

                <?php
                // Minimal sample comments; UI will simulate remaining comments client-side
                $comments = [
                    ['name'=>'Reader1','location'=>'London','time'=>'1 hour ago','text'=>'Tough times publicly but hope he recovers.','up'=>124,'down'=>12],
                    ['name'=>'Reader2','location'=>'Surrey','time'=>'2 hours ago','text'=>'The book is lovely but TV is a tougher crowd now.','up'=>98,'down'=>6],
                ];
                $comment_count = 615;
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

                    <div class="mt-4 text-sm text-gray-600">Comments are subject to our <a href="#" class="text-blue-600 underline">House rules</a>.</div>

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
                                                <button type="button" class="px-2 reply-link">Reply</button>
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

                    <?php $remaining = ($comment_count - count($comments)); ?>
                    <?php if ($remaining > 0): ?>
                    <div class="mt-4 text-center">
                        <button id="show-more-comments" data-remaining="<?php echo $remaining; ?>" class="bg-blue-700 text-white px-6 py-2 rounded-full">Show <?php echo $remaining; ?> More Comments</button>
                    </div>
                    <?php endif; ?>
                </section>

                <style>
                .vote-btn { transition: transform .12s ease, background-color .18s ease; cursor: pointer; }
                .vote-btn.pop { transform: scale(1.15); }
                .vote-btn.active.vote-up { background-color: rgba(16,185,129,0.12); }
                .vote-btn.active.vote-down { background-color: rgba(239,68,68,0.12); }
                .vote-count-up, .vote-count-down { transition: transform .12s ease, color .12s ease; display:inline-block; min-width:18px; text-align:center; }
                .vote-count-up.pop, .vote-count-down.pop { transform: translateY(-4px) scale(1.05); }
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
                            const btn = e.target.closest && e.target.closest('.vote-btn');
                            if (!btn) return;
                            e.preventDefault();
                            const vote = btn.dataset.vote;
                            const wrapper = btn.closest('.border-t');
                            if (!wrapper) return;
                            const upSpan = wrapper.querySelector('.vote-count-up');
                            const downSpan = wrapper.querySelector('.vote-count-down');
                            let up = parseInt(upSpan?.textContent || '0', 10) || 0;
                            let down = parseInt(downSpan?.textContent || '0', 10) || 0;
                            const isActive = btn.classList.contains('active');
                            btn.classList.add('pop'); setTimeout(() => btn.classList.remove('pop'), 180);
                            if (vote === 'up') {
                                if (isActive) { btn.classList.remove('active'); up = Math.max(0, up - 1); if (upSpan) upSpan.textContent = up; }
                                else { btn.classList.add('active'); up = up + 1; if (upSpan) upSpan.textContent = up; const other = wrapper.querySelector('[data-vote="down"]'); if (other && other.classList.contains('active')) { other.classList.remove('active'); down = Math.max(0, down - 1); if (downSpan) downSpan.textContent = down; } }
                            } else if (vote === 'down') {
                                if (isActive) { btn.classList.remove('active'); down = Math.max(0, down - 1); if (downSpan) downSpan.textContent = down; }
                                else { btn.classList.add('active'); down = down + 1; if (downSpan) downSpan.textContent = down; const other = wrapper.querySelector('[data-vote="up"]'); if (other && other.classList.contains('active')) { other.classList.remove('active'); up = Math.max(0, up - 1); if (upSpan) upSpan.textContent = up; } }
                            }
                            if (upSpan) { upSpan.classList.add('pop'); setTimeout(()=> upSpan.classList.remove('pop'),180); }
                            if (downSpan) { downSpan.classList.add('pop'); setTimeout(()=> downSpan.classList.remove('pop'),180); }
                        });

                        const showBtn = document.getElementById('show-more-comments');
                        const commentsList = document.getElementById('comments-list');
                        if (showBtn && commentsList) {
                            let remaining = parseInt(showBtn.dataset.remaining || '0', 10) || 0;
                            const batch = 10; // append in tens for large count
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
                                            <div class="mt-2 flex items-center gap-2 text-xs text-gray-500">
                                                <button type="button" class="vote-btn vote-up text-green-600 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="up">▲</button>
                                                <span class="vote-count-up text-green-600">0</span>
                                                <button type="button" class="vote-btn vote-down text-red-500 border rounded-full w-6 h-6 flex items-center justify-center" data-vote="down">▼</button>
                                                <span class="vote-count-down text-red-500">0</span>
                                            </div>
                                        </div>
                                    </div>`;
                                wrapper.style.opacity = '0'; wrapper.style.transform = 'translateY(8px)'; wrapper.style.transition = 'opacity .28s ease, transform .28s ease';
                                return wrapper;
                            }

                            showBtn.addEventListener('click', function(){
                                if (remaining <= 0) return;
                                const toShow = Math.min(batch, remaining);
                                const startIndex = (<?php echo count($comments); ?>) + (<?php echo ($comment_count - count($comments)); ?> - remaining) + 1;
                                for (let i = 0; i < toShow; i++) {
                                    const idx = startIndex + i;
                                    const el = createComment(idx);
                                    commentsList.appendChild(el);
                                    (function(node, delay){ setTimeout(()=>{ node.style.opacity = '1'; node.style.transform = 'translateY(0)'; }, delay); })(el, i * 40);
                                }
                                remaining -= toShow; showBtn.dataset.remaining = String(remaining);
                                if (remaining > 0) showBtn.textContent = `Show ${remaining} More Comments`; else showBtn.style.display = 'none';
                            });
                        }

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

                        function openReplyFor(link) {
                            if (!link) return; const commentWrapper = link.closest('.border-t'); if (!commentWrapper) return; if (commentWrapper.querySelector('.reply-textarea')) return;
                            const form = createReplyForm(); const contentArea = commentWrapper.querySelector('.flex-1') || commentWrapper; contentArea.appendChild(form); const textarea = form.querySelector('.reply-textarea'); textarea.focus(); form.querySelector('.reply-cancel').addEventListener('click', function(){ form.remove(); });
                            function submitReply(){ const text = textarea.value.trim(); if (!text) return; const replyEl = document.createElement('div'); replyEl.className = 'mt-3 reply-new reply-animate'; const nowLabel = 'just now'; const initials = 'Y'; replyEl.innerHTML = `<div class="flex gap-3"><div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold">${initials}</div><div class="flex-1"><div class="text-sm font-semibold">You <span class="text-xs text-gray-500">• ${nowLabel}</span></div><div class="mt-1 text-gray-800">${escapeHtml(text)}</div></div></div>`; contentArea.appendChild(replyEl); requestAnimationFrame(()=>{ replyEl.classList.remove('reply-animate'); replyEl.classList.add('reply-enter'); }); setTimeout(()=>{ replyEl.classList.remove('reply-new','reply-enter'); }, 3200); form.remove(); }
                            form.querySelector('.reply-submit').addEventListener('click', submitReply); textarea.addEventListener('keydown', function(ev){ if (ev.key === 'Enter' && !ev.shiftKey) { ev.preventDefault(); submitReply(); } });
                        }

                        function escapeHtml(str) { return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;'); }

                        commentsEl.addEventListener('click', function(e){
                            let link = null;
                            if (e.target && e.target.closest) { link = e.target.closest('.reply-link'); }
                            if (!link) return; e.preventDefault(); openReplyFor(link);
                        });

                        commentsEl.addEventListener('click', function(e){
                            const submitBtn = e.target.closest && e.target.closest('.reply-submit'); if (!submitBtn) return; e.preventDefault(); const form = submitBtn.closest('.mt-3'); if (!form) return; const textarea = form.querySelector('.reply-textarea'); if (!textarea) return; const text = textarea.value.trim(); if (!text) return; const commentWrapper = submitBtn.closest('.border-t'); const contentArea = (commentWrapper && (commentWrapper.querySelector('.flex-1') || commentWrapper)) || form.parentNode; const replyEl = document.createElement('div'); replyEl.className = 'mt-3 reply-new reply-animate'; const nowLabel = 'just now'; const initials = 'Y'; replyEl.innerHTML = `<div class="flex gap-3"><div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold">${initials}</div><div class="flex-1"><div class="text-sm font-semibold">You <span class="text-xs text-gray-500">• ${nowLabel}</span></div><div class="mt-1 text-gray-800">${escapeHtml(text)}</div></div></div>`; contentArea.appendChild(replyEl); requestAnimationFrame(()=>{ replyEl.classList.remove('reply-animate'); replyEl.classList.add('reply-enter'); }); setTimeout(()=>{ replyEl.classList.remove('reply-new','reply-enter'); }, 3200); form.remove();
                        });
                    });
                })();
                </script>

            </main>
            <aside class="hidden md:block md:col-span-3">
                <div class="sticky top-24">
                    <div class="text-xs text-gray-500 mb-2">ADVERTISEMENT</div>
                    <div class="bg-white p-2 rounded shadow flex justify-center">
                        <img src="/assets/ads.png" alt="Ad" class="w-36 h-auto object-contain" />
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php include __DIR__ . '/../../footer.php'; ?>
