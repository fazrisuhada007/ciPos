<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier_m extends CI_Model
{

    // Perintah menampilkan data supplier sesuai id yang login
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('supplier');
        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name']         = $post['supplier_name'];
        $params['phone']        = $post['phone'];
        $params['address']      = $post['address'];
        $params['description']  = $post['description'];
        $this->db->insert('supplier', $params);
    }

    public function edit($post)
    {
        $params['name']         = $post['supplier_name'];
        $params['phone']        = $post['phone'];
        $params['address']      = $post['address'] != "" ? $post['address'] : null;
        $params['description']  = $post['description'] != "" ? $post['description'] : null;
        $params['updated']      = date('Y-m-d H:i:s');
        $this->db->where('supplier_id', $post['supplier_id']);
        $this->db->update('supplier', $params);
    }

    public function del($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
}
