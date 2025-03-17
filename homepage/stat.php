<?php
// Kết nối database
require __DIR__ . '/database/database.php'; 

$sql = "SELECT * FROM statistics";
$result = mysqli_query($conn, $sql);

// Hiển thị dữ liệu từ database
echo ' <section class="categories">
<div class="stats-container">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '
    <div class="stat-box">
            <h2 class="stat-number">' . htmlspecialchars($row['value']) . '</h2>
            <p class="stat-label">' . htmlspecialchars($row['name']) . '</p>
          </div>';
}
echo '</div></section>';

// Đóng kết nối
mysqli_close($conn);
?>
