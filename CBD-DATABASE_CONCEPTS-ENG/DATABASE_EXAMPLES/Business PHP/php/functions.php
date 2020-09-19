<?php if( !defined('PHP_') ){ die('No direct script access'); }

function modal($id,$include,$modal_title='',$data=[]){
  if ( file_exists(PHP_.$include.'.php') ){
    $modal_body = PHP_.$include.'.php';
  }else {
    return false;
  }
  $modal_id = $id;
  extract($data);
  include(PHP_.'modal.php');
}
