<?php
class Customer {
    private $id;
    private $name;
    private $email;
    private $address;
    
    public function __construct($id = null, $name = null, $email = null, $address = null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
    
    // Getters và Setters
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function getAddress() { return $this->address; }
    
    public function setName($name) { $this->name = $name; }
    public function setEmail($email) { $this->email = $email; }
    public function setAddress($address) { $this->address = $address; }
} 