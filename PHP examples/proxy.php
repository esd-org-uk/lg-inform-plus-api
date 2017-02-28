<?php
//include the functions required to sign a URL
include("esdSign.php");

$appKey = "YOUR_PUBLIC_PRIVATE_KEY";
$appSecret = "YOUR_PUBLIC_PRIVATE_SECRET";

echo file_get_contents(sign_url($_GET["URL"], $appKey, $appSecret));
?>