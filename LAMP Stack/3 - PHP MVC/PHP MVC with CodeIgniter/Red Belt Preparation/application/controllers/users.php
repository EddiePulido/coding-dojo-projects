<?php

  class Users extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model('User');
    }

    public function index(){
      $login_errors = $this->session->flashdata('login_errors');
      $register_errors = $this->session->flashdata('register_errors');
      $logged_in = $this->session->userdata('logged_in');
      if (!$login_errors) { $this->session->set_flashdata('login_errors', ''); }
      if (!$register_errors) { $this->session->set_flashdata('register_errors', ''); }
      if (!$logged_in) { $this->session->set_userdata('logged_in', false); }
      $this->load->view('login_register');
    }

    public function register(){
      $user = $this->input->post();
      $validate = $this->User->register_validate($user);
      if ($validate === true) {
        if ($user['password'] === $user['confirm_password']) {
          $this->User->register($user);
          $id = $this->User->get_id($user['email']);
          $this->session->set_userdata('id', $id['id']);
          $this->session->set_userdata('name', $user['name']);
          $this->session->set_userdata('alias', $user['alias']);
          $this->session->set_userdata('email', $user['email']);
          $this->session->set_userdata('logged_in', true);
          redirect('/users/profile');
        }else {
          $this->session->set_flashdata('register_errors', "The password does not match.");
          redirect('/');
        }
      }else{
        $this->session->set_flashdata('register_errors', $validate);
        redirect('/');
      }
    }

    public function login(){
      $user = $this->input->post();
      $validate = $this->User->login_validate($user);
      if ($validate === true) {
        $user_data = $this->User->login($user);
        if ($user_data !== null) {
          $this->session->set_userdata('logged_in', true);
          $this->session->set_userdata('id', $user_data['id']);
          $this->session->set_userdata('name', $user_data['name']);
          $this->session->set_userdata('alias', $user_data['alias']);
          $this->session->set_userdata('email', $user_data['email']);
          redirect('/users/profile');
        }else{
          $this->session->set_flashdata('login_errors', "The credentials provided are incorrect.");
          redirect('/');
        }
      }else{
        $this->session->set_flashdata('login_errors', $validate);
        redirect('/');
      }
    }

    public function read_id($id){
        $user_data['user_data'] = $this->User->read_id($id);
        $this->load->model('Review');
        $user_data['total_review'] = $this->Review->get_book_review_by_id($id);
        $user_data['all_books_reviewed'] = $this->Review->all_books_reviewed($id);
        $this->load->view('user_info', $user_data);
    }

    public function logout(){
      $this->session->sess_destroy();
      redirect('/');
    }

    public function profile(){
      $this->load->model('Review');
      $review['book_with_review'] = $this->Review->all_review_title();
      $review['recent_book'] = $this->Review->recent_book();
      $this->load->view('profile', $review);
    }

  }

?>
