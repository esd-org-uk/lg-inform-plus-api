<?php
/*
This file contains the functions we use to sign a web request with a Public Private Key
(PPK). A PPK contains two main components the public key and the private secret. You should
never share your secret publicly as it will allow other user to use your allowance.

This code can be found here: http://www.esd.org.uk/sign/code.html
*/

//Use this function to sign a URL request
function sign_url($url, $key, $secret)
{
	//Add your application key to the URL
    if (strpos($url,'?') !== false)
    {
    	$url .= "&";
    }
    else
    {
    	$url .= "?";
    }
    $url .= "ApplicationKey=" . $key;

	//Hash the URL with your secret
    $signature = hash_hmac("sha1", urldecode($url), $secret);
    //Add the secret to the URL and covert to base64
    $url .= "&Signature=" . hex_to_base64($signature);

    return $url;
}

/*
This function is required by the sign_url function and should not be required by
your application.
*/
function hex_to_base64($hex){
  $return = '';
  foreach(str_split($hex, 2) as $pair){
    $return .= chr(hexdec($pair));
  }
  return base64_encode($return);
}
?>