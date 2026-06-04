<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Portfolio';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="styles/main.css">
  <link rel="stylesheet" href="styles/responsive.css">
</head>
<body>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="index.php">My Portfolio</a>
    <button class="menu-toggle" id="menuToggle">Menu</button>
  </div>
</header>
