<?php
$cat_name = "Skin Care";
$cat_slug = "skin-care";
$page_title = "$cat_name | Paris Wellness Institute Blog";
$meta_desc  = "Read all Skin Care posts from Paris Wellness Institute.";
$root = '../';
include '../header.php';
$posts = [
  ['slug'=>'facial-treatments','title'=>'Facial Treatments','cat'=>'Skin Care','date'=>'March 10, 2026','read'=>'5 min','excerpt'=>'Your skin deserves expert care. From deep-cleansing facials to advanced laser treatments, our facial solutions target acne, pigmentation, fine lines, dullness, and more.','img'=>'https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=600&h=440&fit=crop'],
];
?>
<section class="search-header">
  <div class="container">
    <nav class="breadcrumb rv"><a href="../index.php" title="Back to Home">Home</a><span>›</span><a href="../blog.php" title="Back to Blog">Blog</a><span>›</span><span><?= $cat_name ?></span></nav>
    <span class="cat-hero-label">Category</span>
    <h1 class="rv" style="font-family:var(--fd);font-size:clamp(2rem,4vw,3rem);color:var(--dark);margin-top:8px"><em style="font-style:italic;color:var(--gold-d)"><?= $cat_name ?></em> Posts</h1>
  </div>
</section>
<section style="padding:60px 0 90px;background:var(--white)">
  <div class="container">
    <div class="blog-layout">
      <div>
        <p class="search-count"><?= count($posts) ?> post<?= count($posts)!==1?'s':'' ?> in <?= $cat_name ?></p>
        <?php foreach($posts as $i => $p): ?>
        <article class="bpc rv" style="--d:<?= $i*.06 ?>s">
          <div class="bpc-img"><img src="<?= $p['img'] ?>" alt="<?= $p['title'] ?>" loading="lazy"><span class="bpc-cat"><?= $p['cat'] ?></span></div>
          <div class="bpc-body">
            <div class="bpc-meta"><span><?= $p['date'] ?></span><span>·</span><span><?= $p['read'] ?> read</span></div>
            <h2><a href="../blog/<?= $p['slug'] ?>.php" title="Read: <?= $p['title'] ?>"><?= $p['title'] ?></a></h2>
            <p><?= $p['excerpt'] ?></p>
            <a href="../blog/<?= $p['slug'] ?>.php" class="bpc-read" title="Read: <?= $p['title'] ?>">Read More <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
      <aside class="blog-sidebar">
        <div class="sw"><h3>Search</h3>
          <form class="sw-search" action="../blog/search.php" method="GET">
            <input type="text" name="q" placeholder="Search posts...">
            <button type="submit"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></button>
          </form>
        </div>
        <div class="sw"><h3>Categories</h3>
          <ul class="sw-cats">
            <li><a href="skin-care.php" class="active-cat" title="Read Skin Care Articles">Skin Care <span class="cat-pill">1</span></a></li>
            <li><a href="hair-care.php" title="Read Hair Care Articles">Hair Care <span class="cat-pill">1</span></a></li>
            <li><a href="body-wellness.php" title="Read Body Wellness Articles">Body Wellness <span class="cat-pill">1</span></a></li>
          </ul>
        </div>
        <div class="sw sw-cta-box"><h3>Book a Consultation</h3><p>Start your wellness journey today.</p>
          <button class="open-popup" style="width:100%;justify-content:center;display:flex;padding:11px;border-radius:999px;font-weight:600;cursor:pointer;background:rgba(255,255,255,.2);color:#fff;border:1px solid rgba(255,255,255,.3)">Book Now</button>
        </div>
      </aside>
    </div>
  </div>
</section>
<?php include '../footer.php'; ?>
<script src="../main.js"></script>
</body></html>
