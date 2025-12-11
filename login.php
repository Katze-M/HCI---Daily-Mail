<?php
// Server-side login handling: validate email on POST and redirect back to `next` with login_success=1
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email'] ?? '');
  $next = $_POST['next'] ?? $_GET['next'] ?? ($_SERVER['HTTP_REFERER'] ?? '/index.php');
  // Basic server-side validation
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Please enter a valid email address.';
  } else {
    // Build redirect URL and append login_success flag
    $redirect = $next ?: '/index.php';
    // If redirect appears relative, leave it; otherwise use as-is
    $sep = (strpos($redirect, '?') !== false) ? '&' : '?';
    $redirect = $redirect . $sep . 'login_success=1';
    header('Location: ' . $redirect);
    exit;
  }
}

?><!doctype html>
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
    /* Buttons hover effects for login page */
    #login-card button, #login-card a {
      transition: transform .12s ease, box-shadow .12s ease, background-color .12s ease;
      will-change: transform;
    }
    #login-card button:hover, #login-card a:hover { transform: translateY(-3px); box-shadow: 0 10px 26px rgba(2,6,23,0.12); }
    .social-btn { transition: transform .12s ease, box-shadow .12s ease; }
    .social-btn:hover { transform: translateY(-3px); box-shadow: 0 8px 20px rgba(2,6,23,0.08); }
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
      <div id="login-card" class="bg-white rounded-xl shadow-lg overflow-hidden relative z-40">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-center">Sign In or Create an Account</h2>
          <p class="text-center text-gray-600 mt-3">Begin by entering your email address below or use your social sign-in provider</p>

          <?php if (!empty(
            $error
          )): ?>
            <div class="mb-4 px-4 py-2 rounded-md text-sm text-red-700 bg-red-100"><?php echo htmlspecialchars($error); ?></div>
          <?php endif; ?>
          <form id="login-form" action="/login.php" method="post" class="mt-6" novalidate>
            <label class="block text-sm font-medium text-gray-700">Enter email address</label>
            <input id="email-input" name="email" type="email" placeholder="Your email address" required class="mt-2 w-full px-4 py-3 border rounded-md bg-gray-50" />
            <input type="hidden" name="next" value="<?php echo htmlspecialchars($_GET['next'] ?? ($_SERVER['HTTP_REFERER'] ?? '/index.php')); ?>">
            <button id="continue-btn" type="submit" class="mt-4 w-full bg-blue-700 text-white py-3 rounded-lg">Continue</button>
          </form>

          <div class="mt-6 text-center text-sm text-gray-500">— or use —</div>

          <div class="mt-4 flex gap-3 justify-center">
            <!--Social icons as circular buttons-->
            <a href="index.php" aria-label="Sign in with Apple" class="social-btn w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/apple_logo.png" alt="Apple logo" class="w-12 h-12 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with Google" class="social-btn w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/google_logo.png" alt="Google logo" class="w-6 h-6 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with Microsoft" class="social-btn w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/microsoft_logo.png" alt="Microsoft logo" class="w-6 h-6 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with Facebook" class="social-btn w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/facebook_logo.png" alt="Facebook logo" class="w-12 h-12 object-contain" />
            </a>

            <a href="index.php" aria-label="Sign in with X" class="social-btn w-12 h-12 rounded-full border flex items-center justify-center">
              <img src="assets/x_logo.png" alt="X (Twitter) logo" class="w-12 h-12 object-contain" />
            </a>
          </div>

          <div class="mt-6 text-center">
            <div class="text-sm text-gray-700">Got a @hotmail.com or outlook.com account?</div>
            <a href="index.php" id="continue-microsoft" aria-label="Continue with Microsoft" class="social-btn mt-3 inline-flex items-center gap-2 px-4 py-2 border rounded-full">
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
  <!-- No local modal here: login will redirect with a flag so destination page can show success modal -->
  <script>
    (function(){
      // Continue is handled server-side. This client script only
      // enhances social buttons so they return the user to `next`
      // with `login_success=1` appended.
      const loginCard = document.getElementById('login-card');
      const nextInput = document.querySelector('input[name="next"]');
      const nextVal = nextInput ? (nextInput.value || '/') : '/';

      if (!loginCard) return;

      loginCard.addEventListener('click', function(e){
        const social = e.target.closest && e.target.closest('.social-btn');
        if (!social) return;
        e.preventDefault();

        const href = social.getAttribute('href') || nextVal || 'index.php';
        try {
          // Prefer redirecting to the original `next` destination with the flag
          const dest = new URL(nextVal || href, window.location.origin);
          dest.searchParams.set('login_success','1');
          window.location.href = dest.toString();
        } catch (err) {
          try {
            const url = new URL(href, window.location.origin);
            url.searchParams.set('login_success','1');
            window.location.href = url.toString();
          } catch (e) {
            window.location.href = href;
          }
        }
      });
    })();
  </script>
