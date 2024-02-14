<?php

class Crud_model extends CI_Model
{

    public function getAllProducts()
    {
        $query = $this->db->get('products');
        if ($query) {
            return $query->result();
        }
    }

    public function updateProductImage($product_id, $image_url)
    {
        $this->db->where('id', $product_id);
        $this->db->update('products', array('image_url' => $image_url));
    }

    public function getProductImage($product_id)
    {
        $query = $this->db->get_where('products', array('id' => $product_id));
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->image_url;
        } else {
            return null;
        }
    }

    public function insertProduct($data)
    {

        $query = $this->db->insert('products', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getSingleProduct($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        if ($query) {
            return $query->row();
        }
    }

    public function updateProduct($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('products', $data);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteItem($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('products');

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
