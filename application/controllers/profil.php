<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {

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

			$d['judul'] = "Profil - Sistem Informasi";
	
			
			$this->load->view('global/bg_top',$d);
			$this->load->view('web/bg_profil', null);
			$this->load->view('global/bg_footer',$d);
		
	}



}