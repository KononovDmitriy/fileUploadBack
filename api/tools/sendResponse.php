<?php 

function jsonEncode($status, $imgUrl) {
	$obj = array('status' => $status, 'imgUrl' => $imgUrl);
	return json_encode($obj);
}

function sendResponse($status, $imgUrl) {
	echo jsonEncode($status, $imgUrl);
}

?>
