<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


//connection to MySql Server
$mysqli = new mysqli ('localhost', 'root', '', 'perfectcup');

//output any error
if($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM members WHERE email='email'";
$result = mysqli_query($mysqli, $query) or die (mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {

    if (password_verify($password, $row['passord'])) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        echo 'true';
    }
    else {
        echo 'false';
    }

} else {
    echo 'true';
}
?>

