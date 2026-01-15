<?php 
include "DB_connection.php";
include "data/setting.php";
$setting = getSetting($conn);

if ($setting != 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?=$setting['school_name']?></title>
    <link rel="icon" href="logo.png">
<link rel="stylesheet" href="css/index.css">
</head>
<body class="home">
    <nav>
        <div class="logo">
            <img src="logo.png" alt="School Logo">
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php" class="login-btn">Login</a></li>
        </ul>
    </nav>
      <div class="container">
    
    <section class="welcome">
        <img src="logo.png" alt="School Logo">
        <h1>Welcome to <?=$setting['school_name']?></h1>
        <p><?=$setting['slogan']?></p>
    </section>


       
        <section class="about" id="about">
            <img src="images.jpeg" alt="School Building">
            <div class="about-content">
                <h2>About Us</h2>
                <p><?=$setting['about']?></p>
                <p><small>Y School Management System</small></p>
            </div>
        </section>

       
        <section class="contact" id="contact">
            <h2>Contact Us</h2>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger"><?=$_GET['error']?></div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success"><?=$_GET['success']?></div>
            <?php } ?>
            <form method="post" action="req/contact.php">
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
       

        <footer>
            Copyright &copy; <?=$setting['current_year']?> <?=$setting['school_name']?>. All rights reserved.
        </footer>

    </div>
</body>
</html>
<?php 
} else {
    header("Location: login.php");
    exit;
} 
?>