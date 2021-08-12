<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $this->load->model('Product_model');
        $data['products'] = $this->Product_model->get_all(null);
        $this->load->view('products', $data);
    }

    public function add()
    {
        $this->load->view('add_product');
    }

    public function create()
    {
        $this->load->model('Product_model');
        $post_data = $this->input->post();
        $this->Product_model->create($post_data);
        redirect('Product');
    }


    public function edit()
    {
        $this->load->model('Product_model');
        $id = $this->input->get("id");
        $data['products'] = $this->Product_model->getDataForUpdate($id);
        $this->load->view('update_product', $data);
       
    }
    public function update(){
        $this->load->model('Product_model');
        $id = $this->input->get("id");
        $postData = $this->input->post();
        $this->Product_model->update($postData,$id);
        redirect('Product');
    }
    public function delete(){
        $this->load->model('Product_model');
        $id = $this->input->get("id");
        $this->Product_model->delete($id);
        redirect('Product');
    }
}
