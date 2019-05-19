<?php

$query = "SELECT * FROM table";

$last_index = $request->header('Last-Index');
$paginate = $request->header('Paginate');
$direction = $request->header('Direction');
$offset = 0;

if(strcasecmp($direction, "forward") == 0) {
    $offset = $last_index + 1;
} else {
    $offset = ($last_index - $paginate) + 1;

    if ($offset < 0) {
        $offset = 0;
    }
}

$query = $query . " LIMIT 10 OFFSET " . $offet;

?>
