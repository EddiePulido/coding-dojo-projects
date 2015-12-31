<?php

  class Product extends CI_Model{

    public function create_product($product){
      $query = 'insert into products (name,description,price) values (?,?,?)';
      $parameter = array($product['name'], $product['description'], $product['price']);
      return $this->db->query($query, $parameter);
    }

    public function retrieve_product(){
      $query = 'select * from products';
      return $this->db->query($query)->result_array();
    }

    public function retrieve_one_product($id){
      $query = 'select * from products where id = ?';
      $parameter = array($id);
      return $this->db->query($query,$parameter)->row_array();
    }

    public function update_product($product){
      $query = 'update products set name=?,description=?,price=? where id = ?';
      $parameter = array($product['name'], $product['description'], $product['price'], $product['id']);
      return $this->db->query($query,$parameter);
    }

    public function delete_product($id){
      $query = 'delete from products where id = ?';
      $parameter = array($id);
      return $this->db->query($query,$parameter);
    }

    public function validate($product){
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');
      $this->form_validation->set_rules('price', 'Price', 'required|numeric');
      if ($this->form_validation->run()) {
        return true;
      }else{
        return validation_errors();
      }
    }

  }

?>
