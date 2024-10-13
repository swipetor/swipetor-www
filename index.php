<?php
require 'vendor/autoload.php';

use Atas\SsgSystemPhp\AtasSsg;

$ssg = new AtasSsg(__DIR__);
$ssg->pageMeta->selectedTab = $tpl->meta->selectedTab ?? "home";

require_once 'layout/header.php';

?>

<h2><?= $ssg->config->site_top_about_line1 ?></h2>
<h3>
    <?= $ssg->config->site_top_about_line2 ?>
</h3>


<strong>Goal</strong>
— Providing a video feed solution, allowing creators to independently showcase their content on their brand's web
address,
standing out from the influx of mediocre and AI-generated content on social media.

<br />
<br />

<div class="homeLinksDiv">
    <?php if (isset($ssg->config->github_url) && strlen($ssg->config->github_url) > 0) { ?>
        <a href="https://demo.swipetor.com" target="_blank">demo.swipetor.com</a> (nicer on phone)
        <span class="sep">
            |
        </span>
        <a href="<?= $ssg->config->github_url ?>" target="_blank" rel="nofollow noreferrer" title="on GitHub"
            class="githubLink">
            <img src="/assets/images/github-icon.svg" alt="GitHub icon" />
            <?= str_replace('https://', '', $ssg->config->github_url) ?>
        </a>
    <?php } ?>
</div>

<p>
    <strong>Features</strong>
</p>

<ul>
    <li>Smooth web-based app, like native</li>
    <li>Runs on your own website.com</li>
    <li>Video clip generation from full videos</li>
    <li>Video importing from many sources</li>
    <li>Push notifications (<i>including iPhones and Androids</i>)</li>
    <li>Multi-clip posts</li>
    <li>Private messaging with group messaging</li>
    <li>Homescreen app icon for iPhone and Android</li>
    <li>Commenting</li>
    <li>Notifications for interactions</li>
    <li>Possibility of cloud hosting with no setup - contact and check</li>
</ul>

<br />
<p>
    <strong>Contact</strong> —
    <span class="email"></span>
</p>

<?php


require_once 'layout/footer.php';
