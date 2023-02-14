<?php 
header('Content-Type: application/json');
include("../sql.php");
$getsetitngs = $mconn->query("SELECT * FROM settings")->fetch_array();
$url = "https://raw.githubusercontent.com/MythicalLTD/MythicalLauncher/main/version";
$text = trim(file_get_contents($url));
$json = '{
    "Version": "'.$text.'",
    "appName": "'.$getsetitngs['appName'].'",
    "appLogo": "'.$getsetitngs['appLogo'].'",
    "appBg": "'.$getsetitngs['appBg'].'",
    "appMainColour": "'.trim($getsetitngs['appMainColour']).'",
    "appDiscord": "'.$getsetitngs['appDiscord'].'",
    "appVote": "'.$getsetitngs['appVote'].'",
    "appWebsite": "'.$getsetitngs['appWebsite'].'",
    "appStore": "'.$getsetitngs['appStore'].'",
    "appLang": "'.$getsetitngs['appLang'].'",
}
';
echo $json;
?>