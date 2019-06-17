<?php

//    include 'includes/session.php';
include 'includes/db.php';
require_once "includes/header.php";


$default_page = 'pages/front.php';

$page = (isset($_GET['page'])) ? "pages/" . $_GET['page'] . '.php' : $default_page;

if (file_exists($page)) {
    include_once( $page );
} else {
    // not found page
    include_once 'pages/404.php';
}

include_once "includes/footer.php";
