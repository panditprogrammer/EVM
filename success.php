<link rel="stylesheet" href="/src/css/success.css">
<?php
require_once 'connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

// submit the vote 
if (isset($_POST['submit'])) {

    $voted_on = $_POST['vote_value'];

    $user = $_SESSION['username'];
    $adhar = $_SESSION['adhar'];
    $check_user_exist = false;

    $sql = "SELECT t_and_date, user_adhar FROM evm_vote";
    $result = mysqli_query($connection, $sql);

    while ($row = $result->fetch_assoc()) {
        if ($row['user_adhar'] == $adhar) {
            $_SESSION['submitted_on'] = $row['t_and_date'];
            $check_user_exist = true;
    ?>
            <script>
                alert("Already Voted! \n Don't try again otherwise you will be rejected");
            </script>
        <?php
        header("location:index.php");
            
        }
    }


    if (!($check_user_exist)) {
        $sql = "INSERT INTO evm_vote( user, vote_on, t_and_date ,user_adhar) VALUES ('$user','$voted_on',NOW(),'$adhar')";

        $result = mysqli_query($connection, $sql);

        if ($result) {
            $_SESSION['check_voting_success'] = true;

            echo '<div class="container">
            <h1 class="c_h1">Thanks for Votting.</h1>
            <p class="c_p">Voter Id : <strong>'.$user.'</strong></p>
            <p class="c_p">Aadhar (UIDAI) : <strong>'. $_SESSION['adhar'].' </strong></p>
            <p class="c_p">Submitted on : <strong>'.$_SESSION['submitted_on'].'</strong></p>
    
            <p><a class="c_a" href="/">Back to Home</a></p>
        </div>';


            // echo "<h1>Thanks for Voting.</h1> ";
            // echo  "<strong>$user</strong>";
            // echo "<br>Your Aadhar Number is " . $_SESSION['adhar'] . "<br>";
            // echo '<br><a href="/">Back to Home</a>';
        ?>

            <script>
                alert("Congratulations!\nYour Voting Successfully completed.");
            </script>

<?php
        } else {

            echo "Something went wrong\nPlease, Try again!";
        }
    }
}



?>