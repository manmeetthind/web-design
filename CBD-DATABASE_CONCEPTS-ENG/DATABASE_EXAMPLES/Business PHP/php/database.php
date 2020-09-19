<?php if( !defined('PHP_') ){ die('No direct script access'); }

function connect(){
  return new mysqli('localhost','root','root','company');
}
