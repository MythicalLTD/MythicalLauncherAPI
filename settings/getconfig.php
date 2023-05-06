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
    "enable_discordrpc": "'.$getsetitngs['enable_discordrpc'].'",
    "discord_id": "'.$getsetitngs['discord_id'].'",
    "discordrpc_button1_text": "'.$getsetitngs['discordrpc_button1_text'].'",
    "discordrpc_button1_url": "'.$getsetitngs['discordrpc_button1_url'].'",
    "discordrpc_button2_text": "'.$getsetitngs['discordrpc_button2_text'].'",
    "discordrpc_button2_url": "'.$getsetitngs['discordrpc_button2_url'].'",
    "discordrpc_description": "'.$getsetitngs['discordrpc_description'].'",
    "enable_auto_joiner": "'.$getsetitngs['enable_auto_joiner'].'",
    "auto_joiner_ip": "'.$getsetitngs['auto_joiner_ip'].'"
}
';
echo $json;
?>