<?php

  class Times extends CI_Controller{

    public function main(){
      $this->output->enable_profiler(TRUE);
      date_default_timezone_set('America/Los_Angeles');
      $data['data'] = array("date" => date("M j, Y \n g:i A"));
      $this->load->view('times', $data);
    }

  }

?>
