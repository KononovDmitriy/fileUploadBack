<?php
	define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT']);
	define('SERVER_ADDR', $_SERVER['SERVER_ADDR']);
	define('HTTP_PROTOCOL', 'http://');
	define('METHOD', $_SERVER['REQUEST_METHOD']);
	define('QUERY', $_SERVER['REQUEST_URI']);

	define('USER_FILE', 'img');
	define('TMP_NAME', 'tmp_name');
	
	define('GET', 'GET');
	define('POST', 'POST');

	define('UPLOAD', 'upload');
	define('UPLOAD_DIR', '/upload/');
	define('UPLOAD_PATH', SERVER_PATH . UPLOAD_DIR);
	
	define('ERROR', 'ERROR');
	define('SUCCESS', 'SUCCESS');

	define('CHAR_NOTEPAD', array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0'));

?>