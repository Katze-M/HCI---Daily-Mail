<?php
// All podcasts (example data)
$allPodcasts = [
    // Crime (7 total)
    ["title" => "Cold Case Files", "image" => "assets/podcasts/cold.jpg", "description"=>"Unsolved mysteries from around the world.", "category"=>"Crime"],
    ["title" => "The Trial+", "image" => "assets/podcasts/trial.jpg", "description"=>"Deep dives into landmark trials.", "category"=>"Crime"],
    ["title" => "Crime Desk Weekly", "image" => "assets/podcasts/crime.jpg", "description"=>"Weekly roundup of top crime stories.", "category"=>"Crime"],
    ["title" => "Under the Radar", "image" => "assets/podcasts/radar.jpg", "description"=>"Investigating crimes that slipped under the media radar.", "category"=>"Crime"],
    ["title" => "Justice Served", "image" => "assets/podcasts/justice.jpg", "description"=>"Stories of courtroom victories and legal battles.", "category"=>"Crime"],
    ["title" => "Mystery Hour", "image" => "assets/podcasts/mystery.jpg", "description"=>"Exploring mysterious cases and unexplained events.", "category"=>"Crime"],
    ["title" => "Detective Diaries", "image" => "assets/podcasts/detective.jpg", "description"=>"Insights from seasoned detectives on real cases.", "category"=>"Crime"],

    // Politics (5 total)
    ["title" => "World View", "image" => "assets/podcasts/world.jpg", "description"=>"Global news and analysis.", "category"=>"Politics"],
    ["title" => "Inside Politics", "image" => "assets/podcasts/politics.jpg", "description"=>"Latest political developments.", "category"=>"Politics"],
    ["title" => "Daily Briefing", "image" => "assets/podcasts/brief.jpg", "description"=>"Quick daily news updates.", "category"=>"Politics"],
    ["title" => "Policy Matters", "image" => "assets/podcasts/policy.jpg", "description"=>"Breaking down government policies and legislation.", "category"=>"Politics"],
    ["title" => "Election Watch", "image" => "assets/podcasts/election.jpg", "description"=>"Coverage of upcoming elections and political campaigns.", "category"=>"Politics"],

    // Lifestyle (4 total)
    ["title" => "Daily Living Tips", "image" => "assets/podcasts/dailytips.jpg", "description"=>"Simple tips for everyday life.", "category"=>"Lifestyle"],
    ["title" => "Wellness Talks", "image" => "assets/podcasts/wellness.jpg", "description"=>"Health and wellness guidance.", "category"=>"Lifestyle"],
    ["title" => "Home & Style", "image" => "assets/podcasts/home.jpg", "description"=>"Decor, organization, and lifestyle hacks.", "category"=>"Lifestyle"],
    ["title" => "Mindful Moments", "image" => "assets/podcasts/mindful.jpg", "description"=>"Tips for mindfulness and personal growth.", "category"=>"Lifestyle"],

    // Tech (3 total)
    ["title" => "Future Now", "image" => "assets/podcasts/future.jpg", "description"=>"Exploring technology and innovation.", "category"=>"Tech"],
    ["title" => "AI Weekly", "image" => "assets/podcasts/ai.jpg", "description"=>"Artificial intelligence news and trends.", "category"=>"Tech"],
    ["title" => "Gadget Guide", "image" => "assets/podcasts/gadget.jpg", "description"=>"Latest gadgets, apps, and tech reviews.", "category"=>"Tech"],
];

// Select 1 best podcast per category for “Don't Miss”
$categories = ["Crime","Politics","Lifestyle","Tech"];
$dontMiss = [];
foreach($categories as $cat){
    foreach($allPodcasts as $pod){
        if($pod['category'] === $cat){  
            $dontMiss[] = $pod;
            break;
        }
    }
}

// Group by category
$groupedPodcasts = [];
foreach($allPodcasts as $pod){
    $groupedPodcasts[$pod['category']][] = $pod;
}

function jattr($data){
    return htmlspecialchars(json_encode($data, JSON_HEX_APOS|JSON_HEX_QUOT), ENT_QUOTES, 'UTF-8');
}
?>
<?php include __DIR__ . '/header.php'; ?>

<!-- FILTER BUTTONS (page-specific, placed inside shared main) -->
<div class="max-w-6xl mx-auto mt-6 px-4 flex gap-3 flex-wrap">
<?php $filters = ["All","Crime","Politics","Lifestyle","Tech"]; ?>
<?php foreach($filters as $f): ?>
  <button onclick="filterCategory('<?= $f ?>')" class="filter-btn px-4 py-1 bg-white border border-blue-300 text-blue-700 rounded hover:bg-blue-100">
    <?= $f ?>
  </button>
