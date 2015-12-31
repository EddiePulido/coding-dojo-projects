<?php

  class Posts extends CI_Controller{

    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $this->load->view('posts');
    }

    public function notes_json_api(){
      $this->load->model('Post');
      $data['notes'] = $this->Post->notes_api();
      echo json_encode($data);
    }

    public function notes_html_api(){
      $this->load->model('Post');
      $data['notes'] = $this->Post->notes_api();
      $this->load->view('posts_partial', $data);
    }

    public function create(){
      $note = $this->input->post();
      $this->load->model('Post');
      $this->Post->create($note);
      $data['notes'] = $this->Post->notes_api();
      $this->load->view('posts_partial', $data);
    }

  }

?>
