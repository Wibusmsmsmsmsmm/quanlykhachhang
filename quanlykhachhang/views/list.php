<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="giaodien.css">
</head>
<body>
    <div class="container">
        <h1>Danh sách khách hàng</h1>
        <a href="index.php?action=add" class="btn btn-primary">Thêm khách hàng mới</a>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($customer['name']); ?></td>
                        <td><?php echo htmlspecialchars($customer['email']); ?></td>
                        <td><?php echo htmlspecialchars($customer['address']); ?></td>
                        <td class="actions">
                            <a href="index.php?action=view&id=<?php echo $customer['id']; ?>" class="btn btn-secondary">Xem</a>
                            <a href="index.php?action=edit&id=<?php echo $customer['id']; ?>" class="btn btn-success">Sửa</a>
                            <a href="index.php?action=delete&id=<?php echo $customer['id']; ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="index.php?page=<?php echo $i; ?>" <?php echo ($page == $i) ? 'class="active"' : ''; ?>><?php echo $i; ?></a>
            <?php endfor; ?>
        </div>
    </div>
</body>
</html>