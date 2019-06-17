<?php

$filename = $_POST['data'];

$check_file = '../'.$filename;

if (file_exists($check_file)) {
    echo  $filename; 
} 