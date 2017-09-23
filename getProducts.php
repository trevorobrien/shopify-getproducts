<?php
	/*  Allow All Access  */
	header("Access-Control-Allow-Origin: *");

	/*  Set Your Shopify Credentials  */
	$shopDomain = "lezazzu-shop.myshopify.com/admin/";
	$apiKey = "abf46b4a8fa3e586f712b4971d382d09";
	$apiPass = "701be24407ae8436c94c4a612822ba3d";

	/*  Read API call */
	$apiCall = $_REQUEST["call"];

	/*  Create the CAll  */
	$url = "https://" . $apiKey . ":" . $apiPass . "@" . $shopDomain . $apiCall;

	/*  Open a Handle     */
	$handle = fopen($url, "r");  

	/*  Return Response   */
	if ($handle)
	{
		while (!feof($handle)){
			$buffer = fgets($handle, 4096);
			print $buffer;
		}
		/*  Close Buffer when Done  */
		fclose($handle);
	}else{
		echo "error";
	}
?>