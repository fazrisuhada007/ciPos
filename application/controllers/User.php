<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('user_m');
    }

    public function index()
    {
        $data['row'] = $this->user_m->get();

        $this->template->load('template', 'user/data_user', $data);
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches'  => '%s tidak sesuai dengan password'));

        $this->form_validation->set_rules('level', 'Akses level', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan diisi.');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter.');
        $this->form_validation->set_message('is_unique', '%s sudah digunakan.');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'user/form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan);</script>";
            }
            echo "<script>window.location='" . site_url('user') . "';</script>";
        }
    }
}
