<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
    <style>
    .container {
        width: 50%;
        margin: 2rem auto;
        background: #fff;
        padding: 2rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        transition: transform 0.3s ease-in-out;
    }

    .container:hover {
        transform: scale(1.05);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 2rem;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        color: #333;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #5c67f2;
        color: #fff;
        border: none;
        padding: 0.75rem;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        font-size: 1rem;
    }

    button:hover {
        background-color: #5058e2;
    }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <h1>Login</h1>
            <form action="?act=checkLogin" method="post">
                <div class="form-group">
                    <label for="user">Username:</label>
                    <input type="text" id="user" name="user" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <button type="submit" name="btn_login">Login</button>
            </form>
        </div>
    </body>

    </html>
</body>

</html>