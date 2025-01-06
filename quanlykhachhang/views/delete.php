<!DOCTYPE html>
<html>
<head>
    <title>Xóa khách hàng</title>
    <link rel="stylesheet" href="giaodien.css">
</head>
<body>
    <h1>Xóa khách hàng</h1>
    <p>Bạn có chắc chắn muốn xóa khách hàng này?</p>
    <div>
        <p><strong>Tên:</strong> <?php echo htmlspecialchars($customer['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($customer['email']); ?></p>
        <p><strong>Địa chỉ:</strong> <?php echo htmlspecialchars($customer['address']); ?></p>
    </div>
    <form method="POST" action="index.php?action=delete&id=<?php echo $customer['id']; ?>">
        <button type="submit">Xác nhận xóa</button>
        <a href="index.php">Hủy và quay lại danh sách</a>
    </form>
</body>
</html>