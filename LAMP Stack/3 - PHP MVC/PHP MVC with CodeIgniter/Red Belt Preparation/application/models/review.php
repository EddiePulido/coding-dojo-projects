<?php

  class Review extends CI_Model{

    public function __construct(){
      parent::__construct();
    }

    public function add_book_review($book, $id){
      $query = 'insert into reviews (comment,rating,created_at,user_id,book_id) values (?,?,?,?,?)';
      $user_id = $this->session->userdata('id');
      $book_id = $id['id'];
      $parameter = array($book['review'], $book['rating'], date('Y-m-d h:i:sa'), $user_id, $book_id);
      $this->db->query($query, $parameter);
    }

    public function add_review($review, $id){
      $query = 'insert into reviews (comment,rating,created_at,user_id,book_id) values (?,?,?,?,?)';
      $user_id = $this->session->userdata('id');
      $parameter = array($review['review'], $review['rating'], date('Y-m-d h:i:sa'), $user_id, $id);
      $this->db->query($query, $parameter);
    }

    public function get_review_by_id($id){
      $query = 'select * from users left join reviews on users.id = reviews.user_id where book_id = ?';
      $parameter = array($id);
      return $this->db->query($query, $parameter)->result_array();
    }

    public function get_book_review_by_id($id){
      $query = 'select count(*) as total from reviews where user_id = ?';
      $parameter = array($id);
      return $this->db->query($query, $parameter)->result_array();
    }

    public function all_books_reviewed($id){
      $query = 'select distinct books.title as title, reviews.book_id from books left join reviews on books.id = reviews.book_id where user_id = ?';
      $parameter = array($id);
      return $this->db->query($query, $parameter)->result_array();
    }

    public function all_review_title(){
      $query = 'select distinct books.title as title, reviews.book_id from books left join reviews on books.id = reviews.book_id ';
      return $this->db->query($query)->result_array();
    }

    public function recent_book(){
      $query = 'select * from reviews join books on reviews.book_id = books.id join users on reviews.user_id = users.id order by reviews.created_at DESC limit 3';
      return $this->db->query($query)->result_array();
    }

    public function remove($id){
      $query = 'delete from reviews where id = ?';
      $parameter = array($id);
      return $this->db->query($query, $parameter);
    }

    public function validate($review){

      if ($review['rating'] === 'Select Rating') {
        return '<p>Please choose a rating.</p>';
      }

      $this->form_validation->set_rules('review','Review','required');

      if ($this->form_validation->run()) {
        return true;
      }else{
        return validation_errors();
      }

    }

  }

?>
