<?php
// Set proper headers
header('Content-Type: text/html; charset=UTF-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

// Page variables (you can modify these as needed)
$page_title = "Privacy Policy - MyCPA";
$app_name = "MyCPA";
$website_url = "https://meta.mycpa.uz";
$privacy_url = "https://meta.mycpa.uz/privacy-policy.php";
$delete_data_url = "https://meta.mycpa.uz/delete-data.php";
$contact_email = "metaads@mgoods.uz";
$effective_date = "June 1, 2025";
$current_year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <!-- Complete Open Graph meta tags (REQUIRED for Facebook) -->
  <meta property="og:title" content="<?php echo htmlspecialchars($app_name); ?> - Privacy Policy">
  <meta property="og:description" content="Privacy Policy for <?php echo htmlspecialchars($app_name); ?> app. We value your privacy and are committed to protecting your personal data when you use our application.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($privacy_url); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($app_name); ?>">
  <meta property="og:locale" content="en_US">
  
  <!-- Optional but highly recommended for better sharing -->
  <meta property="og:image" content="<?php echo htmlspecialchars($website_url); ?>/images/mycpa-logo-og.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo htmlspecialchars($app_name); ?> Privacy Policy">
  
  <!-- Twitter Card tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($app_name); ?> - Privacy Policy">
  <meta name="twitter:description" content="Privacy Policy for <?php echo htmlspecialchars($app_name); ?> app. We value your privacy and are committed to protecting your personal data.">
  
  <!-- Standard meta tags -->
  <meta name="description" content="Privacy Policy for <?php echo htmlspecialchars($app_name); ?> app. We value your privacy and are committed to protecting your personal data when you use our application.">
  
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
    <h1>🔒 Privacy Policy</h1>
    <p><strong>Effective Date:</strong> <?php echo htmlspecialchars($effective_date); ?></p>
    <p><strong>App Name:</strong> <?php echo htmlspecialchars($app_name); ?></p>
    <p><strong>Website:</strong> <a href="<?php echo htmlspecialchars($website_url); ?>" target="_blank"><?php echo htmlspecialchars($website_url); ?></a></p>

    <h2>1. Introduction</h2>
    <p>We value your privacy and are committed to protecting your personal data. This Privacy Policy describes how we collect, use, store, and protect your information when you use our application or services.</p>

    <h2>2. What Information We Collect</h2>
    <ul>
      <li><strong>Basic profile data</strong> (name, email address, profile picture, etc.)</li>
      <li><strong>Facebook public information</strong> (only if you grant us access)</li>
      <li><strong>Device and technical information</strong> (IP address, browser type, operating system)</li>
    </ul>
    <p>We only collect information necessary to provide and improve our services.</p>

    <h2>3. How We Use Your Information</h2>
    <ul>
      <li>Authenticate your account via Facebook</li>
      <li>Manage and personalize your experience</li>
      <li>Respond to support requests</li>
      <li>Improve and secure our application</li>
    </ul>
    <p>We do <strong>not</strong> sell or share your personal data with third parties for marketing purposes.</p>

    <h2>4. How We Store and Protect Your Information</h2>
    <p>All personal data is stored securely using encryption and access controls. We implement industry-standard security measures to prevent unauthorized access, disclosure, or destruction of your data.</p>

    <h2>5. Data Retention</h2>
    <p>We retain your personal information only as long as necessary for legitimate business purposes, or as required by law. You may request deletion of your data at any time.</p>

    <h2>6. Your Rights</h2>
    <ul>
      <li>Access your personal data</li>
      <li>Correct or update inaccurate information</li>
      <li>Request deletion of your data</li>
      <li>Withdraw consent</li>
    </ul>
    <p>To make a request, please email us at <a href="mailto:<?php echo htmlspecialchars($contact_email); ?>"><?php echo htmlspecialchars($contact_email); ?></a> or visit: <a href="<?php echo htmlspecialchars($delete_data_url); ?>" target="_blank"><?php echo htmlspecialchars($delete_data_url); ?></a></p>

    <h2>7. Third-Party Services</h2>
    <p>Our application may interact with Facebook APIs or other third-party services. We only access data you explicitly allow and do not store unnecessary or sensitive information.</p>

    <h2>8. Children's Privacy</h2>
    <p>We do not knowingly collect personal data from children under the age of 13. If you believe a child has provided us with information, please contact us immediately.</p>

    <h2>9. Contact Us</h2>
    <p>If you have questions or concerns about this Privacy Policy, please contact:</p>
    <p><strong>Support Team</strong><br>
    📧 <a href="mailto:<?php echo htmlspecialchars($contact_email); ?>"><?php echo htmlspecialchars($contact_email); ?></a><br>
    🌐 <a href="<?php echo htmlspecialchars($privacy_url); ?>" target="_blank"><?php echo htmlspecialchars($privacy_url); ?></a></p>

    <div class="footer">© <?php echo $current_year; ?> <?php echo htmlspecialchars($app_name); ?>. All rights reserved.</div>
  </div>
</body>
</html>