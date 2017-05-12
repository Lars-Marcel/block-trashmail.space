<?php
function isTrashmail($email) {
	$result = "0";
	$domain = substr(strrchr($email, "@"), 1);
	
	if (function_exists('curl_init')) {
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,"https://www.block-trashmail.space/api/".$domain);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
		$result = curl_exec($ch);
		curl_close($ch);
	} else {
		$result = file_get_contents("https://www.block-trashmail.space/api/".$domain);
	}
	
	if ($result == "1") {
		return true;
	}
	return false;
}
?>