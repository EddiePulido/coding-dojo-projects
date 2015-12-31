<?php

  class Course extends CI_Model{

    function add_course($course){
      $query = "insert into courses (name, description, created_at) values (?,?,?)";
      $values = array($course['name'],$course['description'],$course['created_at']);
      $this->db->query($query,$values);
    }

    function get(){
      $query = 'select * from courses order by created_at DESC';
      return $this->db->query($query)->result_array();
    }

    function get_id($id){
      $query = 'select * from courses where id = ?';
      $get_id = array($id);
      return $this->db->query($query, $get_id)->row_array();
    }

    function remove($id){
      $query = 'delete from courses where id = ?';
      $get_id = array($id);
      return $this->db->query($query, $get_id);
    }

  }

?>
