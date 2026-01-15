<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}


.custom-nav{
    width:100%;
    background:rgba(15,23,42,0.95);
    display:flex;
    align-items:center;
    padding:15px 40px;
    box-shadow:0 8px 25px rgba(0,0,0,0.5);
}


.custom-nav .logo img{
    width:42px;
}


.custom-nav ul{
    list-style:none;
    display:flex;
    gap:25px;
    margin-left:40px;
}

.custom-nav ul li a{
    color:#cbd5e1;
    text-decoration:none;
    font-weight:600;
    font-size:15px;
    transition:0.3s;
}

.custom-nav ul li a:hover{
    color:#fbbf24;
}

/* RIGHT SIDE */
.nav-right{
    margin-left:auto;
}

.nav-right a{
    color:#fbbf24;
    text-decoration:none;
    font-weight:bold;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    .custom-nav{
        flex-direction:column;
        align-items:flex-start;
        gap:15px;
    }

    .custom-nav ul{
        flex-direction:column;
        margin-left:0;
        gap:12px;
    }

    .nav-right{
        margin-left:0;
    }
}
</style>
</head>

<body>

<nav class="custom-nav">
    <div class="logo">
        <a href="index.php">
            <img src="../logo.png" alt="Logo">
        </a>
    </div>

    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="teacher.php">Teachers</a></li>
        <li><a href="student.php">Students</a></li>
        <li><a href="grade.php">Grade</a></li>
        <li><a href="section.php">Section</a></li>
        <li><a href="class.php">Class</a></li>
        <li><a href="course.php">Course</a></li>
        <li><a href="message.php">Message</a></li>
        <li><a href="settings.php">Settings</a></li>
    </ul>

    <div class="nav-right">
        <a href="../logout.php">Logout</a>
    </div>
</nav>

</body>
</html>
