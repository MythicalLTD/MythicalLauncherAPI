<?php 
error_reporting(0);
include("../sql.php");
$gtusrdata = $mconn->query("SELECT * FROM users")->fetch_array();
$db = mysqli_connect($_CONFIG["db_host"]. ':'. $_CONFIG["db_port"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"]);


if ($_GET['email'] == "" | $_GET['pass'] == "")
{
    echo "FAIL_EMPTY_STRINGS";
}
else
{
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $gtusrdata = $mconn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'")->fetch_array();
    if ($gtusrdata['username'] == "")
    {
        echo "FAIL_INVAILDLOIGN";
    }
    else
    {
        echo $gtusrdata['username'];
    }
}
?>