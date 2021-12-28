<?php

require_once "header.php";
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}


?>



<div class="index_main">

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

            <button type="submit" id="submit_btn" disabled name="submit">Submit Your Vote</button>
    </form>
</div>

</div>
<?php
require_once "footer.php";

?>



<script>
    let click_audio = new Audio("src/kerb.wav");
    let form_post = document.getElementById("f_submit");
    let ready = document.getElementById("submit_btn");

    function lightOn(e) {
        let number = document.getElementById(e);
        let generated_id = `lightId${parseInt(number.value)}`;

        let light = document.getElementById(generated_id);
        light.style.backgroundColor = "green";
        click_audio.play();

        for (let i = 1; i < 9; i++) {
            document.getElementById(`btn${i}`).disabled = true;
        }

        let set_btn_value = document.getElementById("vot_value");
        set_btn_value.value = number.value;

        ready.disabled = false;

    }
</script>