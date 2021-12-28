<?php
require_once "header.php";
if (isset($_SESSION['username'])) {
    header("location:dashboard.php");
}

?>


<head>
    <title>Register for Online Votting System ( pandit programmer ) - panditprogrammer.com</title>
    <link rel="stylesheet" href="/src/css/register.css">
</head>

<body>

    <div class="main">
        <div class="headingWalaDiv">

            <h3>Registration  </h3>
        </div>
        <div class="formWalaDiv">
            <form action="save_db.php" method="post">

                <input name="name" type="text" placeholder="Enter your name" required>
                <input name="email" type="email" placeholder="Enter your Email" required>
                <input name="mobile" type="text" id="mobile" placeholder="Enter your Mobile number" required onblur="valid_phone()">
                <input name="adhar" type="text" id="adhar" placeholder="Enter your Aadhar number" required onblur="valid_adhar()">
                <input name="pass1" type="password" id="pass1" placeholder="Enter your password" required>
                <input name="pass2" type="password" id="pass2" placeholder="Confirm your password" required onblur="valid_pass()">
                <span>
                    <input type="checkbox" name="check" id="check" required> <label for="check">Accept all terms & conditions.</label>
                </span>

                <button name="submit" type="submit">Register </button>
                <button type="reset">reset</button>

                <a href="login.php">Already Register? Login now</a>

            </form>
        </div>
    </div>


    <script>
        let pass_1 = document.getElementById("pass1");
        let pass_2 = document.getElementById("pass2");
        let mobile_n = document.getElementById("mobile");
        let adhar_n = document.getElementById("adhar");


        function valid_adhar() {

            if ((adhar_n.value.trim().match(/\D+/)) != null) {
                alert("Invalid Aadhar Number\nAadhar Number doesn't contain character. ");
            }

            if (adhar.value.trim().length != 12) {
                alert("Invalid Aadhar Number\nAadhar number must be 12 Digits. ");
            }
        }

        function valid_phone() {
            if ((mobile_n.value.trim().match(/\D+/)) != null) {
                alert("Phone Number doesn't contain characters ");
            }

            if (mobile_n.value.trim().length != 10) {
                alert("Invalid Phone Number\nPhone Number must be 10 Digits Only. ");
            }
        }

        function valid_pass() {
            if (pass_1.value != pass_2.value || pass_1.value.trim().length === 0) {
                console.log(pass_1.value.trim());
                console.log(pass_2.value.trim());
                alert("Enter Password\nPassword Missmatch");
            }
        }
    </script>


    <?php
    require_once "footer.php";
    ?>