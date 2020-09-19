<?php
include('php/functions.php');
/** Define possible rotes with corresponding titles */
$pages = [
    'home'=>"Welcome Home",
    'about'=>"About Us",
    'contact/form'=>"Contact Form",
    // Special access route to allow actions
    'contact/form/new'=>"New Contact"
];

/** Use query string argument p only if it contains a valid pages key */
if( isset($_GET['p']) && isset($pages[$_GET['p']]) ){
    $index = $_GET['p'];
}else{
    $index = 'home'; // Set default index
}

/** Check the presence of the action field in the submited form */
if( isset($_POST['action']) ){
    $action = isset( $pages[$index.'/'.$_POST['action']] ) ? $_POST['action'] : FALSE;
}

if( isset($action) ){
    $form = include('php/'.$index.'-handler.php');
    extract($form);
}else{
    $form = (object)[];
}
if( isset($_GET['json']) ){
    echo json_encode($form);
}else if( isset($_GET['ajax']) ){
    include('php/'.$index.'.php');
}else{
    /** Render the HTML document */
    include('php/header.php');
    include('php/main.php');
    include('php/footer.php');
}