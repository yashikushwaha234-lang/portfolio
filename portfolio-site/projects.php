<?php
$pageTitle = 'Projects | Portfolio';
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/nav.php';
$projects = getPortfolioProjects();
?>
<main class="page page-projects container">
  <section class="section">
    <h1>Portfolio Projects</h1>
    <p>A Responsive Student Managment Portal Developed Using PHP and MySQL that allows efficient student record managmaent,authentication and database operation through a clean user interface.
      
    </p>
    <div class="project-grid">
      <?php foreach ($projects as $project): ?>
        <article class="project-card">
          <h2><?php echo htmlspecialchars($project['title']); ?></h2>
          <p><?php echo htmlspecialchars($project['description']); ?></p>
          <p><strong>Technologies:</strong><?php echo htmlspecialchars($project['tech']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
