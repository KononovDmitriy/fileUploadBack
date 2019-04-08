<?php
include_once 'constants.php'; 
include_once './tools/filesUpload.php'; 
include_once './tools/sendResponse.php'; 
	
function postApi($API) {
	switch ($API) {
		case UPLOAD:
			
			$uploadedFilesList = filesUpload();	

			if (!$uploadedFilesList) {
			  echo sendResponse(ERROR);
			} else {
			  echo sendResponse(SUCCESS, $uploadedFilesList);	
			}
			
			break;
	}
}

 ?>