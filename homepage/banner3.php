<?php
// lms-banner.php
require __DIR__ . '/database/database.php';
?>
<section class="categories">
<div class="lms-banner">
    <div class="lms-banner-image">
        <img src="./image/bann.png" alt="LMS Illustration">
    </div>
    <div class="lms-banner-content">
        <h2>Grow Us Your Skill <br> With LearnPress LMS</h2>
        <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized that cannot trouble.</p>
        <ul>
            <?php
            $certifications = ["Certification", "Certification", "Certification", "Certification"];
            foreach ($certifications as $item) {
                echo "<li>✔ $item</li>";
            }
            ?>
        </ul>
        <a href="#" class="explore-btn">Explorer Course</a>
    </div>
</div>
</section>