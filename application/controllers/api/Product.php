<?php

require APPPATH . 'libraries/REST_Controller.php';

class Product extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }

    // HTTP Verb GET to list all the products
    public function products_get()
    {
        $data = $this->Product_model->get_all();

        $this->response(array(
            'status' => !empty($data) ? true : false,
            'message' => !empty($data) ? 'Records Found' : 'No records',
            'data' => $data,
        ), !empty($data) ? REST_Controller::HTTP_OK : REST_Controller::HTTP_NOT_FOUND);
    }

    //HTTP Verb POST to create an product
    public function products_post()
    {
        $post_data = $this->input->post();
        $this->Product_model->create($post_data);
        $data = $this->Product_model->get_all();

        $this->response(array(
            'status' => !empty($data) ? true : false,
            'message' => !empty($data) ? 'Product Added Successfully' : 'Some Error Occured',
            'data' => $data,
        ), REST_Controller::HTTP_CREATED);
    }

    // HTTP Verb PUT to update an product info
    public function products_put($id)
    {
        $post_data = $this->put();
        $this->Product_model->update($post_data, $id);
        $data = $this->Product_model->get_all();
        $this->response(array(
            'status' => !empty($data) ? true : false,
            'message' => !empty($data) ? 'Product Updated Successfully' : 'Some Error Occured',
            'data' => $data,
        ), REST_Controller::HTTP_OK);
    }

    // HTTP Verb DeLETE to remove an product
    public function products_delete()
    {
        $this->Product_model->delete();
    }
}
