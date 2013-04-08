<?php
	function array_sanitize(&$array_item) {
		$array_item = mysql_real_escape_string($array_item);
	}

	function sanitize($data) {
		return mysql_real_escape_string($data);
	}

?>