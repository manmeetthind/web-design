<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students_model extends CI_Model {

    public function __construct(){
        parent::__construct();

        //Check config/database.php
        $this->load->database();
    }

    public function get_students(){
        $result = $this->db->get('students');
        return $result->result_array();
    }

    public function get_student_by_code($code){
        $result = $this->db->get_where('students', array('code'=>$code));
        return $result->result_array();
    }

}