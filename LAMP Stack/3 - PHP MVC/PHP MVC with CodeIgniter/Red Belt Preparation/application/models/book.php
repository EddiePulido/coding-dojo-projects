<?php

  class Book extends CI_Model{

    public function __construct(){
      parent::__construct();
    }

    public function get_book_id($book){
      $query = 'select * from books where title = ?';
      $parameter = array($book['title']);
      return $this->db->query($query, $parameter)->row_array();
    }

    public function add_book($book){
      $query = 'insert into books (title,author,created_at) values (?,?,?)';
      $parameter = array($book['title'], $book['author'], date('Y-m-d h:i:sa'));
      $this->db->query($query, $parameter);
    }

    public function validate($book){

      if ($book['rating'] === 'Select Rating') {
        return '<p>Please choose a rating.</p>';
      }

      $this->form_validation->set_rules('title','Title','required');
      $this->form_validation->set_rules('author','Author','required');
      $this->form_validation->set_rules('review','Review','required');

      if ($this->form_validation->run()) {
        return true;
      }else{
        return validation_errors();
      }
    }

  }

?>
