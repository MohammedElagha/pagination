<?php

$query = "SELECT * FROM table";

$offset = 0;

if (isset($_GET['page'])) {
    $page = $_GET['page'];

	$offet = 0;

	if ($page > 1) {
		$offet = (($page-1)*10)-1;
	}
} 

$query = $query . " LIMIT 10 OFFSET " . $offet;

?>
