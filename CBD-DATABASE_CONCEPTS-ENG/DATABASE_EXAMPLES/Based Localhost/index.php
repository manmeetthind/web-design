<?php
include('php/functions.php');

$pages = [
    'home'=>"Welcome Home",
    'about'=>"About Us",
    'contact/form'=>"Contact Form",
    'contact/form/new'=>"New Contact"
];

if( isset($_GET['p']) && isset($pages[$_GET['p']]) ){
    $index = $_GET['p'];
}else{
    $index = 'home';
}

if( isset($_POST['action']) ){
    $action = isset( $pages[$index.'/'.$_POST['action']] ) ? $_POST['action'] : FALSE;
}

if( isset($action) ){
    $form = include('php/'.$index.'-handler.php');
    extract($form);
}

include('php/header.php');
include('php/'.$index.'.php');
include('php/footer.php');