<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('supplier_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['row'] = $this->supplier_m->get();

        $this->template->load('template', 'supplier/supplier_data', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('supplier_name', 'Nama', 'required');
        $this->form_validation->set_rules('phone', 'Nomor Telphone', 'required|min_length[12]|is_unique[supplier.phone]');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi.');
        $this->form_validation->set_message('min_length', '%s minimal 12 karakter.');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan.');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'supplier/supplier_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->supplier_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('supplier') . "';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('supplier_name', 'Nama', 'required');
        $this->form_validation->set_rules('phone', 'Nomor Telphone', 'required|min_length[12]|callback_phone_check');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi.');
        $this->form_validation->set_message('min_length', '%s minimal 12 karakter.');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan.');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->supplier_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'supplier/supplier_form_edit', $data);
            } else {
                echo "<script>alert('Data tidak ditemukan');";
                echo "window.location='" . site_url('supplier') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->supplier_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('supplier') . "';</script>";
        }
    }

    function phone_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM supplier WHERE phone = '$post[phone]' AND supplier_id != '$post[supplier_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('phone_check', '{field} ini sudah dipakai, silahkan ganti');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function del()
    {
        $id = $this->input->post('supplier_id');
        $this->supplier_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('supplier') . "';</script>";
    }
}
