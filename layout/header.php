<?php

global $ssg;

$processed_meta = $ssg->layout->GetProcessedPageMeta();

?>
<!-- Built with Ata's SSG https://www.github.com/atas/ssg -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport"
        content="minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, user-scalable=no" />
    <meta name="theme-color" content="#000000" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta name="description" content="<?= $processed_meta->desc ?>" />

    <meta property="og:url" content="<?= $ssg->getCurrentFullUrl() ?>" />
    <meta property="og:type" content="<?= $processed_meta->type ?>" />
    <meta property="og:title" content="<?= $processed_meta->title ?>" />
    <meta property="og:description" content="<?= $processed_meta->desc ?>" />
    <?php
    if (isset($processed_meta->og_image))
        echo "<meta property=\"og:image\" content=\"$processed_meta->og_image\"/>\n";
    if (isset($processed_meta->og_image_width))
        echo "<meta property=\"og:image:width\" content=\"$processed_meta->og_image_width\"/>\n";
    if (isset($processed_meta->og_image_height))
        echo "<meta property=\"og:image:height\" content=\"$processed_meta->og_image_height\"/>\n";
    ?>
    <title><?= $processed_meta->title ?></title>
    <?php
    if ($ssg->isBuildRunning()) {
        ?>
        <link rel="stylesheet" href="/assets/styles/style.css"> <?php
    } else {
        ?>
        <link rel="stylesheet/less" type="text/css" href="/assets/styles/style.less">
        <script src="https://cdn.jsdelivr.net/npm/less"></script>
        <?php
    }
    ?>
    <link rel="icon" type="image/jpeg" href="/assets/images/favicon-96.jpg">
    <script>
        <?= $ssg->layout->get_email_parts_in_js() ?>
    </script>
    <script src="/assets/site.js"></script>
</head>

<body>

    <div id="bodyWrapper">

        <h1><?= $ssg->config->site_top_h1 ?></h1>