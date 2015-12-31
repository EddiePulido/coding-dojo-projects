<?php

  class Surveys extends CI_Controller{

    public function __construct(){

      parent::__construct();

    }

    public function main(){

      //$this->output->enable_profiler(TRUE);
      $this->load->view("surveys");

    }

    public function process_form(){

      //$this->output->enable_profiler(TRUE);

      $name = $this->input->post('name');
      $location = $this->input->post('location');
      $language = $this->input->post('language');
      $comment = $this->input->post('comment');

      $this->session->set_flashdata('name', $name);
      $this->session->set_flashdata('location', $location);
      $this->session->set_flashdata('language', $language);
      $this->session->set_flashdata('comment', $comment);
      if ($this->session->userdata('submitted')) {
        $submitted = $this->session->userdata('submitted');
        $this->session->set_userdata('submitted', $submitted + 1);
      }else{
        $this->session->set_userdata('submitted', 1);
      }

      redirect("/result");

    }

    public function result(){

      //$this->output->enable_profiler(TRUE);

      $data['data'] = array();
      $data['data']['name'] = $this->session->flashdata('name');
      $data['data']['location'] = $this->session->flashdata('location');
      $data['data']['language'] = $this->session->flashdata('language');
      $data['data']['comment'] = $this->session->flashdata('comment');

      $this->load->view('results', $data);

    }

  }

?>