<?php endforeach; ?>
</div>

<!-- MAIN LAYOUT -->
<div class="max-w-6xl mx-auto mt-6 px-4 grid grid-cols-1 lg:grid-cols-4 gap-8">

<!-- LEFT (3 columns) -->
<section class="lg:col-span-3 space-y-10">

  <!-- Banner -->
  <div class="w-full h-40 rounded-xl overflow-hidden">
  <img src="assets/podcasts/banner.jpg" class="w-full h-full object-cover" alt="Podcast Banner">
</div>


  <!-- DON'T MISS SECTION -->
  <div class="podcast-section" data-category="DontMiss">
    <h2 class="text-2xl font-bold text-[#0C2D78] mb-3">Don't Miss</h2>

    <div class="relative">
      <div id="dontmiss-row" class="scroll-row flex gap-4 pb-4 pl-8 pr-8">
      <?php foreach($dontMiss as $pod): ?>
        <article onclick='openDetailsModal(<?= jattr($pod) ?>)' class="w-48 min-w-[12rem] bg-white rounded-xl shadow cursor-pointer">
          <div class="h-40 overflow-hidden rounded-t-xl">
            <img src="<?= $pod['image'] ?>" class="w-full h-full object-cover" alt="<?= htmlspecialchars($pod['title']) ?>">
          </div>
          <div class="p-3">
            <h3 class="font-semibold text-gray-800 text-sm"><?= htmlspecialchars($pod['title']) ?></h3>
            <p class="text-gray-600 text-xs mt-1 line-clamp-2"><?= htmlspecialchars($pod['description']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- CATEGORY SLIDERS -->
  <?php foreach($groupedPodcasts as $cat => $pods): ?>
  <div class="podcast-section" data-category="<?= $cat ?>">
    <h2 class="text-2xl font-bold text-[#0C2D78] mb-3"><?= $cat ?></h2>

    <div class="relative">
      <div id="row-<?= strtolower($cat) ?>" class="scroll-row flex gap-4 pb-4 pl-8 pr-8">
        <?php foreach($pods as $pod): ?>
        <article onclick='openDetailsModal(<?= jattr($pod) ?>)' class="w-48 min-w-[12rem] bg-white rounded-xl shadow cursor-pointer">
          <div class="h-40 rounded-t-xl overflow-hidden">
            <img src="<?= $pod['image'] ?>" class="w-full h-full object-cover" alt="<?= htmlspecialchars($pod['title']) ?>">
          </div>
          <div class="p-3">
            <h3 class="font-semibold text-gray-800 text-sm"><?= htmlspecialchars($pod['title']) ?></h3>
            <p class="text-gray-600 text-xs mt-1 line-clamp-2"><?= htmlspecialchars($pod['description']) ?></p>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>

</section>

<!-- SIDEBAR -->
<aside class="hidden lg:block lg:self-start relative">
 <div id="sidebarAd" class="bg-white p-4 rounded-xl shadow lg:sticky lg:top-24 mx-auto">
  <h3 class="text-lg font-bold text-[#0C2D78] mb-4">Advertisement</h3>
  <div class="h-[600px] rounded-xl overflow-hidden">
    <img src="assets/ads.png" class="w-full h-full object-cover" alt="Advertisement">
  </div>
</div>

</aside>

</main>

<!-- DETAILS MODAL -->
<div id="detailsModal" class="hidden fixed inset-0 modal-bg flex items-center justify-center z-50">
  <div class="bg-white w-96 rounded-xl overflow-hidden shadow-lg">
    <img id="modalImage" class="w-full h-48 object-cover" alt="">
    <div class="p-5">
      <h2 id="modalTitle" class="text-2xl font-bold text-[#0C2D78] mb-2"></h2>
      <p id="modalDescription" class="text-gray-700 mb-4"></p>
      <button onclick="openRegisterModal()" class="bg-[#0C2D78] w-full text-white py-2 rounded-md mb-2">Listen Now</button>
      <button onclick="closeDetailsModal()" class="bg-gray-300 w-full py-2 rounded-md">Close</button>
    </div>
  </div>
</div>

<!-- REGISTER MODAL -->
<div id="registerModal" class="hidden fixed inset-0 modal-bg flex items-center justify-center z-50">
  <div class="bg-white w-80 p-6 rounded-xl text-center">
    <h2 class="text-xl font-bold text-[#0C2D78] mb-3">Register Required</h2>
    <p class="text-gray-700 mb-4">You must register before accessing podcast episodes.</p>
    <div class="flex gap-3 justify-center">
      <button onclick="location.href='/login.php'" class="bg-[#0C2D78] text-white px-4 py-2 rounded-md">Register</button>
      <button onclick="closeRegisterModal()" class="bg-gray-300 px-4 py-2 rounded-md">Close</button>
    </div>
  </div>
</div>

<script>
// MODALS
function openDetailsModal(p){
  document.getElementById('modalTitle').innerText = p.title;
  document.getElementById('modalDescription').innerText = p.description;
  document.getElementById('modalImage').src = p.image;
  document.getElementById('detailsModal').classList.remove('hidden');
}
function closeDetailsModal(){ document.getElementById('detailsModal').classList.add('hidden'); }
function openRegisterModal(){ document.getElementById('registerModal').classList.remove('hidden'); }
function closeRegisterModal(){ document.getElementById('registerModal').classList.add('hidden'); }

// FIXED FILTER LOGIC
function filterCategory(cat){
  const sections = document.querySelectorAll(".podcast-section");
  const realCategories = ["Crime","Politics","Lifestyle","Tech"];

  // Show all sections
  if(cat === "All"){
    sections.forEach(sec => {
      sec.style.display = "block";
      /* This avoids accidentally selecting the surrounding wrapper and
         ensures we target the element that holds the podcast cards. */
      const row = sec.querySelector('#dontmiss-row, [id^="row-"]');
      if(row){
        // remove any grid-specific classes that may have been added
        row.classList.remove(
          "grid","grid-cols-1","sm:grid-cols-2",
          "md:grid-cols-3","lg:grid-cols-4","gap-6"
        );
        // ensure horizontal scroll mode (flex + scroll-row)
        row.classList.add("flex","scroll-row","gap-4");
        // make sure horizontal scrolling is enabled and vertical overflow hidden
        row.style.overflowX = "auto";
        row.style.overflowY = "hidden";
        // reset any inline grid-specific sizing that may remain
        row.style.gridTemplateColumns = '';
        row.scrollLeft = 0;
        // Restore the card sizing used for horizontal scroller so items keep
        // their intended width and spacing (prevents them squashing together).
        const cards = row.querySelectorAll('article');
        cards.forEach(c => {
          c.classList.remove('w-full');
          if (!c.classList.contains('w-48')) c.classList.add('w-48');
          if (!c.classList.contains('min-w-[12rem]')) c.classList.add('min-w-[12rem]');
        });
      }
    });
    return;
  }

  // CATEGORY MODE
  sections.forEach(sec => {
    const sectionCat = sec.getAttribute("data-category");

    // Hide Don't Miss when viewing a specific category
    if(sectionCat === "DontMiss"){
      sec.style.display = "none";
      return;
    }

    // Show only selected category
    if(sectionCat === cat){
      sec.style.display = "block";

      // Use the same robust selector when switching a single category into
      // grid mode so we reliably target the card container.
      const row = sec.querySelector('#dontmiss-row, [id^="row-"]');
      if(row){
        // Use a grid layout for this category so items wrap into rows
        row.classList.remove("flex");
        row.classList.remove("scroll-row");
        row.classList.add(
          "grid","grid-cols-1","sm:grid-cols-2",
          "md:grid-cols-3","lg:grid-cols-4","gap-6"
        );
        // ensure no horizontal scroll is present for the grid view
        row.style.overflowX = "visible";
        row.style.overflowY = "visible";
        row.scrollLeft = 0;
        /* In grid mode make each card take full width of its grid cell so the
           grid can manage column sizing and gaps (prevents forced fixed widths
           from overflowing or compressing the layout).*/
        const cards = row.querySelectorAll('article');
        cards.forEach(c => {
          c.classList.remove('w-48');
          c.classList.remove('min-w-[12rem]');
          if (!c.classList.contains('w-full')) c.classList.add('w-full');
        });
      }
    }
    else{
      sec.style.display = "none";
    }
  });
}
</script>

<script>
// Ensure the page starts in the horizontal "All" mode on first load so each category shows a horizontal scroller and doesn't overflow to the page edge.
document.addEventListener('DOMContentLoaded', function(){
  try { filterCategory('All'); } catch (e) { /* ignore if function not available */ }
});
</script>

<?php include __DIR__ . '/footer.php'; ?>
