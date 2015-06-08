<?php
//this file is loaded in each page before the <!DOCTYPE> balise
session_start();

include_once("files/php/settings.php"); //settings file. MUST come first
include_once("files/php/tercode.function.php"); //function terCode
include_once("files/php/recaptcha.function.php"); //function captchaIsValid and captchaGet
include_once("files/php/gravatar.function.php"); //function gravatarUrl

//database connexion
try
{
    $bdd = new PDO('mysql:host=' . $settingsDbHost . ';dbname=' . $settingsDbName . ';charset=utf8', $settingsDbUser, $settingsDbPassword);
}
catch (Exception $e)
{
    echo 'An error occured trying to connect to the database. Please contact the administrator at ' . $settingsAdminEmail . '<br />';
    die('Erreur : ' . $e->getMessage());
    exit();
}

?>
