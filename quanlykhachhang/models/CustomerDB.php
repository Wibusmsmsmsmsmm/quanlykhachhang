<?php
class CustomerDB {
    private $conn;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
    
    public function getAll($page = 1, $perPage = 6) {
        $start = ($page - 1) * $perPage;
        $query = "SELECT * FROM customers LIMIT ?, ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ii", $start, $perPage);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getTotalPages($perPage = 6) {
        $query = "SELECT COUNT(*) as total FROM customers";
        $result = $this->conn->query($query);
        $row = $result->fetch_assoc();
        return ceil($row['total'] / $perPage);
    }
    
    public function getById($id) {
        $query = "SELECT * FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    
    public function create($customer) {
        $query = "INSERT INTO customers (name, email, address) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $name = $customer->getName();
        $email = $customer->getEmail();
        $address = $customer->getAddress();
        $stmt->bind_param("sss", $name, $email, $address);
        return $stmt->execute();
    }
    
    public function update($customer) {
        $query = "UPDATE customers SET name = ?, email = ?, address = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $name = $customer->getName();
        $email = $customer->getEmail();
        $address = $customer->getAddress();
        $id = $customer->getId();
        $stmt->bind_param("sssi", $name, $email, $address, $id);
        return $stmt->execute();
    }
    
    public function delete($id) {
        $query = "DELETE FROM customers WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
} 