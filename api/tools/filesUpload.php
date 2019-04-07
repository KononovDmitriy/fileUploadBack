<?php 
include_once 'getFileName.php';

function _getImgType($type) {
	
	$types = explode('/', $type);
	return $types[1];
}

function _clearDir() {
	exec('rm ' . UPLOAD_PATH . '/*');
}

function _moveUploadedFile($file) {
	
	$type = _getImgType($file['type']);
	$uploadFileName = getFileName() . '.' .$type;
	$uploadImagePath = UPLOAD_PATH . $uploadFileName;
	$pathToFile = UPLOAD_DIR . $uploadFileName;

	if (!move_uploaded_file($file[TMP_NAME], $uploadImagePath)) {
		return ERROR;
	} 
		return $pathToFile;
}

function filesUpload() {


	_clearDir();

	$response = [];

	foreach ($_FILES as $file) {
		$pathToFile = _moveUploadedFile($file);
		// print_r($pathToFile);

		if(!$pathToFile) {
			return ERROR;
		}

		array_push($response, [
			'name' => $file['name'],
			'url' => HTTP_PROTOCOL . SERVER_ADDR . $pathToFile
		]);
	}

	return $response;

}
	
	
?>