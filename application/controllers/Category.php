<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('category_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->category_m->get();

        $this->template->load('template', 'product/category/category_data', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('category_name', 'Nama', 'required|is_unique[category.name]');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi.');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan.');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'product/category/category_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->category_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('category') . "';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('category_name', 'Nama', 'required|callback_name_check');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi.');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan.');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->category_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'product/category/category_form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                // echo "window.location='" . site_url('category') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->category_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('category') . "';</script>";
        }
    }

    function name_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM category WHERE name = '$post[category_name]' AND category_id != '$post[category_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('name_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function del()
    {
        $id = $this->input->post('category_id');
        $this->category_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('category') . "';</script>";
    }
}
