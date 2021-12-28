<?php
require_once "header.php";
if (isset($_SESSION['username'])) {
    header("location:dashboard.php");
}
?>

<head>

    <title>Login in Online votting system ( pandit programmer)</title>
    <link rel="stylesheet" href="/src/css/register.css">
</head>

<body>
    <div class="main">

        <div class="headingWalaDiv">
            <h3>Login </h3>
        </div>

        <div class="formWalaDiv">
            <form action="user_auth.php" method="post">
                <input name="name" type="text" placeholder="Enter your name" required>
                <input name="email" type="email" placeholder="Enter your Email" required>
                <input name="pass1" type="password" placeholder="Enter your password" required>
                <button name="submit" type="submit">Login</button>
                <a href="register.php">Not a member? Register now</a>

            </form>
        </div>

    </div>



    <?php
    require_once "footer.php";
    ?>