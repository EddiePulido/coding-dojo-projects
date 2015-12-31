<?php

  class Login extends CI_Controller{

      public function index(){
        $login_errors = $this->session->flashdata('login_errors');
        $register_errors = $this->session->flashdata('register_errors');
        $logged_in = $this->session->userdata('logged_in');
        if (!$login_errors) { $this->session->set_flashdata('login_errors', ''); }
        if (!$register_errors) { $this->session->set_flashdata('register_errors', ''); }
        if (!$logged_in) { $this->session->set_userdata('logged_in', false); }
        $this->load->view('login');
      }

      public function register_user(){
        $info = $this->input->post();
        $this->load->model('Login_model');
        $email_check = $this->Login_model->email_check($info);
        if(empty($email_check)){
          $validate = $this->Login_model->validate($info);
          if ($validate === true) {
            $this->Login_model->register_user($info);
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('fname', $info['fname']);
            $this->session->set_userdata('lname', $info['lname']);
            $this->session->set_userdata('email', $info['email']);
            redirect('/profile');
          }else {
            $this->session->set_flashdata('register_errors', $validate);
            redirect('/');
          }
        }else {
          $this->session->set_flashdata('register_errors', "The email is already taken.");
          redirect('/');
        }
      }

      public function login_user(){
        $info = $this->input->post();
        $this->load->model('Login_model');
        $login = $this->Login_model->login_user($info);
        if (!empty($login)) {
          $this->session->set_userdata('fname', $login['first_name']);
          $this->session->set_userdata('lname', $login['last_name']);
          $this->session->set_userdata('email', $login['email']);
          $this->session->set_userdata('logged_in', true);
          redirect('/profile');
        }else{
          $this->session->set_flashdata('login_errors', "The email or password is incorrect.");
          redirect('/');
        }
      }

      public function profile(){
        $this->load->view('profile');
      }

      public function logout(){
        $this->session->sess_destroy();
        redirect('/');
      }

  }

?>
