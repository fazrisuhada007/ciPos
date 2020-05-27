<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_m extends CI_Model
{

    // Perintah menampilkan data customer sesuai id yang login
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('customer');
        if ($id != null) {
            $this->db->where('customer_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name']         = $post['customer_name'];
        $params['gender']       = $post['gender'];
        $params['phone']        = $post['phone'];
        $params['address']      = $post['address'];
        $this->db->insert('customer', $params);
    }

    public function edit($post)
    {
        $params['name']         = $post['customer_name'];
        $params['gender']       = $post['gender'];
        $params['phone']        = $post['phone'];
        $params['address']      = $post['address'] != "" ? $post['address'] : null;
        $params['updated']      = date('Y-m-d H:i:s');
        $this->db->where('customer_id', $post['customer_id']);
        $this->db->update('customer', $params);
    }

    public function del($id)
    {
        $this->db->where('customer_id', $id);
        $this->db->delete('customer');
    }
}
