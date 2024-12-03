<?php
class AdminController
{
    private $cartModel;
    private $orderModel;
    private $userOrderModel;

    public function __construct($cartModel, $orderModel, $userOrderModel)
    {
        $this->cartModel = $cartModel;
        $this->orderModel = $orderModel;
        $this->userOrderModel = $userOrderModel;
    }

    public function viewUsersWithOrders()
    {
        $users = $this->userOrderModel->getUsersWithOrders();
        include 'views/orders/usersView.php';
    }

    public function viewCart($userId)
    {
        $cartItems = $this->cartModel->getCartByUserId($userId);
        include 'views/orders/cartView.php';
    }

    public function addToCart($userId, $productId, $quantity)
    {
        $this->cartModel->addToCart($userId, $productId, $quantity);
        header("Location: /admin/cart/view/$userId");
    }

    public function updateCart($cartId, $quantity)
    {
        $this->cartModel->updateCart($cartId, $quantity);
        header("Location: /admin/cart/view");
    }

    public function deleteFromCart($cartId)
    {
        $this->cartModel->deleteFromCart($cartId);
        header("Location: /admin/cart/view");
    }

    public function createOrder($userId, $delivererId, $totalPrice, $deliveryAddress, $note, $statusId)
    {
        $this->orderModel->createOrder($userId, $delivererId, $totalPrice, $deliveryAddress, $note, $statusId);
        header("Location: /admin/order/view/$userId");
    }

    public function viewOrder($orderId)
    {
        $order = $this->orderModel->getOrderById($orderId);
        include 'views/orders/orderView.php';
    }

    public function viewOrdersByUser($userId)
    {

        if (empty($userId)) {

            header("Location: /admin/index.php?act=listUsers");
            exit();
        }

        $orders = $this->orderModel->getOrdersByUserId($userId);
        include 'views/orders/ordersView.php';
    }

    public function deleteOrder($orderId)
    {
        $this->orderModel->deleteOrder($orderId);
        header("Location: /admin/order/view");
    }

    public function editOrder($orderId, $totalPrice, $deliveryAddress, $note, $statusId)
    {
        $this->orderModel->editOrder($orderId, $totalPrice, $deliveryAddress, $note, $statusId);
        header("Location: /admin/order/view/$orderId");
    }
}
?>