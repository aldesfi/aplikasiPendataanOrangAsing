<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemantau extends CI_Controller {

	/**
	 * @author : Aldesfi Arifin
	 * @web : http://aldes.id
	 * @keterangan : Controller untuk halaman khusus pemantau
	 */
	
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Beranda - Sistem Informasi ";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_home',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
	
	public function orangasing()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Daftar Orang Asing - Sistem Informasi ";

			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_orang_asing");
			$config['base_url'] = base_url() . 'pemantau/orangasing/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['orang_asing'] = $this->web_app_model->getAllDataLimitedData('tbl_orang_asing',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_orang_asing',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  public function orangasingbekerja()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Daftar Ormas - Sistem Informasi ";

			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_orang_asing");
			$config['base_url'] = base_url() . 'pemantau/orangasing/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['orang_asing'] = $this->web_app_model->getAllDataLimitedData('tbl_orang_asing',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_orang_asing_bekerja',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  
   public function orangasingtidakbekerja()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Daftar Ormas - Sistem Informasi ";

			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_orang_asing");
			$config['base_url'] = base_url() . 'pemantau/orangasing/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['orang_asing'] = $this->web_app_model->getAllDataLimitedData('tbl_orang_asing',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_orang_asing_tidak_bekerja',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
		public function data_masuk()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Daftar Ormas - Sistem Informasi ";

			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'pemantau/data_ormas/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimitedMasuk('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_masuk',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  
  public function edit_ket(){
    
      	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
	    	$d['judul'] = "Konfirmasi - Sistem Informasi ";
				//$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$this->uri->segment(3));
	 
      
    
 $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	$bc['ormas']=$this->db->get();
			$this->load->view('pemantau/bg_edit_ket.php',$bc);
	
		
	
		}
		else
		{
			header('location:'.base_url().'web');
		}
  
  }
  
  
	public function detail_ormas()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$bc['ormas'] = $this->web_app_model->getAllData('tbl_ormas');
		//	$bc['ormas'] = $this->web_app_model->getEditMahasisiwa($this->uri->segment(3));
			$this->load->view('pemantau/bg_edit_ormas',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
		public function edit_ormas()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$bc['ormas'] = $this->web_app_model->getAllData('tbl_ormas');
		//	$bc['ormas'] = $this->web_app_model->getEditMahasisiwa($this->uri->segment(3));
			$this->load->view('pemantau/bg_edit_ormas',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	public function tambah_ormas()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$bc['dosen'] = $this->web_app_model->getAllData('tbl_dosen');
			$this->load->view('pemantau/bg_tambah_ormas',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	  public function status(){
    	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
	    	$d['judul'] = "Konfirmasi - Sistem Informasi ";
				//$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$this->uri->segment(3));
	 
      
    
 $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	$bc['ormas']=$this->db->get();
			$this->load->view('pemantau/bg_status',$bc);
	
		
	
		}
		else
		{
			header('location:'.base_url().'web');
		}
  }
  public function konfirmasi(){
    	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
	    	$d['judul'] = "Konfirmasi - Sistem Informasi ";
				//$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$this->uri->segment(3));
	 
      
    
 $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	$bc['ormas']=$this->db->get();
			$this->load->view('pemantau/bg_persetujuan',$bc);
	
		
	
		}
		else
		{
			header('location:'.base_url().'web');
		}
  }
  
  
	public function simpan_ormas()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$st = $this->input->post("stts");
			
		
	//		$simpan2["kd_dosen"] = $this->input->post("kd_dosen");
			
			if($st=="updateket")
			{
        
			  $simpan["keterangan"] = $this->input->post("ket");
			  $simpan["status"] = "1";
				$nim = $this->input->post('id_ormas');
				$where = array('id_ormas'=>$nim);
				$this->web_app_model->updateDataMultiField("tbl_ormas",$simpan,$where);
		//		$this->web_app_model->updateDataMultiField("tbl_dosen_wali",$simpan2,$where);
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
			}
      
      			
			if($st=="updateskt")
			{
        
			  $simpan["noskt"] = $this->input->post("noskt");
			  $simpan["tgl_skt"] = $this->input->post("tgl_skt");
			  $simpan["exp_skt"] = $this->input->post("exp_skt");
			  $simpan["keterangan"] = $this->input->post("ket");
			  $simpan["status"] = "2";
				$nim = $this->input->post('id_ormas');
				$where = array('id_ormas'=>$nim);
				$this->web_app_model->updateDataMultiField("tbl_ormas",$simpan,$where);
		//		$this->web_app_model->updateDataMultiField("tbl_dosen_wali",$simpan2,$where);
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
			}
      
      
      	if($st=="edit")
			{
				$nim = $this->input->post('nim');
				$where = array('nim'=>$nim);
				$this->web_app_model->updateDataMultiField("tbl_ormas",$simpan,$where);
				$this->web_app_model->updateDataMultiField("tbl_dosen_wali",$simpan2,$where);
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
			}
			else if($st=="tambah")
			{
				$simpan["nim"] = $this->input->post("nim");
				$simpan2["nim"] = $this->input->post("nim");
				$simpan2["kd_dosen"] = $this->input->post("kd_dosen");
				$simpan3["username"] = $this->input->post("nim");
				$simpan3["password"] = md5($this->input->post("nim"));
				$simpan3["stts"] = "ormas";
				if($this->web_app_model->cekNimMax($simpan["nim"])==0)
				{
					$this->web_app_model->insertData('tbl_ormas',$simpan);
					$this->web_app_model->insertData('tbl_dosen_wali',$simpan2);
					$this->web_app_model->insertData('tbl_login',$simpan3);
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
				}
				else
				{
					$this->session->set_flashdata("save_ormas","
					<p style='padding:10px; background-color:#0BE0F6; text-align:center; margin:0px;'>
					NIM Telah Terpakai</p>");
				header('location:'.base_url().'pemantau/tambah_ormas');
				}
			}
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function hapus_ormas()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$id = $this->uri->segment(3);
			$hapus = array('id_ormas' => $id);
		
			$this->web_app_model->deleteData('tbl_ormas',$hapus);

			header('location:'.base_url().'pemantau/skt');
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	


	public function skt()
	{
				$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Daftar SKT Ormas - Sistem Informasi ";

			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'pemantau/data_ormas/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimiteUpdate('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_skt',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function input_skt()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Input Nilai Mahasiswa - Sistem Informasi ";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			$nim = $this->uri->segment(3);
			
			$dt_mhs = $this->web_app_model->getSelectedData("tbl_ormas","nim",$nim);
			foreach($dt_mhs->result() as $dm)
			{
				$bc['nama_mhs'] = $dm->nama_ormas;
				$bc['program'] = $dm->kelas_program;
				$bc['jurusan'] = $dm->jurusan;
				$bc['kelas_program'] = $dm->kelas_program;
			}
			
			$bc['detailfrs'] = $this->web_app_model->getDetailKrsPersetujuan($nim,$bc['kelas_program']);
			$bc['khs'] = $this->web_app_model->getNilai($nim);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_input_nilai',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function edit_skt()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$nim = $this->uri->segment(3);
			$kd_mk = $this->uri->segment(4);
			$bc['edit'] = $this->web_app_model->getEditDetailNilai($nim,$kd_mk);
			
			$this->load->view('pemantau/bg_edit_nilai',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function form_input_skt()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$nim = $this->uri->segment(3);
			$kd_jdw = $this->uri->segment(4);
			$cek_smt = $this->web_app_model->getSelectedData('tbl_perwalian_header','nim',$nim);
			$bc['smt'] = "";
			foreach($cek_smt->result() as $c)
			{
				$bc['smt'] = $c->semester;
			}
			$bc['input'] = $this->web_app_model->getInputDetailNilai($nim,$kd_jdw);
			
			$this->load->view('pemantau/bg_form_input_nilai',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function simpan_skt()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$st = $this->input->post('stts');
			
			if($st=='edit')
			{
				//$di['nim'] = $this->input->post('nim');
				//$di['kd_mk'] = $this->input->post('kd_mk');
				$nim = $this->input->post('nim');
				$kd_mk = $this->input->post('kd_mk');
				$di['kd_dosen'] = $this->input->post('kd_dosen');
				$di['kd_tahun'] = $this->input->post('kd_tahun');
				$di['semester_ditempuh'] = $this->input->post('semester_ditempuh');
				$di['grade'] = $this->input->post('grade');
				$this->web_app_model->updateDataMultiField('tbl_nilai',$di,array('nim'=>$nim, 'kd_mk'=>$kd_mk));
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
			}
			
			else if($st=='tambah')
			{
				$di['nim'] = $this->input->post('nim');
				$di['kd_mk'] = $this->input->post('kd_mk');
				$di['kd_dosen'] = $this->input->post('kd_dosen');
				$di['kd_tahun'] = $this->input->post('kd_tahun');
				$di['semester_ditempuh'] = $this->input->post('semester_ditempuh');
				$di['grade'] = $this->input->post('grade');
				$this->web_app_model->insertData('tbl_nilai',$di);
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
			}
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	public function hapus_skt()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$dl['nim'] = $this->uri->segment(3);
			$dl['kd_mk'] = $this->uri->segment(4);
			$this->web_app_model->deleteData('tbl_nilai',$dl);
			header('location:'.base_url().'pemantau/input_nilai/'.$dl['nim']);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  
  	
		public function laporan()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "Laporan Ormas - Sistem Informasi ";
		
		
			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['menu2'] = $this->load->view('pemantau/menu2', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'pemantau/data_ormas/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_laporan',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
		
		public function laporan_proses()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "laporan Ormas - Sistem Informasi ";
		
		
			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['menu2'] = $this->load->view('pemantau/menu2', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'pemantau/data_ormas/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_laporan_proses',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
		public function laporan_status()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "laporan Ormas - Sistem Informasi ";
		
		
			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['menu2'] = $this->load->view('pemantau/menu2', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'pemantau/data_ormas/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_laporan_status',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	
	
		public function laporan_pengaduan()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pemantau')
		{
			$d['judul'] = "laporan Ormas - Sistem Informasi ";
		
		
			$page=$this->uri->segment(3);
			$limit=20;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;	
		
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('pemantau/menu', '', true);
			$bc['menu2'] = $this->load->view('pemantau/menu2', '', true);
			$bc['bio'] = $this->load->view('pemantau/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'pemantau/data_ormas/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('pemantau/bg_laporan_pengaduan',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
}
/* End of file pemantau.php */
/* Location: ./application/controllers/pemantau.php */