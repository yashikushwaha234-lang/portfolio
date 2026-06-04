<?php
$pageTitle = 'Home | Portfolio';
include 'includes/header.php';
include 'includes/nav.php';
?>
<main class="page page-home">
  <section class="hero">
    <div class="container">
      <h1>Hello, I Yashi Kushwaha </h1>
      <p>Creative web developer building modern portfolio experiences with HTML, CSS, and PHP.</p>
      <a class="button" href="projects.php">View Projects</a>
    </div>
  </section>

  <section class="section intro container">
    <h2>About My Work</h2>
    <p>I design responsive websites and custom PHP templates that are clean, fast, and easy to maintain.</p>
    <div class="feature-grid">
      <article>
        <h3>Design</h3>
        <p>Interface design and layout planning for strong visual hierarchy.</p>
      </article>
      <article>
        <h3>Development</h3>
        <p>HTML, CSS, and PHP built for reliability and modular reuse.</p>
      </article>
      <article>
        <h3>Performance</h3>
        <p>Fast-loading pages and responsive behavior across devices.</p>
      </article>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
