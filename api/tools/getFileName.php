<?php
// include_once 'constants.php';

	function getFileName() {

		$name = '';

		for($i = 0; $i < 11; $i++) {
			$name = $name . CHAR_NOTEPAD[rand(0, 35)];
		}

		return $name;
	}

 ?>