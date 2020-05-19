<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {

			// Load model 
			$this->load->model('user_m');
			$query = $this->user_m->login($post);

			// memanggil session
			if ($query->num_rows() > 0) {
				$row    = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level'	=> $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
				alert('Selamat, login berhasil');
				window.location='" . site_url('dashboard') . "';
				</script>";
			} else {
				echo "<script>
				alert('Login gagal, username/password');
				window.location='" . site_url('auth/login') . "';
				</script>";
			}
		}
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
