    </main>

    <footer class="bg-white border-t mt-8">
        <div class="max-w-6xl mx-auto px-4 py-6 text-sm text-gray-600">© Placeholder Daily Mail - This is the Home page. Contact at <a href="mailto:tips@dailymail.com" class="text-blue-700 hover:underline">tips@dailymail.com</a></div>
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
