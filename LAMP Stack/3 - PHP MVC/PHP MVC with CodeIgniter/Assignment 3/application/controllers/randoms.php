<?php

  class Randoms extends CI_Controller{

    public function index(){

      $attempts = $this->session->userdata('attempt');
      $random_word = $this->session->userdata('random_word');

      if (!$attempts) { $this->session->set_userdata('attempt', 1); }
      if (!$random_word) { $this->generate_word(); }

      $this->load->view("randoms");

    }

    public function randomize(){

      $attempts = $this->session->userdata('attempt');
      $this->generate_word();

      if ($attempts) {
        $current_session = $attempts;
        $this->session->set_userdata('attempt', $current_session + 1);
      }else{
        $this->session->set_userdata('attempt', 1);
      }

      redirect('/randoms/result');

    }

    public function generate_word(){

      $random_word = $this->session->userdata('random_word');
      $character = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $word = null;

      for($x = 0 ; $x < 14 ; $x++){
        $word .= $character[rand(0, strlen($character)-1)];
      }

      if($random_word){
        $this->session->set_userdata('random_word', $word);
      }else{
        $this->session->set_userdata('random_word', $word);
      }

    }

    public function result(){
      redirect('/');
    }

  }

?>
