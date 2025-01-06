<!DOCTYPE html>
<html>
<head>
    <title>Thêm khách hàng mới</title>
    <link rel="stylesheet" href="giaodien.css">
</head>
<body>
    <div class="container">
        <h1>Thêm khách hàng mới</h1>
        <form method="POST" action="index.php?action=add">
            <div class="form-group">
                <label>Tên khách hàng:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <textarea name="address" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="index.php" class="btn btn-secondary">Hủy và quay lại danh sách</a>
            </div>
        </form>
    </div>
</body>
</html>