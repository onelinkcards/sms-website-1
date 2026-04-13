<?php
require_once __DIR__ . '/config.php';
$sms_home_enter_reveal = !empty($sms_home_enter_reveal);
$sms_home_soft_enter = !empty($sms_home_soft_enter);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang ?? 'zxx'); ?>" 
dir="<?= htmlspecialchars($dir ?? 'ltr'); ?>">
<head>
    <?php include_once 'partials/style.php'; ?>
</head>
<body class="<?= htmlspecialchars($body_class ?? ''); ?>">
    <?php if (!empty($sms_home_enter_reveal)) : ?>
    <?php include __DIR__ . '/partials/components/sms-home-enter-curtain.php'; ?>
    <?php endif; ?>
    <?php
    if (defined('SMS_SHOW_DEMO_BANNER') && SMS_SHOW_DEMO_BANNER) {
        include __DIR__ . '/partials/components/sms-demo-banner.php';
    }
    ?>
    <?php
     if (!empty($content)) {
          echo $content;
     }
    ?>
    <?php include 'partials/scripts.php'; ?>
</body>
</html>

