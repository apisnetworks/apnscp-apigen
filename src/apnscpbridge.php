<?php
	$dirs = explode(DIRECTORY_SEPARATOR, __DIR__);
	for ($i = count($dirs)-1; $i >= 0; $i--) {
		$dir = join(DIRECTORY_SEPARATOR, array_slice($dirs, 0, $i));
		if (file_exists($dir . '/.platform.version')) {
			break;
		}
	}
	ini_set('memory_limit', '2048m');
	define('STUB', true);
	define('INCLUDE_PATH', $dir);
	require INCLUDE_PATH . '/lib/apnscpcore.php';
