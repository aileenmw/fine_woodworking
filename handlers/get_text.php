<?php

//ini_set('display_errors', 1);
include '../includes/db.php';

$name = $_POST[name];

$sql = "SELECT `text` FROM `ucl_web` WHERE `name` = '$name'";
$data = $mysqli->query($sql);

while($obj = $data->fetch_object()){
   $text = $obj->text;
   echo $text;
}