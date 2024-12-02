<?php
// admin/controllers/OrderController.php

class OrderController
{
    private $orderModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }

    public function listOrders()
    {
        $orders = $this->orderModel->getOrders();
        require_once './views/orders/listOrders.php';
    }
    public function formInsertOrder()
    {
        require_once './views/orders/insertOrder.php';
    }

    public function insertOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_insert'])) {
            $data = [
                'user_id' => $_POST['user_id'],
                'Deliverer' => $_POST['Deliverer'],
                'Create_date' => $_POST['Create_date'],
                'Total_Price' => $_POST['Total_Price'],
                'Delivery_address' => $_POST['Delivery_address'],
                'Note' => $_POST['Note'],
                'status_id' => $_POST['status_id'],
            ];
            $this->orderModel->insertOrder($data);
            header("Location: ?act=listOrders");
        }
        require_once './views/orders/insertOrder.php';
    }

    public function editOrder($orderId)
    {
        $order = $this->orderModel->getOrderById($orderId);
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_update'])) {
            $data = [
                'user_id' => $_POST['user_id'],
                'Deliverer' => $_POST['Deliverer'],
                'Create_date' => $_POST['Create_date'],
                'Total_Price' => $_POST['Total_Price'],
                'Delivery_address' => $_POST['Delivery_address'],
                'Note' => $_POST['Note'],
                'status_id' => $_POST['status_id'],
            ];
            $this->orderModel->updateOrder($orderId, $data);
            header("Location: ?act=listOrders");
        }
        require_once './views/orders/editOrder.php';
    }

    public function deleteOrder($id)
    {
        $this->orderModel->deleteOrder($id);
        header("Location: ?act=listOrders");
    }
}
?>