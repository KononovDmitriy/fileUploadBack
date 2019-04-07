<?php  
include_once 'constants.php';
include_once 'post_api.php';

$API = explode('/', QUERY);
$API = $API[2];

switch (METHOD) {
	case POST:
		postApi($API);
		break;
}
?>