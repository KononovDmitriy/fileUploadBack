<?php 
include_once 'getFileName.php';

function getImgType($type) {
	$types = explode('/', $type);
	return $types[1];
}

function clearDir() {
	exec('rm ' . UPLOAD_PATH . '/*');
}

function fileUpload() {
	$UPLOAD_FILE_NAME = getFileName() . '.' . getImgType($_FILES[USER_FILE]['type']);

	$UPLOAD_IMAGE_PATH = UPLOAD_PATH . $UPLOAD_FILE_NAME;
	$IMG_URL = UPLOAD_DIR . $UPLOAD_FILE_NAME;

	clearDir();
	
	if (!move_uploaded_file($_FILES[USER_FILE][TMP_NAME], $UPLOAD_IMAGE_PATH)) {
		return ERROR;
	} 
		return $IMG_URL;
	}
?>