<?php
require 'vendor/autoload.php';

use Atas\SsgSystemPhp\AtasSsg;

$ssg = new AtasSsg(__DIR__);
$ssg->pageMeta->selectedTab = $tpl->meta->selectedTab ?? "home";

require_once 'layout/header.php';

?>

<h2><?= $ssg->config->site_top_about_line1 ?></h2>

<strong>Goal</strong>
— Provide a free and open-source web-based video swipe platform to distinguish independent digital content
from the influx of mediocre, AI-generated and ad-filled spaces on social media & social broadcasting.


<br />
<br />

<div class="homeLinksDiv">
    <?php if (isset($ssg->config->github_url) && strlen($ssg->config->github_url) > 0) { ?>
        <div>
            <a href="https://demo.swipetor.com" class="demoLink">
                <img src="/assets/images/site-icon.png" alt="Swipetor icon" />
                demo.swipetor.com</a>
            <div>
                (better on phone)
            </div>
        </div>
        <div>
            <a href="<?= $ssg->config->github_url ?>" target="_blank" rel="nofollow noreferrer" title="on GitHub"
                class="githubLink">
                <img src="/assets/images/github-icon.svg" alt="GitHub icon" />
                <?= str_replace('https://', '', $ssg->config->github_url) ?>
            </a>
        </div>
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
</ul>

<p class="freeAndIndependentText">This is a free and open-source project, <u>independent of any company or
        commercial
        interests</u>.</p>

<p style="margin-top: 20px;">
    <strong>Contact</strong> —
    <span class="email"></span>
    |
    <a href="https://www.atasasmaz.com" target="_blank">AtaSasmaz.com</a>
</p>

<h2>Post Video Add/Edit Panel ⬇️</h2>
<p>Below page requires creator access on the demo app, so sharing a screenshot of it.</p>

<img src="/assets/images/home-screenshot-1.png" alt="" />


<?php


require_once 'layout/footer.php';
