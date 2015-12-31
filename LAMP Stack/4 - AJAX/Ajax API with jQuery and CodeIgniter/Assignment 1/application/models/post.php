<?php

  class Post extends CI_Model{

    public function __construct(){
      parent::__construct();
    }

    public function notes_api(){
      $query = 'select * from post';
      return $this->db->query($query)->result_array();
    }

    public function create($note){
      $query = 'insert into post (description, created_at) values (?,?)';
      $parameter = array($note['description'], date("Y-m-d h:i:sa"));
      $this->db->query($query, $parameter);
    }

  }

?>
