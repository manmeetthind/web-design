<?php


class Pages extends CI_Controller{

  function index(){

  }

  function view($page="blank"){

    if( ! file_exists(APPPATH."views/pages/".$page.".php")){
      show_404();
    }

    $data['title'] = ucfirst($page);
    $this->load->view('template/header',$page);
		$this->load->view('pages/'.$page);
		$this->load->view('template/footer');

  }

}
