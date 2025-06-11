<?php
// Set proper headers
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

// Page variables (adjusted for Terms of Service)
$page_title = "Terms of Service - MyCPA";
$app_name = "MyCPA";
$website_url = "https://meta.mycpa.uz";
$terms_url = "https://meta.mycpa.uz/terms-of-service.php";
$contact_email = "metaads@mgoods.uz";
$effective_date = "June 1, 2025";
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- Open Graph meta tags -->
  <meta property="og:title" content="<?php echo htmlspecialchars($app_name); ?> - Terms of Service">
  <meta property="og:description" content="Terms of Service for <?php echo htmlspecialchars($app_name); ?> app. Review the rules and obligations for using our application.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($terms_url); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($app_name); ?>">
  <meta property="og:locale" content="en_US">
  <meta property="og:image" content="<?php echo htmlspecialchars($website_url); ?>/images/mycpa-logo-og.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($app_name); ?> Terms of Service">

  <!-- Twitter Card tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($app_name); ?> - Terms of Service">
  <meta name="twitter:description" content="Terms of Service for <?php echo htmlspecialchars($app_name); ?> app. Review your rights and responsibilities.">

  <!-- Standard meta tags -->
  <meta name="description" content="Terms of Service for <?php echo htmlspecialchars($app_name); ?>. Know the terms and conditions under which you use our services.">

  <title><?php echo htmlspecialchars($page_title); ?></title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      padding: 40px 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      border-radius: 10px;
    }
    h1 {
      font-size: 28px;
      color: #2b4c77;
      margin-bottom: 10px;
    }
    h2 {
      font-size: 20px;
      color: #1d3557;
      margin-top: 30px;
    }
    p, li {
      line-height: 1.7;
      font-size: 16px;
    }
    ul {
      padding-left: 20px;
    }
    a {
      color: #0077cc;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .footer {
      margin-top: 50px;
      font-size: 14px;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📄 Terms of Service</h1>
    <p><strong>Effective Date:</strong> <?php echo htmlspecialchars($effective_date); ?></p>
    <p><strong>App Name:</strong> <?php echo htmlspecialchars($app_name); ?></p>
    <p><strong>Website:</strong> <a href="<?php echo htmlspecialchars($website_url); ?>" target="_blank"><?php echo htmlspecialchars($website_url); ?></a></p>

    <h2>1. Acceptance of Terms</h2>
    <p>By accessing or using <?php echo htmlspecialchars($app_name); ?>, you agree to comply with and be bound by these Terms of Service.</p>

    <h2>2. Use of the Service</h2>
    <p>You agree to use our application and services only for lawful purposes and in accordance with these terms.</p>

    <h2>3. User Responsibilities</h2>
    <ul>
      <li>Provide accurate and up-to-date information</li>
      <li>Keep your account credentials secure</li>
      <li>Do not misuse or attempt to harm the service</li>
    </ul>

    <h2>4. Intellectual Property</h2>
    <p>All content, features, and functionality in the app are the exclusive property of <?php echo htmlspecialchars($app_name); ?> and are protected by applicable laws.</p>

    <h2>5. Termination</h2>
    <p>We reserve the right to terminate or suspend access to our service immediately, without prior notice or liability, for any reason.</p>

    <h2>6. Limitation of Liability</h2>
    <p>In no event shall <?php echo htmlspecialchars($app_name); ?> be liable for any indirect, incidental, special, or consequential damages.</p>

    <h2>7. Changes to Terms</h2>
    <p>We reserve the right to modify these Terms of Service at any time. Any changes will be effective immediately upon posting.</p>

    <h2>8. Contact Us</h2>
    <p>If you have any questions about these Terms of Service, please contact us at:</p>
    <p><strong>Support Team</strong><br>
    📧 <a href="mailto:<?php echo htmlspecialchars($contact_email); ?>"><?php echo htmlspecialchars($contact_email); ?></a><br>
    🌐 <a href="<?php echo htmlspecialchars($terms_url); ?>" target="_blank"><?php echo htmlspecialchars($terms_url); ?></a></p>

    <div class="footer">© <?php echo $current_year; ?> <?php echo htmlspecialchars($app_name); ?>. All rights reserved.</div>
  </div>
</body>
</html>