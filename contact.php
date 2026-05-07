<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MyWebsite | Contact</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/responsive.css"/>
</head>
<body>

  <header>
    <div class="container">
      <div class="logo">
        <img src="images/logo.png" alt="MyWebsite Logo" onerror="this.style.display='none'"/>
        <span>MyWebsite</span>
      </div>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="page-hero">
    <div class="container">
      <h1>Contact Us</h1>
      <p>We'd love to hear from you. Send us a message below.</p>
    </div>
  </section>

  <section class="contact-section">
    <div class="container">
      <div class="contact-grid">

        <div class="contact-info">
          <h2>Get In Touch</h2>
          <div class="info-item">
            <span class="info-icon">📍</span>
            <div>
              <strong>Address</strong>
              <p>123 Main Street, Kohat, KPK, Pakistan</p>
            </div>
          </div>
          <div class="info-item">
            <span class="info-icon">📧</span>
            <div>
              <strong>Email</strong>
              <p>info@mywebsite.com</p>
            </div>
          </div>
          <div class="info-item">
            <span class="info-icon">📞</span>
            <div>
              <strong>Phone</strong>
              <p>+92 300 1234567</p>
            </div>
          </div>
        </div>

        <div class="contact-form-wrap">
          <?php
          $success = '';
          $error   = '';

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
            $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
            $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
            $message = htmlspecialchars(trim($_POST['message'] ?? ''));

            if (empty($name) || empty($email) || empty($message)) {
              $error = 'Please fill in all required fields.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $error = 'Please enter a valid email address.';
            } else {
              $to      = 'info@mywebsite.com';
              $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
              $body    = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

              if (mail($to, $subject ?: 'New Contact Form Message', $body, $headers)) {
                $success = 'Thank you! Your message has been sent successfully.';
              } else {
                $error = 'Sorry, there was an error sending your message. Please try again.';
              }
            }
          }
          ?>

          <?php if ($success): ?>
            <div class="alert alert-success"><?= $success ?></div>
          <?php endif; ?>
          <?php if ($error): ?>
            <div class="alert alert-error"><?= $error ?></div>
          <?php endif; ?>

          <form method="POST" action="contact.php" id="contactForm">
            <div class="form-group">
              <label for="name">Full Name <span class="required">*</span></label>
              <input type="text" id="name" name="name" placeholder="Your full name" required
                     value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"/>
            </div>
            <div class="form-group">
              <label for="email">Email Address <span class="required">*</span></label>
              <input type="email" id="email" name="email" placeholder="you@example.com" required
                     value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"/>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Message subject"
                     value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>"/>
            </div>
            <div class="form-group">
              <label for="message">Message <span class="required">*</span></label>
              <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="btn btn-full">Send Message</button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2026 MyWebsite. All rights reserved.</p>
    </div>
  </footer>

  <script src="js/main.js"></script>
  <script src="js/utils.js"></script>
</body>
</html>
