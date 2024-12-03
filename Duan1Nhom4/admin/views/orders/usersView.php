<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users with Orders</title>
</head>

<body>
    <h1>Users with Orders</h1>
    <ul>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <li>
                    User ID: <?php echo $user['user_id']; ?><br>
                    Name: <?php echo $user['name']; ?><br>
                    Phone: <?php echo $user['phone_number']; ?><br>
                    Email: <?php echo $user['email']; ?><br>
                    <a href="?act=viewOrders&userId=<?= $user['user_id'] ?>">View Orders</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No users found with orders.</li>
        <?php endif; ?>
    </ul>
</body>

</html>