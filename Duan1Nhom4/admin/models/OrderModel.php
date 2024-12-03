<?php
class OrderModel
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=duanmau1', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function createOrder($userId, $delivererId, $totalPrice, $deliveryAddress, $note, $statusId)
    {
        $stmt = $this->pdo->prepare("INSERT INTO order_pro (user_id, deliverer, total_price, delivery_address, note, status_id) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$userId, $delivererId, $totalPrice, $deliveryAddress, $note, $statusId]);
    }

    public function getOrderById($orderId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM order_pro WHERE order_id = ?");
        $stmt->execute([$orderId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getOrdersByUserId($userId)
    {
        if ($userId === null) {
            return [];
        }

        $stmt = $this->pdo->prepare("SELECT * FROM order_pro WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateOrderStatus($orderId, $statusId)
    {
        $stmt = $this->pdo->prepare("UPDATE order_pro SET status_id = ? WHERE order_id = ?");
        return $stmt->execute([$statusId, $orderId]);
    }

    public function deleteOrder($orderId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM order_pro WHERE order_id = ?");
        return $stmt->execute([$orderId]);
    }

    public function editOrder($orderId, $totalPrice, $deliveryAddress, $note, $statusId)
    {
        $stmt = $this->pdo->prepare("UPDATE order_pro SET total_price = ?, delivery_address = ?, note = ?, status_id = ? WHERE order_id = ?");
        return $stmt->execute([$totalPrice, $deliveryAddress, $note, $statusId, $orderId]);
    }
}
?>