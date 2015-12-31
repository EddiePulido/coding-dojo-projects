<?php

  class Reviews extends CI_Controller{

    public function __construct(){
      parent::__construct();
      $this->load->model('Review');
    }

    public function add_review($id){
      $review = $this->input->post();
      $validation = $this->Review->validate($review);

      if ($validation === true) {
        $this->Review->add_review($review, $id);
        redirect('/reviews/load_review/' . $id);
      }else{
        $this->session->set_flashdata('add_reviews_errors',$validation);
        redirect('/books/specific_book/' . $id);
      }
    }

    public function remove($id, $book_id){
      $this->Review->remove($id);
      redirect('/reviews/load_review/' . $book_id);
    }

    public function load_review($id){
      $reviews = $this->Review->get_review_by_id($id);
      $this->session->set_userdata('reviews', $reviews);
      redirect('/books/specific_book/' . $id);
    }

  }

?>
