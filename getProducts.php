<?php
	/*  Allow All Access  */
	header("Access-Control-Allow-Origin: *");

	/*  Set Your Shopify Credentials  */
	$shopDomain = "xxx.myshopify.com/admin/";
	$apiKey = "xxx";
	$apiPass = "xxx";

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
