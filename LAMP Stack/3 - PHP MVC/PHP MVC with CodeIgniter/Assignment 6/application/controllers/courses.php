<?php

  class Courses extends CI_Controller{

    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $courses = $this->session->userdata('courses');
      $errors = $this->session->flashdata('errors');
      if (!$courses) { $this->session->set_userdata('courses',array()); }
      if (!$errors) { $this->session->set_flashdata('errors',array()); }
      $this->load->view('courses');
    }

    public function add(){
      $this->form_validation->set_rules('name','Name','min_length[15]|required');
      if ($this->form_validation->run() == false) {
        $errors = array();
        array_push($errors,validation_errors());
        $this->session->set_flashdata('errors',$errors);
        redirect('/');
      }else{
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $created_at = date("Y-m-d, H:i:s");
        $value = array('name'=> $name,'description'=> $description,'created_at'=> $created_at);
        $this->load->model('Course');
        $this->Course->add_course($value);
        redirect('/courses/get');
      }
    }

    public function get(){
      $this->load->model('Course');
      $courses = $this->Course->get();
      $this->session->set_userdata('courses',$courses);
      redirect('/courses/result');
    }

    public function destroy($id){
      $this->load->model('Course');
      $get_course_by_id = $this->Course->get_id($id);
      $course_remove = array('course_remove' => $get_course_by_id);
      $this->load->view('remove_courses', $course_remove);
    }

    public function remove($id){
      $courses = $this->session->userdata('courses');
      $this->load->model('Course');
      $this->Course->remove($id);

      foreach ($courses as $item) {
        foreach ($item as $key => $value) {
          if($id == $value){
            unset($courses[$x]);
            $this->session->set_userdata('courses', $courses);
          }
        }
      }
      redirect('/');
    }

    public function result(){
      redirect('/');
    }

  }

?>
