<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập cuối kỳ OSS</title>
    <style>body { font-family: sans-serif; text-align: center; padding-top: 50px; }</style>
</head>
<body>
    <h1>Đây là phiên bản Main</h1>
    
    <?php
    $host = 'db'; // Tên service trong docker-compose
    $user = 'user';
    $pass = 'password';
    $dbname = 'my_database';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<h2 style='color:green;'>Kết nối Database thành công! ✅</h2>";
        echo "<p>Dữ liệu được lấy từ container MySQL.</p>";
    } catch(PDOException $e) {
        echo "<h2 style='color:red;'>Lỗi kết nối: " . $e->getMessage() . " ❌</h2>";
    }
    ?>
</body>
</html>