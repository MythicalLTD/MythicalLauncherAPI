<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

if (isset($_GET['version']))
{
    $url = "https://raw.githubusercontent.com/MythicalLTD/MythicalLauncher/main/version";
    $text = trim(file_get_contents($url));
    $v_lanucher = $_GET['version'];
    if ($v_lanucher == $text)
    {
        echo "UPTODATE";
    }
    else
    {
        echo "GETUPDATE";
    } 
}
else
{
    echo "FAILD_GET_VERSION";
}


?>