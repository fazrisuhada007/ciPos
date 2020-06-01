<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit_m extends CI_Model
{

    // Perintah menampilkan data unit sesuai id yang login
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('unit');
        if ($id != null) {
            $this->db->where('unit_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name']         = $post['unit_name'];
        $this->db->insert('unit', $params);
    }

    public function edit($post)
    {
        $params['name']         = $post['unit_name'];
        $params['updated']      = date('Y-m-d H:i:s');
        $this->db->where('unit_id', $post['unit_id']);
        $this->db->update('unit', $params);
    }

    public function del($id)
    {
        $this->db->where('unit_id', $id);
        $this->db->delete('unit');
    }
}
