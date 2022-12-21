
<?php

$mysqli = new mysqli( "", "", "", "");

if ($mysqli->connect_errno) {
    printf("No connection: %s\n", $mysqli->connect_error);
    exit();
}

