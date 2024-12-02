<?php
// models/OrderModel.php

class OrderModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=duanmau1', 'root', '');
    }
    public function getOrders()
    {
        $query = "SELECT * FROM order_pro";
        return $this->pdo->query($query);
    }

    public function getOrderById($id)
    {
        $query = "SELECT * FROM order_pro WHERE Order_id = :id";
        $stmt = $this->pdo->prepare($query); // Prepare the statement
        $stmt->bindParam(':id', $id); // Bind the parameter
        $stmt->execute(); // Execute the statement
        return $stmt->fetch(); // Fetch the single result
    }

    public function insertOrder($data)
    {
        $query = "INSERT INTO order_pro (user_id, Deliverer, Create_date, Total_Price, Delivery_address, Note, status_id) 
                  VALUES (:user_id, :Deliverer, :Create_date, :Total_Price, :Delivery_address, :Note, :status_id)";
        $stmt = $this->pdo->prepare($query); // Prepare the statement
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':Deliverer', $data['Deliverer']);
        $stmt->bindParam(':Create_date', $data['Create_date']);
        $stmt->bindParam(':Total_Price', $data['Total_Price']);
        $stmt->bindParam(':Delivery_address', $data['Delivery_address']);
        $stmt->bindParam(':Note', $data['Note']);
        $stmt->bindParam(':status_id', $data['status_id']);
        return $stmt->execute(); // Execute the statement
    }

    public function updateOrder($id, $data)
    {
        $query = "UPDATE order_pro SET user_id = :user_id, Deliverer = :Deliverer, Create_date = :Create_date, 
                  Total_Price = :Total_Price, Delivery_address = :Delivery_address, Note = :Note, status_id = :status_id 
                  WHERE Order_id = :id";
        $stmt = $this->pdo->prepare($query); // Prepare the statement
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':Deliverer', $data['Deliverer']);
        $stmt->bindParam(':Create_date', $data['Create_date']);
        $stmt->bindParam(':Total_Price', $data['Total_Price']);
        $stmt->bindParam(':Delivery_address', $data['Delivery_address']);
        $stmt->bindParam(':Note', $data['Note']);
        $stmt->bindParam(':status_id', $data['status_id']);
        return $stmt->execute(); // Execute the statement
    }

    public function deleteOrder($id)
    {
        $query = "DELETE FROM order_pro WHERE Order_id = :id";
        $stmt = $this->pdo->prepare($query); // Prepare the statement
        $stmt->bindParam(':id', $id);
        return $stmt->execute(); // Execute the statement
    }
}
?>