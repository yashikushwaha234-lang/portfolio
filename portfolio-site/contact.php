<?php
$pageTitle = 'Contact | Portfolio';
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/nav.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = handleContactForm($_POST);
    $message = $result['message'];
}
?>
<main class="page page-contact container">
  <section class="section">
    <h1>Contact Me</h1>
    <p>Get in touch for a project inquiry, freelance request, or general question.</p>
    <?php if ($message): ?>
      <div class="form-message"><?php echo htmlspecialchars($message); ?></div>
    <?php endif; ?>
    <form class="contact-form" method="post" action="contact.php">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" required>

      <label for="email">Email</label>
      <input id="email" name="email" type="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="6" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
