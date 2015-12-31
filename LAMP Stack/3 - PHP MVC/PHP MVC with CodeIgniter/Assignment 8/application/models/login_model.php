<?php

  class Login_model extends CI_Model{

    public function register_user($info){
      if ($info['password'] == $info['confirm_password']) {
        $query = 'insert into users (first_name,last_name,email,password) values (?,?,?,?)';
        $parameter = array($info['fname'], $info['lname'], $info['email'], $info['password']);
        return $this->db->query($query, $parameter);
      }else{
        $this->session->set_flashdata('register_errors', '<p>The password you entered does not match.</p>');
        redirect('/');
      }
    }

    public function login_user($info){
      $query = 'select * from users where email = ? and password = ?';
      $parameter = array($info['email'], $info['password']);
      return $this->db->query($query, $parameter)->row_array();
    }

    public function email_check($info){
      $query = 'select * from users where email = ?';
      $parameter = array($info['email']);
      return $this->db->query($query, $parameter)->row_array();
    }

    public function validate($info){
      $this->form_validation->set_rules('fname','First Name','required');
      $this->form_validation->set_rules('lname','Last Name','required');
      $this->form_validation->set_rules('email','Email','required|valid_email');
      $this->form_validation->set_rules('password','Password','required|min_length[8]');
      $this->form_validation->set_rules('confirm_password','Confirm Password','required');

      if ($this->form_validation->run()) {
        return true;
      }else{
        return validation_errors();
      }
    }

  }

?>
