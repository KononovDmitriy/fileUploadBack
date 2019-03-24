<?php
include_once 'constants.php'; 
include_once './tools/fileUpload.php'; 
include_once './tools/sendResponse.php'; 
	
function postApi($API) {
	switch ($API) {
		case UPLOAD:
			
			$tmp = fileUpload();	

			if ($tmp == ERROR) {
			  echo sendResponse(ERROR, 'Ошибка');
			} else {
			  echo sendResponse(SUCCESS, $tmp);	
			}
			
			break;
	}
}

 ?>