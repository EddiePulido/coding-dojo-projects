<?php

  class Games extends CI_Controller{

    public function index(){

      $gold = $this->session->userdata('gold');
      $activity = $this->session->userdata('activity');

      if (!$gold) { $this->session->set_userdata('gold', 0); }
      if (!$activity) { $this->session->set_userdata('activity', array()); }

      $this->load->view('games');

    }

    public function process_money(){
      $building = $this->input->post('building');
      $gold = $this->session->userdata('gold');

      switch ($building) {
        case 'farm':
          $current_gold = $this->set_gold($gold, 10, 20);
          $this->set_activity($current_gold , 'farm');
          break;
        case 'cave':
          $current_gold = $this->set_gold($gold, 5, 10);
          $this->set_activity($current_gold , 'cave');
          break;
        case 'house':
          $current_gold = $this->set_gold($gold, 2, 5);
          $this->set_activity($current_gold , 'house');
          break;
        case 'casino':

          $activity = $this->session->userdata('activity');
          $win_or_lose_gold = rand(0,1);
          $current_gold = rand(0,50);

          if ($win_or_lose_gold == 1) {
            $this->session->set_userdata('gold', $gold + ($current_gold));
            array_push($activity, "<div class = 'green'>Entered a casino and earned " . $current_gold . " golds! (" . date('Y/m/t g:s a') . ")</div>");
            $this->session->set_userdata('activity',$activity);
          }else{
            $this->session->set_userdata('gold', $gold - ($current_gold));
            array_push($activity, "<div class = 'red'>Entered a casino and lost " . $current_gold . " golds... Ouch... (" . date('Y/m/t g:s a') . ")</div>");
            $this->session->set_userdata('activity',$activity);
          }

          break;

      }

      redirect('/games/result');

    }

    public function set_activity($gold, $building){
      $activity = $this->session->userdata('activity');
      array_push($activity, "<div class = 'green'>Earned " . $gold . " golds from the " . $building . "! (" . date('Y/m/t g:s a') . ")</div>");
      $this->session->set_userdata('activity',$activity);
    }

    public function set_gold($gold, $num1, $num2){
      $current_gold = rand($num1,$num2);
      $this->session->set_userdata('gold', ($current_gold) + $gold);
      return $current_gold;
    }

    public function result(){
      redirect('/');
    }

  }

?>
