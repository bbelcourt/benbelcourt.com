<?php

$siteLocation = $_SERVER["SERVER_NAME"];

switch ($siteLocation) {
	case "benbelcourt.local":
		$URL_ROOT = "http://benbelcourt.local/";
		$PATH_ROOT = "/Users/benbelcourt/Sites/benbelcourt/www/";
		break;
		
	case "benbelcourt.com":
		$URL_ROOT = "http://benbelcourt.com/";
		$PATH_ROOT = "/home/codion_www/benbelcourt.com/httpdocs/";
		break;
		
	default:
		
}
?>
