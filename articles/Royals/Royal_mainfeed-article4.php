<?php
// Article: Trump explodes at Zelensky...
$comments = [
    [
        'name' => 'InsightReader',
        'text' => 'If the review helps settle some long-standing issues, then it’s definitely overdue. Hopefully it brings more stability for everyone involved.',
        'time' => '2h'
    ],
    [
        'name' => 'BritObserver',
        'text' => 'Interesting to hear talk of a thaw between Harry and the King. It would be good to see the family move forward after so much tension.',
        'time' => '1h'
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
                    <img src="/assets/Royal_assets/Royal-12.avif" alt="Trump interview" class="w-full rounded-lg object-cover" style="height:360px;" />
                </div>

                <h1 class="text-3xl font-bold text-blue-800 mb-2">Prince Harry believes Home Office review into his taxpayer-funded security is 'long overdue', sources reveal - as experts suggest his relationship with the King is 'thawing'</h1>

                <div class="my-4 border-t border-b border-blue-300 py-2">
                    <div class="text-xl text-gray-600 mb-2 byline">By MARTIN ROBINSON, CHIEF REPORTER</div>
                    <div class="text-xl text-gray-600 mb-0 byline">Published: 09:59 GMT, 9 December 2025 | Updated: 17:39 GMT, 9 December 2025</div>
                </div>

                <p class="text-gray-700 leading-relaxed">Prince Harry is said to be thrilled that the Home Office is reviewing his security in the UK for the first time in five years amid claims his difficult relationship with his father is 'thawing'.

                The Duke of Sussex believes the decision to look again at whether he and his family should receive armed police protection in Britain is 'long overdue', a source close to him has said.

                Harry wrote privately to Home Secretary Shabana Mahmood requesting a full security risk assessment for him, his wife Meghan Markle and their children Archie and Lilibet.
                </p><br>
                The decision will be made by committee in January and could pave the way for Harry to return to the UK with his children for the first time in three years - and see their grandfather - although multiple sources have claimed recently that Meghan would likely stay in the US.

                The King has not spent time with his grandchildren Archie and Lilibet since 2022. 
                <br>

                <p class="text-gray-700 leading-relaxed">A royal source told the Daily Mail: 'This review could be a reflection of improved relations between the monarch and his son', but added the King 'is not directly involved in decisions about security'.

                The insider added: 'There are representatives of the Royal Household on Ravec alongside police and Home Office officials. So it's possible that the courtiers on the committee have influenced the decision to order a review after the slight thawing of relations between the King and Harry'.
                </p><br>


                <figure class="mt-6">
                    <img src="/assets/Royal_assets/Royal-13.avif" alt="Meeting" class="w-full rounded-lg object-cover" />
                    <figcaption class="text-sm text-gray-500 mt-2 my-4 border-t border-b border-black-300 py-2" ><b>Some have claimed that the review could signal a thawing in relations between Harry and his father</b></figcaption>
                </figure>

                <p class="text-gray-700 leading-relaxed mt-4">Harry wrote to Home Secretary Shabana Mahmood shortly after her appointment and submitted a formal request for a risk assessment to the Executive Committee for the Protection of Royalty and Public Figures (Ravec), which is overseen by the Home Office, a source close to the duke said in October.

                    The Home Office has now ordered a threat assessment for the first time since 2020.

                    A senior security source has said that the assessment may not mean a change for Harry.

                    'It’s just a review. It could be that everyone is having a review, which is done periodically to make sure it’s fit for purpose, is properly funded and is resilient enough in the current climate', they said.
                <br><br>
                    'Given the recent court successes for the Home Office, they aren’t going to instigate it themselves, they don’t have to. But it is always under review, ad hoc and on a formalised basis, otherwise “they”, the Home Office, are failing in their duty of care'.

                    Many Britons believe that Prince Harry should be given police protection when he is in the UK – but only if he pays for it himself, according to a poll.

                    Two in five (39 per cent) say that the former working royal should personally fund officers to guard himself and his family if they were to visit from their home in California.

                    However, this is something that the Home Office has previously strongly argued cannot be allowed to happen, because it would effectively make the Metropolitan Police ‘guns for hire’.
                <br><br>
                The survey of 8,022 GB adults, released yesterday, found that 56 per cent think the Harry should receive police protection in some form when he visits the UK. But say he should pay for it himself

                Just 17 per cent said he should be entitled to police protection funded by the state.  28 per cent believe he should not be entitled to taxpayer-funded bodyguards at all.

                The new review comes after the duke lost an appeal in May challenging the dismissal of his High Court claim against the Home Office over the decision of Ravec that he should receive a different degree of taxpayer-funded protection when in the country.
                </p>

                <figure class="mt-6">
                    <img src="/assets/Royal_assets/Royal-14.avif" alt="Meeting" class="w-full rounded-lg object-cover" />
                    <figcaption class="text-sm text-gray-500 mt-2 my-4 border-t border-b border-black-300 py-2" ><b>Any restoration of Harry's round-the-clock armed police protection in Britain could encourage him to bring his children Archie, 6, and Lilibet, 4, (pictured volunteering with their parents during Thanksgiving last month) across the pond to spend some time with their grandfather, King Charles </b></figcaption>
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
