<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	/**
	 * @author : Aldesfi Arifin
	 * @web : http://aldes.id
	 * @keterangan : Controller untuk halaman awal ketika aplikasi krs web based diakses
	 **/
	public function _construct()
	{
		session_start();
	}
		public function index()
	{

			$d['judul'] = "Login - Sistem Informasi";
	
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('web/halaman_utama', null);
			$this->load->view('global/bg_footer',$d);
		
	}
	public function login_masuk()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			$d['judul'] = "Login - Sistem Informasi";
			
			//buat atribut form
			$frm['username'] = array('name' => 'username',
				'id' => 'username',
				'type' => 'text',
				'value' => '',
				'class' => 'input-teks-login',
				'placeholder' => 'Masukkan username.....'
			);
			$frm['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => '',
				'class' => 'input-teks-login',
				'placeholder' => 'Masukkan password.....'
			);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('web/bg_login',$frm);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			$st = $this->session->userdata('stts');
			if($st=='perusahaan')
			{
				header('location:'.base_url().'perusahaan');
			}
			else if($st=='pemantau')
			{
				header('location:'.base_url().'pemantau');
			}
			else if($st=='admin')
			{
				header('location:'.base_url().'admin');
			}
		
		}
	}
	
	public function login()
	{
		$d['judul'] = "Login - Sistem Informasi";
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->web_app_model->getLoginData($u,$p);
	}
	
	public function logout()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'web/login_masuk');
		}
		else
		{
			$this->session->sess_destroy();
			header('location:'.base_url().'web/login_masuk');
		}
	}
}

/* End of file web.php */
/* Location: ./application/controllers/web.php */