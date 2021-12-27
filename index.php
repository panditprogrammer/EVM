<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="This is testing online votting system project written in php and MYSQL database by panditprogrammer.com . This projects Demonstrate how to be handle Billions of Indian citizen votes using this services. This EVM fully optimized and secured for votting . User can Vote only one time using their Aadhar UIDAI identification . ">
    <meta name="keywords" content="Online votting system projects , EVM- Electronic votting system, php and mysql votting projects by pandit programmer, php projects by pandit projects, mysql projects by pandit programmer, votting system , india votting system , Aadhar based votting system">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Votting System by pandit programmer (Testing EVM Online Machine) EVM - Electronic Voting Machine </title>
    <link rel="stylesheet" href="/src/css/style.css">

</head>

<body>
    <div class="heading">
        <span class="brand">Election Commision of India</span>

        <span class="user_info">
            <span id="user_name"><?php echo $_SESSION['username'] ?></span>
            <a href="logout.php" class="logout">Log Out</a>
        </span>

    </div>


    <div class="main">

        <div class="left">
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
            <div class="candidate"></div>
        </div>
        <form action="success.php" method="POST" id="this_form">

            <input type="hidden" name="vote_value" id="vot_value" style="display: none;">
            <div class="right">
                <div class="right_div">
                    <span class="light" id="lightId1"></span>
                    <input id="btn1" value="1" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>


                <div class="right_div">
                    <span class="light" id="lightId2"></span>
                    <input id="btn2" value="2" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <div class="right_div">
                    <span class="light" id="lightId3"></span>
                    <input id="btn3" value="3" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <div class="right_div">
                    <span class="light" id="lightId4"></span>
                    <input id="btn4" value="4" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <div class="right_div">
                    <span class="light" id="lightId5"></span>
                    <input id="btn5" value="5" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <div class="right_div">
                    <span class="light" id="lightId6"></span>
                    <input id="btn6" value="6" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <div class="right_div">
                    <span class="light" id="lightId7"></span>
                    <input id="btn7" value="7" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <div class="right_div">
                    <span class="light" id="lightId8"></span>
                    <input id="btn8" value="8" type="button" name="votingbtn" class="btn" onclick="lightOn(this.id)">
                </div>

                <button type="submit" id="submit_btn" name="submit">Submit Your Vote</button>
        </form>
    </div>

    </div>

    <footer>
        <p> &copy; All right Reserved ECI 2022 <br> Developed by <a target="blank" href="http://panditprogrammer.com">PanditProgrammer.com</a> </p>
    </footer>

</body>

</html>

<script>
    let click_audio = new Audio("src/kerb.wav");
    let form_post = document.getElementById("f_submit");

    function lightOn(e) {

        let number = document.getElementById(e);

        let generated_id = `lightId${parseInt(number.value)}`;

        let light = document.getElementById(generated_id);
        light.style.backgroundColor = "green";
        click_audio.play();

        for (let i = 1; i < 9; i++) {
            document.getElementById(`btn${i}`).disabled = true;
        }

        let x = document.getElementById("vot_value");
        x.value = number.value;
        console.log(x.value);

    }
</script>