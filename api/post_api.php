<?php
include_once 'constants.php'; 
include_once './tools/filesUpload.php'; 
include_once './tools/sendResponse.php'; 
	
function postApi($API) {
	switch ($API) {
		case UPLOAD:
			
			$uploadedFilesList = filesUpload();	

			if ($uploadedFilesList == ERROR) {
			  echo sendResponse(ERROR, 'Ошибка');
			} else {
			  echo sendResponse(SUCCESS, $uploadedFilesList);	
			}
			
			break;
	}
}

 ?>