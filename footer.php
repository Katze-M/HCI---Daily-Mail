    </main>

    <footer class="bg-white border-t mt-8">
        <!--The developers do not claim ownership on any articles presented-->
        <div class="max-w-6xl mx-auto px-4 py-6 text-sm text-gray-600 flex items-center justify-between gap-4">
            <div>© Daily Mail - United Kingdom Online Tabloid Newspaper. Contact at <a href="mailto:tips@dailymail.com" class="text-blue-700 hover:underline">tips@dailymail.com</a></div>
            <div class="flex items-center gap-4">
                <a href="login.php?next=/terms.php" class="text-gray-700 hover:underline">Terms of Use</a>
                <nav class="flex items-center gap-2" aria-label="Social links">
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="p-1 rounded hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 12a10 10 0 10-11.5 9.9v-7h-2.2v-2.9h2.2V9.4c0-2.2 1.3-3.4 3.3-3.4.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.5h2.3l-.4 2.9h-1.9v7A10 10 0 0022 12z"/></svg>
                    </a>
                    <a href="https://x.com" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)" class="p-1 rounded hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.26 4.26 0 001.88-2.35 8.48 8.48 0 01-2.7 1.03 4.24 4.24 0 00-7.22 3.87A12.03 12.03 0 013 4.79a4.24 4.24 0 001.31 5.66 4.2 4.2 0 01-1.92-.53v.05a4.24 4.24 0 003.4 4.16 4.28 4.28 0 01-1.91.07 4.25 4.25 0 003.96 2.95A8.5 8.5 0 012 19.54a12 12 0 006.49 1.9c7.79 0 12.06-6.45 12.06-12.05l-.01-.55A8.6 8.6 0 0024 6.56a8.4 8.4 0 01-2.42.66z"/></svg>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="p-1 rounded hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-pink-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 5.5a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm6.5-.9a1.1 1.1 0 11-2.2 0 1.1 1.1 0 012.2 0zM12 9.5a2.5 2.5 0 110 5 2.5 2.5 0 010-5z"/></svg>
                    </a>
                </nav>
            </div>
        </div>
    </footer>

    <script>
        // Function to update the current date and time
        function updateDateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
            const dateString = now.toLocaleDateString('en-US', options);
            const timeString = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });
                
            const dateTimeString = `${dateString} at ${timeString}`;
                
            const dateElement = document.getElementById('current-date');
            if (dateElement) {
                dateElement.textContent = dateTimeString;
            }
        }
    
        // Update the date immediately on page load
        updateDateTime();
    
        // Update the date every minute
        setInterval(updateDateTime, 60000);
    
        // Small JS to show interaction: focus search input on load
        document.addEventListener('DOMContentLoaded', function(){
            const s = document.getElementById('search');
            if(s) s.addEventListener('focus', ()=> console.log('Search focused'));
        });
    </script>
</body>
</html>
