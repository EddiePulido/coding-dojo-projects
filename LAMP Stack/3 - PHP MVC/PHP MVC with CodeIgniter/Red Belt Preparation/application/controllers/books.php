<?php

  class Books extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model(array('Book', 'Review'));
      $reviews = $this->session->userdata('reviews');
      if (!$reviews) { $this->session->set_userdata('reviews', array()); }
    }

    public function add(){
      $add_books_errors = $this->session->flashdata('add_books_errors');
      if (!$add_books_errors) { $this->session->set_flashdata('add_books_errors',''); }
      $this->load->view('add_book');
    }

    public function add_book(){
      $book = $this->input->post();
      $validation = $this->Book->validate($book);
      if ($validation === true) {
        $this->Book->add_book($book);
        $id = $this->Book->get_book_id($book);
        $this->Review->add_book_review($book, $id);
        redirect('/reviews/load_review/' . $id['id']);
      }else{
        $this->session->set_flashdata('add_books_errors',$validation);
        redirect('/books/add');
      }
    }

    public function specific_book($id){
      $book['book_id'] = array('id' => $id);
      $add_reviews_errors = $this->session->flashdata('add_reviews_errors');
      if (!$add_reviews_errors) { $this->session->set_flashdata('add_reviews_errors',''); }
      $this->load->view('specific_book', $book);
    }

  }

?>
