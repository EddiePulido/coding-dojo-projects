<?php

  class Products extends CI_Controller{

    public function index(){
      $products = $this->session->userdata('products');
      $errors = $this->session->flashdata('errors');
      if (!$products) { $this->session->set_userdata('products', array()); }
      if (!$errors) { $this->session->set_flashdata('errors', ""); }
      $this->load->view('/products');
    }

    public function create(){
      $this->load->view('create_product');
    }

    public function retrieve(){
      $this->load->model('Product');
      $products = $this->Product->retrieve_product();
      $this->session->set_userdata('products', $products);
      redirect('/');
    }

    public function retrieve_one($id){

      $this->load->model('Product');
      $product['product'] = $this->Product->retrieve_one_product($id);
      $this->load->view('/show_product', $product);
    }

    public function update($id){
      $this->load->model('Product');
      $product['product'] = $this->Product->retrieve_one_product($id);
      $this->load->view('update_product', $product);
    }

    public function delete($id){
      $products = $this->session->userdata('products');
      $this->load->model('Product');
      $this->Product->delete_product($id);
      foreach($products as $index => $item){
        foreach ($item as $key => $value) {
          if ($key == 'id') {
            if($id == $value){
              unset($products[$index]);
            }
          }
        }
      }
      $this->session->set_userdata('products',$products);
      redirect('/');
    }

    public function create_product(){
      $product = $this->input->post();
      $this->load->model('Product');
      $validation = $this->Product->validate($product);
      if ($validation === true) {
        $this->Product->create_product($product);
        redirect('/products/retrieve');
      }else {
        $this->session->set_flashdata('errors', $validation);
        redirect('/products/create');
      }
    }

    public function update_product($id){
      $product = $this->input->post();
      $product['id'] = $id;
      $this->load->model('Product');
      $validation = $this->Product->validate($product);
      if ($validation === true) {
        $this->Product->update_product($product);
        $all_product = $this->Product->retrieve_product();
        $this->session->set_userdata('products', $all_product);
        redirect('/');
      }else{
        $this->session->set_flashdata('errors', $validation);
        redirect('/products/update/'. $id);
      }
    }

  }

?>
