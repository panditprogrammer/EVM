<?php
session_start();
include_once "connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];

    $sql = "SELECT username, email,password,adhar FROM evm_table";

    $result = mysqli_query($connection, $sql);
    $check = false;


    if ($result) {
        while ($row = $result->fetch_assoc()) {

            if ($row['username'] == $name && $row['email'] == $email && $row['password'] == $pass1) {
                $check = true;
                $welcome = $row['email'];
                $user_adhar = $row['adhar'];
                $_SESSION['username'] = $welcome;
                $_SESSION['adhar'] = $user_adhar;


                break;
            }
        }
    }

    // if username not found in database 
    if ($check) {

        header('location:index.php');
    } else {

?>
        <script>
            alert("Invalid Login Info\nMay be you are not Registered!");
            location.assign("login.php");
        </script>
<?php
    }
}
