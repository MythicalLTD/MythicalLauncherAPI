<?php
error_reporting(1);
header('Content-Type: application/json');

include("../sql.php");
$gtusrdata = $mconn->query("SELECT * FROM users")->fetch_array();
$db = mysqli_connect($_CONFIG["db_host"]. ':'. $_CONFIG["db_port"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"]);


if ($_GET['email'] == "" | $_GET['pass'] == "")
{
    echo "FAIL_EMPTY_STRINGS";
}
else
{
    $email = mysqli_real_escape_string($db, $_GET['email']);
    $pass = mysqli_real_escape_string($db,$_GET['pass']);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $getusrinfo = $mconn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'")->fetch_array();
        if ($getusrinfo['isbanned'] == "0")
        {
            echo "LOGIN_SUCCES";
        }
        else
        {
            echo "ERROR_BANNED";
        }
        
  	}else {
  		echo "LOGIN_FAILD";
  	}
}
?>