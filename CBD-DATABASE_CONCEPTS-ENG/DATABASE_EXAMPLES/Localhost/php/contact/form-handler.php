<?php
// DELETE

// READ

// POSTBACK
$form['textbox'] = $_POST['textbox'];

// REQUIRED
if( empty($_POST['textbox']) ){
    $form['error'] = "Must provide a value";
    return $form;
}

// VALIDATION
if( !is_numeric($form['textbox']) && $form['textbox'] <= 0 ){
    $form['error'] = "Provide a number greater than zero";
    return $form;
}

// CREATE
if( $index == 'contact/form' && $action == 'new' ){
    $form['status'] = 'success';
    return ($form);
}

// UPDATE
