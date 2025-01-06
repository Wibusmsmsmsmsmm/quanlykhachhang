<?php
class CustomerController {
    private $customerDB;
    
    public function __construct($conn) {
        $this->customerDB = new CustomerDB($conn);
    }
    
    public function index($page = 1) {
        $customers = $this->customerDB->getAll($page);
        $totalPages = $this->customerDB->getTotalPages();
        include 'views/list.php';
    }
    
    public function view($id) {
        $customer = $this->customerDB->getById($id);
        include 'views/view.php';
    }
    
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer = new Customer(
                null,
                $_POST['name'],
                $_POST['email'],
                $_POST['address']
            );
            $this->customerDB->create($customer);
            header('Location: index.php');
        } else {
            include 'views/add.php';
        }
    }
    
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $customer = new Customer(
                $id,
                $_POST['name'],
                $_POST['email'],
                $_POST['address']
            );
            $this->customerDB->update($customer);
            header('Location: index.php');
        } else {
            $customer = $this->customerDB->getById($id);
            include 'views/edit.php';
        }
    }
    
    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->customerDB->delete($id);
            header('Location: index.php');
        } else {
            $customer = $this->customerDB->getById($id);
            include 'views/delete.php';
        }
    }
} 