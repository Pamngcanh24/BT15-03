<?php
require __DIR__ . '/database/database.php';

// Lấy danh sách danh mục từ database
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);
?>

<section class="categories">
    <div class="categories-header">
        <div>
            <h2>Top Categories</h2>
            <p class="categories-subtitle">Explore our Popular Categories</p>
        </div>
        <button class="all-categories-btn">All Categories</button>
    </div>

    <div class="categories-grid">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='category-item'>
                    <img src='./image/{$row['icon']}' alt='{$row['name']}'>
                    <h3>{$row['name']}</h3>
                    <p>{$row['courses_count']} Courses</p>
                </div>";
            }
        } else {
            echo "<p>No categories found.</p>";
        }
        ?>
    </div>
</section>
