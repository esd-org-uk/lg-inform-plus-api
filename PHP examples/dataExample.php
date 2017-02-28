<?php
//include the functions required to sign a URL
include("esdSign.php");

//call the signed URL to get the raw JSON response
$json = file_get_contents(sign_url("http://webservices.esd.org.uk/data?metricType=1&area=AllBoroughInRegion_London&period=latest&value1.valueType=raw&outputType=table&columnGrouping=metricType&columnGrouping=period&rowGrouping=area&headerCellType=label", "YOUR_PUBLIC_PRIVATE_KEY", "YOUR_PUBLIC_PRIVATE_SECRET"));

//convert the JSON into a PHP object
$data = json_decode($json);

//Loop through each row and output the area label and value
foreach($data->rows as $row)
{
	echo $row->area->label . " has a population of " . $row->values[0]->formatted ;
	echo "<br/>";
}
?>