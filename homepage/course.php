<?php
// Kết nối database
require __DIR__ . '/database/database.php';

// Lấy danh sách khóa học từ database
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>

<section class="categories">
    <div class="container">
        <!-- Header -->
        <div class="course-header">
            <div>
                <h2>Featured Courses</h2>
                <p class="container-subtitle">Explore our Popular Course</p>
            </div>
            <button class="all-courses-btn">All Courses</button>
        </div>

        <!-- Danh sách khóa học -->
        <div class="courses-grid">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($course = $result->fetch_assoc()): ?>
                    <?php
                    // Lấy dữ liệu từ database
                    $image = htmlspecialchars($course['image']);
                    $title = htmlspecialchars($course['title']);
                    $duration = htmlspecialchars($course['duration']);
                    $students = htmlspecialchars($course['students']);
                    $oldPrice = number_format($course['price'], 2);
                    $newPrice = $course['discount_price'] == 0 ? "Free" : "$" . number_format($course['discount_price'], 2);
                    ?>

                    <!-- Khóa học -->
                    <div class="course-card">
                        <!-- Hình ảnh khóa học -->
                        <div class="course-image">
                            <span class="badge">Photography</span>
                            <img src="<?= $image ?>" alt="Course Image">
                        </div>

                        <!-- Nội dung khóa học -->
                        <div class="course-content">
                            <p><strong>by <?= htmlspecialchars($course['author']) ?></strong></p>
                            <h3><?= $title ?></h3>

                            <div class="course-info">
                                <span>🕒 <?= $duration ?></span>
                                <span>👨‍🎓 <?= $students ?> Students</span>
                            </div>

                            <!-- Giá khóa học -->
                            <div class="price">
                                <?php if ($newPrice !== "Free"): ?>
                                    <span class="old-price">$<?= $oldPrice ?></span>
                                <?php endif; ?>
                                <span class="new-price"><?= $newPrice ?></span>
                            </div>

                            <div class="view-more">View More</div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No courses available.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
