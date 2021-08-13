<?php

class Product_model extends CI_Model
{


    function get_all()
    {

        $this->db->select('*');
        $this->db->from('products');
        $this->db->order_by('id');
        $query = $this->db->get();
        $this->init = true;


        if ($query->num_rows() < 1) {
            return null;
        } else {
            return $query->result();
        }
    }

    function create($post_data)
    {
        $this->db->insert('products', $post_data);
    }

    function getDataForUpdate($id)
    {
        $product_id = ['id = ' => $id];

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where($product_id);
        $query = $this->db->get();

        if ($query->num_rows() < 1) {
            return 0;
        } else {
            return $query->row();
        }
    }
    function update($post_data, $id)
    {
        $product_id = ['id = ' => $id];
        $this->db->set($post_data);
        $this->db->where($product_id);
        $this->db->update('products');
    }
    function delete($id)
    {
        $product_id = ['id = ' => $id];
        $this->db->where($product_id);
        $this->db->delete('products');
    }
}
