<?php 
header('Content-Type: application/json');
include("../sql.php");
error_reporting(0);

$getsetitngs = $mconn->query("SELECT * FROM users")->fetch_array();


if (isset($_GET['email'] , $_GET['pass']))
{
    $email = $_GET['email'];
    $pass = $_GET['pass'];
    $query = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $results = mysqli_query($mconn, $query);
    if (mysqli_num_rows($results) == 1) {
        $getusrinfo = $mconn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'")->fetch_array();
        if ($getusrinfo['isbanned'] == "0")
        {
            $gtusrdata = $mconn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'")->fetch_array();
            if ($gtusrdata["isadmin"] == "1")
            {
                $isadmin = "true";
            }
            else
            {
                $isadmin = "false";
            }
            if ($gtusrdata["isbanned"] == "1")
            {
                $isbanned = "true";
            }
            else
            {
                $isbanned = "false";
            }
           
$json = '{
    "Username": "'.$gtusrdata["username"].'",
    "Email": "'.$gtusrdata["email"].'",
    "Password": "'.$gtusrdata["password"].'",
    "Role": "'.$gtusrdata["role"].'",
    "Admin": "'.$isadmin.'",
    "Banned": "'.$isbanned.'"
}';
            

echo $json; 
        }
        else
        {
            echo "ERROR_BANNED";
        }
        
  	}else {
  		echo "LOGIN_FAILD";
  	}
}
else
{
    echo "FAIL_EMPTY_STRINGS";
}
?>