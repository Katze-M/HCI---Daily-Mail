<?php
include __DIR__ . '/../../header.php';
?>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
            <!-- Article main column -->
            <main class="relative md:col-span-9 bg-white rounded shadow p-6">
                <div class="mb-4" style="overflow:hidden; border-radius:8px;">
                    <img src="/assets/US_assets/article1-img1.png" alt="Taylor Swift" class="w-full rounded-lg object-cover" style="height:360px; object-position:50% 18%;" />
                </div>

                <h1 class="text-3xl font-bold text-blue-800 mb-2">Taylor Swift embraces her glamorous era in a $1.7k velvet minidress for sit-down interview with Stephen Colbert</h1>

                <div class="my-4 border-t border-b border-blue-300 py-2">
                    <div class="text-xl text-gray-600 mb-2 byline">By SONIA HORON, US ASSISTANT SHOWBIZ EDITOR and DEIRDRE DURKAN-SIMONDS, US ASSOCIATE SHOWBUSINESS EDITOR</div>
                    <div class="text-xl text-gray-600 mb-0 byline">Published: 05:40 GMT, 11 December 2025 | Updated: 07:10 GMT, 11 December 2025</div>
                </div>

                <p class="text-gray-700 leading-relaxed">Taylor Swift made a glamorous appearance on Wednesday's Late Show with Stephen Colbert.</p>

                <p class="text-gray-700 leading-relaxed mt-4">The Ophelia hitmaker, 35, wowed in a velvet burgundy $1,695 David Koma mini dress with a bardot neckline and structured wing-like off-the-shoulder sleeves.</p>

                <p class="text-gray-700 leading-relaxed mt-4">The singer — who rocked a more laid-back look earlier in the night — rounded out her show girl look with a sparkling necklace and a pair of matching dark red pointed-toe heels.</p>

                <p class="text-gray-700 leading-relaxed mt-4">Her blonde tresses were swept into a chic updo, and she accentuated her features with a dark red lip and cat-eye eyeliner.</p>

                <p class="text-gray-700 leading-relaxed mt-4">The star is busy promoting her upcoming The End of an Era docuseries and The Eras Tour Final Show, which will begin streaming December 12 on Disney+.</p>

                <p class="text-gray-700 leading-relaxed mt-4">During her appearance, the singer covered a wide range of topics, including her Eras Tour, her bond with Stevie Nicks, her penchant for bread, her post-show routine, and her favorite type of audiobooks.</p>

                <p class="text-gray-700 leading-relaxed mt-4">Speaking of her Eras tour, she revealed that not even illness would prevent her from going on stage.</p>

                <blockquote class="border-l-4 pl-4 italic text-gray-700 mt-4">'I make a decision at the beginning of the tour that there is no option to not to go on stage. That's not an option. Even if you have the stomach flu, which I had multiple times during the tour, my goal was to never let them know you have the stomach flu.'</blockquote>

                <p class="text-gray-700 leading-relaxed mt-4">'I think it's also about knowing that there is something bigger than you. And for me, on that tour, the bigger thing was these people have saved up their money, they have rearranged their schedules, they have arranged transportation, they've had parties, they have created costumes, they've made friendship bracelets. I'm doing the show!'</p>

                <p class="text-gray-700 leading-relaxed mt-4">Colbert also inquired how Swift winds down at the end of the night.</p>

                <p class="text-gray-700 leading-relaxed mt-4">She replied: 'After the show, you know that kind of feeling where you are just sort of like a flickering light bulb, like that just happens. It's crazy that these people are being so nice and wonderful and that's hard to go to sleep after.'</p>

                <p class="text-gray-700 leading-relaxed mt-4">'So I will go back to the hotel, you know, get out of the costume. Into the bath immediately, into the bath, mermaid time. And then I get the most amount of room service possible.'</p>

                <p class="text-gray-700 leading-relaxed mt-4">The host asked if she orders french fries, to which she replied, 'Yes, everything, everything I want on that given night.'</p>

                <figure class="mt-6">
                    <img src="/assets/US_assets/article1-img2.png" alt="Taylor Swift backstage" class="w-full rounded-lg object-cover" />
                </figure>

                <p class="text-gray-700 leading-relaxed mt-4">'I'm just like I need to power up for the three and a half hour show. It's the best.'</p>

                <p class="text-gray-700 leading-relaxed mt-4">She said that afterwards she signs 'like two thousand CD's.'</p>

                <p class="text-gray-700 leading-relaxed mt-4">The host also inquired about the biggest difference between Swift's private life 'just walking around' and her public stage persona.</p>

                <p class="text-gray-700 leading-relaxed mt-4">The singer joked of her domestic appearance: 'I've got like an old Victorian nightgown on. I prefer to look like, if you see me in the window I'd like for someone to think they saw a ghost.'</p>

                <?php
                // Sample comments (small set — total reflected in $comment_count)
                $comments = [
                    ['name'=>'Reader1','location'=>'New York','time'=>'2 hours ago','text'=>'Love her look — striking and elegant.','up'=>12,'down'=>0],
                    ['name'=>'ShowFan','location'=>'Los Angeles','time'=>'4 hours ago','text'=>'She always brings the glamour. Great interview.','up'=>8,'down'=>1],
                ];
                $comment_count = 35; // authoritative total shown in feed
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

                            // Voting (delegated)
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

                            // Show more comments
                            const showBtn = document.getElementById('show-more-comments');
                            const commentsList = document.getElementById('comments-list');
                            if (showBtn && commentsList) {
                                let remaining = parseInt(showBtn.dataset.remaining || '0', 10) || 0;
                                const batch = 5;
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
                                        (function(node, delay){ setTimeout(()=>{ node.style.opacity = '1'; node.style.transform = 'translateY(0)'; }, delay); })(el, i * 60);
                                    }
                                    remaining -= toShow; showBtn.dataset.remaining = String(remaining);
                                    if (remaining > 0) showBtn.textContent = `Show ${remaining} More Comments`; else showBtn.style.display = 'none';
                                });
                            }

                            // Reply handling (basic client-side)
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
                                let link = null; if (e.target && e.target.closest) { link = e.target.closest('.reply-link'); } if (!link) return; e.preventDefault(); openReplyFor(link);
                            });

                            // delegated handler for reply-submit
                            commentsEl.addEventListener('click', function(e){ const submitBtn = e.target.closest && e.target.closest('.reply-submit'); if (!submitBtn) return; e.preventDefault(); const form = submitBtn.closest('.mt-3'); if (!form) return; const textarea = form.querySelector('.reply-textarea'); if (!textarea) return; const text = textarea.value.trim(); if (!text) return; const commentWrapper = submitBtn.closest('.border-t'); const contentArea = (commentWrapper && (commentWrapper.querySelector('.flex-1') || commentWrapper)) || form.parentNode; const replyEl = document.createElement('div'); replyEl.className = 'mt-3 reply-new reply-animate'; const nowLabel = 'just now'; const initials = 'Y'; replyEl.innerHTML = `<div class="flex gap-3"><div class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-semibold">${initials}</div><div class="flex-1"><div class="text-sm font-semibold">You <span class="text-xs text-gray-500">• ${nowLabel}</span></div><div class="mt-1 text-gray-800">${escapeHtml(text)}</div></div></div>`; contentArea.appendChild(replyEl); requestAnimationFrame(()=>{ replyEl.classList.remove('reply-animate'); replyEl.classList.add('reply-enter'); }); setTimeout(()=>{ replyEl.classList.remove('reply-new','reply-enter'); }, 3200); form.remove(); });
                        });
                    })();
                    </script>
            </main>

            <!-- Right ad column (reusing same layout as other article pages) -->
            <aside class="md:col-span-3">
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="text-xs text-gray-500">ADVERTISEMENT</div>
                    <div class="mt-3">
                        <img src="/assets/ads.png" alt="Ad" class="w-full object-contain" />
                    </div>
                </div>
            </aside>
        </div>
    </div>

<?php include __DIR__ . '/../../footer.php'; ?>

