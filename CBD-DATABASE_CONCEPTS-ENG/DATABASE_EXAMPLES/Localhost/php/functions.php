<?php

function redirect($data){
    if( isset ($data['status']) ){
    header('Location: index.php?status=' .$data['status']);
    }
}

function modal($modal_id, $modal_body, $modal_title){
    include('php/modal.php');
}