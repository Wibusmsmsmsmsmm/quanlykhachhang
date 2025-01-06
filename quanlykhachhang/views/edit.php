<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin khách hàng</title>
    <link rel="stylesheet" href="giaodien.css">
</head>
<body>
    <div class="container">
        <h1>Sửa thông tin khách hàng</h1>
        <form method="POST" action="index.php?action=edit&id=<?php echo $customer['id']; ?>">
            <div class="form-group">
                <label>Tên khách hàng:</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($customer['name']); ?>" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($customer['email']); ?>" required>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <textarea name="address" required><?php echo htmlspecialchars($customer['address']); ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Cập nhật</button>
                <a href="index.php" class="btn btn-secondary">Hủy và quay lại danh sách</a>
            </div>
        </form>
    </div>
</body>
</html>