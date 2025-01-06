<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết khách hàng</title>
    <link rel="stylesheet" href="giaodien.css">
</head>
<body>
    <h1>Chi tiết khách hàng</h1>
    <div>
        <p><strong>Tên:</strong> <?php echo htmlspecialchars($customer['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($customer['email']); ?></p>
        <p><strong>Địa chỉ:</strong> <?php echo htmlspecialchars($customer['address']); ?></p>
    </div>
    <div>
        <a href="index.php?action=edit&id=<?php echo $customer['id']; ?>">Sửa</a>
        <a href="index.php?action=delete&id=<?php echo $customer['id']; ?>">Xóa</a>
        <a href="index.php">Quay lại danh sách</a>
    </div>
</body>
</html>