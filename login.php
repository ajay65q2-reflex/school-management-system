<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

       body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    min-height: 100vh;
    background:
        linear-gradient(
            rgba(0,0,0,0.65),
            rgba(0,0,0,0.65)
        ),
        url("college.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

        .content {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form {
            width: 100%;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .form img {
            width: 90px;
            margin-bottom: 15px;
        }

        .form h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
            letter-spacing: 1px;
        }

        .form input,
        .form select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .form input:focus,
        .form select:focus {
            border: 2px solid #ff6600;
            box-shadow: 0 0 8px rgba(255, 102, 0, 0.8);
        }

        .btnn {
            width: 100%;
            padding: 14px;
            border: none;
            background-color: #ff6600;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .btnn:hover {
            background-color: #e65c00;
        }

        .link {
            margin-top: 20px;
            font-size: 14px;
            color: #ddd;
        }

        .link a {
            color: #ff6600;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }

        .alert {
            background: #7f1d1d;
            color: #fca5a5;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="content">
    <form class="form" method="post" action="req/login.php">

        <img src="logo.png" alt="Logo">

        <h2>Login</h2>

        <!-- Error message -->
        <?php if (isset($_GET['error'])) { ?>
            <div class="alert">
                <?=$_GET['error']?>
            </div>
        <?php } ?>

        <input type="text" name="uname" placeholder="Username" required>

        <input type="password" name="pass" placeholder="Password" required>

        <select name="role" required>
            <option value="">Login As</option>
            <option value="1">Admin</option>
            <option value="2">Teacher</option>
            <option value="3">Student</option>
        </select>

        <button type="submit" class="btnn">Login</button>

        <div class="link">
            <a href="index.php">← Back to Home</a>
        </div>

    </form>
</div>

</body>
</html>
