<!DOCTYPE html>
<html>

<head>
    <title>Order</title>
</head>

<body>
    <h1>Order Details</h1>
    <p>Order ID: <?php echo $order['order_id']; ?></p>
    <p>Total Price: <?php echo $order['total_price']; ?></p>
    <p>Delivery Address: <?php echo $order['delivery_address']; ?></p>
    <p>Note: <?php echo $order['note']; ?></p>
    <p>Status: <?php echo $order['status_id']; ?></p>
    <form action="/admin/order/edit/<?php echo $order['order_id']; ?>" method="post">
        <input type="number" name="total_price" value="<?php echo $order['total_price']; ?>">
        <input type="text" name="delivery_address" value="<?php echo $order['delivery_address']; ?>">
        <input type="text" name="note" value="<?php echo $order['note']; ?>">
        <input type="number" name="status_id" value="<?php echo $order['status_id']; ?>">
        <button type="submit">Update Order</button>
    </form>
</body>

</html>