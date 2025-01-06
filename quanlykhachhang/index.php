<?php
require_once 'models/Customer.php';
require_once 'models/CustomerDB.php';
require_once 'controllers/CustomerController.php';

// Kết nối database
$conn = new mysqli('localhost', 'root', '', 'customer_management');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$controller = new CustomerController($conn);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;
$page = $_GET['page'] ?? 1;

switch ($action) {
    case 'index':
        $controller->index($page);
        break;
    case 'view':
        $controller->view($id);
        break;
    case 'add':
        $controller->add();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    default:
        $controller->index($page);
}

$conn->close();