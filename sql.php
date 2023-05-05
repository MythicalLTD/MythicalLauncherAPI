<?php 
include_once("config.php");
$mconn = new mysqli($_CONFIG["db_host"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"] );
?>