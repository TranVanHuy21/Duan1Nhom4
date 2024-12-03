<!DOCTYPE html>
<html>

<head>
    <title>Orders</title>
</head>

<body>
    <h1>Your Orders</h1>
    <ul>
        <?php foreach ($orders as $order): ?>
            <li>
                <strong>Order ID:</strong> <?php echo $order['order_id']; ?> (Hóa đơn)<br>
                <strong>Total Price:</strong> <?php echo $order['total_price']; ?> (Tổng giá trị)<br>
                <form action="/admin/order/update/<?php echo $order['order_id']; ?>" method="post">
                    <input type="number" name="status_id" value="<?php echo $order['status_id']; ?>">
                    <button type="submit">Update Status</button>
                </form>
                <form action="/admin/order/delete/<?php echo $order['order_id']; ?>" method="post">
                    <button type="submit">Delete</button>
                </form>
                <form action="/admin/order/view/<?php echo $order['order_id']; ?>" method="get">
                    <button type="submit">View Details</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>