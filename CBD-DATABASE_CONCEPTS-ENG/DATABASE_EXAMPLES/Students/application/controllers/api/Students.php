<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('students_model');
    }
    public function index(){
        $data = $this->students_model->get_students();
        $this->output->set_content_type('application/json');
        $this->output->set_output( json_encode($data) );
    }
    public function view($code){
        $data = $this->students_model->get_student_by_code($code);
        $this->output->set_output( json_encode($data) );
    }
}