<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_m extends CI_Model
{

    // Perintah menampilkan data category sesuai id yang login
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('category');
        if ($id != null) {
            $this->db->where('category_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name']         = $post['category_name'];
        $this->db->insert('category', $params);
    }

    public function edit($post)
    {
        $params['name']         = $post['category_name'];
        $params['updated']      = date('Y-m-d H:i:s');
        $this->db->where('category_id', $post['category_id']);
        $this->db->update('category', $params);
    }

    public function del($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('category');
    }
}
