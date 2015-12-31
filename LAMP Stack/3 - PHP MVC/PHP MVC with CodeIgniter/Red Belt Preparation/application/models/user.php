<?php

  class User extends CI_Model{

    public function register($user){
      $query = 'insert into users (name,alias,email,password,created_at) values (?,?,?,?,?)';
      $parameter = array($user['name'], $user['alias'], $user['email'], $user['password'], date('Y-m-d h:i:sa'));
      return $this->db->query($query, $parameter);
    }

    public function login($user){
      $query = 'select * from users where email = ? and password = ?';
      $parameter = array($user['email'], $user['password']);
      return $this->db->query($query, $parameter)->row_array();
    }

    public function get_id($email){
      $query = 'select * from users where email = ?';
      $parameter = array($email);
      return $this->db->query($query, $parameter)->row_array();
    }

    public function read_id($id){
      $query = 'select * from users where id = ?';
      $parameter = array($id);
      return $this->db->query($query, $parameter)->row_array();
    }

    public function register_validate($user){
      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('alias','Alias','required');
      $this->form_validation->set_rules('email','Email','required|valid_email');
      $this->form_validation->set_rules('password','Password','required|min_length[8]');
      $this->form_validation->set_rules('confirm_password','Confirm Password','required');

      if ($this->form_validation->run()) {
        return true;
      }else{
        return validation_errors();
      }
    }

    public function login_validate($user){
      $this->form_validation->set_rules('email','Email','required|valid_email');
      $this->form_validation->set_rules('password','Password','required|min_length[8]');

      if ($this->form_validation->run()) {
        return true;
      }else{
        return validation_errors();
      }
    }

  }

?>
