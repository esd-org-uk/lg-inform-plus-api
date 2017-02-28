<?php
//include the functions required to sign a URL
include("esdSign.php");

//call the signed URL to get the raw JSON response
$json = file_get_contents(sign_url("http://webservices.esd.org.uk/metricTypes", "YOUR_PUBLIC_PRIVATE_KEY", "YOUR_PUBLIC_PRIVATE_SECRET"));

//convert the JSON into a PHP object
$metricTypes = json_decode($json);

/*
Loop through each metric type in the metric types array. Note that we have had to use
curly brackets here as there is a dash in the variable name
*/
foreach($metricTypes->{'metricType-array'} as $metricType)
{
	echo $metricType->label;
	echo "<br/>";
}
?>