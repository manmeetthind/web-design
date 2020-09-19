<?php

class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model','model');
        }

        public function index()
        {
                $data['news'] = $this->model->get_all();
                $data['title'] = 'News';
                $this->load->view('template/header',$data);
                $this->load->view('news/index',$data);
                $this->load->view('template/footer',$data);
        }

        public function view($slug = NULL)
        {
                $data['item'] = $this->model->get_by_slug($slug);

                if (empty($data['item']))
                {
                        show_404();
                }

                $data['title'] = $data['item']['title'];

                $this->load->view('template/header',$data);
                $this->load->view('news/view',$data);
                $this->load->view('template/footer');
        }

        public function create(){
                $this->load->helper('form');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                $data['title'] = 'Create News';

                if ($this->form_validation->run() === FALSE)
                {
                   $this->load->view('template/header',$data);
                   $this->load->view('news/create',$data);
                   $this->load->view('template/footer',$data);

                 }
                 else
                 {
                     $this->model->set_news();
                     redirect('news');
                 }
        }

        public function update($id = NULL)
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                if( is_numeric($id) ){
                $data['item'] = $this->model->get_by_id($id);
                }
                if (empty($data['item']))
                {
                        show_404();
                }

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                  $data['title'] = 'Update ';
                  $this->load->view('template/header',$data);
                  $this->load->view('news/update',$data);
                  $this->load->view('template/footer');
                 }
                 else
                 {
                     $this->model->update_news($id);
                     redirect('news');
                 }
          }

          public function trash(){
            $data['news'] = $this->model->get_all(1);
            $data['title'] = 'Deleted News';
            $this->load->view('template/header',$data);
            $this->load->view('news/trash',$data);
            $this->load->view('template/footer',$data);
          }

          public function delete($id = NULL, $soft = TRUE){
            if( is_numeric($id) ){
              if( $soft == TRUE ){
              $this->model->trash($id);
              redirect('news');
            }else{
              $this->load->helper('form');
              $this->load->library('form_validation');

              if( is_numeric($id) ){
              $data['item'] = $this->model->get_by_id($id);
              }

              $this->form_validation->set_rules('confirm', 'Confirm', 'required');
              if ($this->form_validation->run() === FALSE)
              {
                $data['title'] = 'Are you sure?';
                $this->load->view('template/header',$data);
                $this->load->view('news/confirm',$data);
                $this->load->view('template/footer',$data);
              }else {
                $this->model->delete($id);
                redirect('news/trash');
              }
            }
          }
        }
    }
