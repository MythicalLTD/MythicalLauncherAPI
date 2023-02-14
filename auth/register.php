<?php 
error_reporting(0);
header('Content-Type: application/json');
include("../sql.php");
$db = mysqli_connect($_CONFIG["db_host"]. ':'. $_CONFIG["db_port"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"]);

$username = mysqli_real_escape_string($db, $_GET['usrn']);
$email = mysqli_real_escape_string($db,$_GET['email']);
$pass = mysqli_real_escape_string($db,$_GET['pass']);

if ($username == "" || $email == "" || $pass == "")
{
    echo "ERR_EMPTYSTRINGS";
}
else
{
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { 
        if ($user['username'] === $username) {
          echo "USERNAME_EXISTS";
          die;
        }
    
        if ($user['email'] === $email) {
          echo "EMAIL_EXISTS";
          die;
        }
    }
    $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$pass')";
    mysqli_query($db, $query);
    echo "SUCCES_REGISTER";

}


?>