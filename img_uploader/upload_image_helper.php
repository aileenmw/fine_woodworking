<?php

include 'db.php';

if ($mysqli->connect_errno) {
    printf("No connection: %s\n", $mysqli->connect_error);
    exit();
}

if ((count($_POST) > 0) OR ( count($_FILES) > 0)) {
    $text = $_POST['text'];
    $name = utf8_decode($_POST['name']);
    $filename = $_FILES["myimage"]["name"];
    $microtime = microtime();
    $microtime_arr = explode(' ', $microtime);
    $filename = $microtime_arr[1] . '_' . $filename;
    $img_path = '../../assets/img/slides/' . $filename;
    $tmp_name = $_FILES["myimage"]['tmp_name'];



    if (move_uploaded_file($tmp_name, $img_path)) {

        $sql_upload = "INSERT INTO `ucl_web`( `name`, `img`, `text`) VALUES ('$name', '$filename', '$text')";
        $mysqli->query($sql_upload);
        echo 'Your picture has been uploaded';
    } else {
        echo 'Your picture has been uploaded';
    }
}