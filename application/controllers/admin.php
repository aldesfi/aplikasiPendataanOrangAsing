<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));

        $this->load->library('fpdf');

	}
	/**
	 * @author : Aldesfi Arifinn
	 * @web : http://aldes.id
	 * @keterangan : Controller untuk halaman khusus admin
	 */
	
	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Beranda - Sistem Informasi ";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('admin/bg_home',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Orang Asing - Sistem Informasi ";

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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_orang_asing");
			$config['base_url'] = base_url() . 'admin/orangasing/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
      $kode="NULL";
			$kode = $this->input->get('kode');
      
      
      if ($kode=='bekerja'){
        	$bc['orang_asing'] = $this->web_app_model->getListDataOrangAsingBekerja();
          $d['judul_table'] = "DAFTAR ORANG ASING BEKERJA";
      }
      else if($kode=='tidak_bekerja')
      {
        	$bc['orang_asing'] = $this->web_app_model->getListDataOrangAsingTidakBekerja();
          $d['judul_table'] = "DAFTAR ORANG ASING TIDAK BEKERJA";
      }else{
			$bc['orang_asing'] = $this->web_app_model->getAllDataLimitedData('tbl_orang_asing',$offset,$limit);
         $d['judul_table'] = "DAFTAR ORANG ASING";
      }
      
      
    
      
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('admin/bg_orang_asing',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Orang Asing Bekerja - Sistem Informasi ";

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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllDataOrangAsingBekerja("tbl_bekerja");
			$config['base_url'] = base_url() . 'admin/orangasingbekerja/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['orang_asing_bekerja'] = $this->web_app_model->getAllDataOrangAsingBekerja();
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('admin/bg_orang_asing_bekerja',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Orang Asing Tidak Bekerja - Sistem Informasi ";

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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_tdk_bekerja");
			$config['base_url'] = base_url() . 'admin/orangasing/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['orang_asing_tdk_bekerja'] = $this->web_app_model->getAllDataOrangAsingTidakBekerja();
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('admin/bg_orang_asing_tidak_bekerja',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  
  
  public function tambah_data(){
  	$this->load->view('admin/bg_input_orang_asing','$bc');
  
  }
  
  
  
  public function simpan_orang_asing()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin' ||  $stts=='perusahaan')
		{
			$st = $this->input->post("stts");
			
  			
		
      
      	if($st=="edit")
			{
							$id_orang_asing = $this->input->post("id_orang_asing");
							$simpan["nama"] = $this->input->post("nama");
				$simpan["tgl_lahir"] = $this->input->post("tgl");
				$simpan["tempat_lahir"] = $this->input->post("tempat");
				$simpan["jk"] = $this->input->post("jk");
				$simpan["asal_negara"] = $this->input->post("asal");
          
          
				
			
				
				$simpan["status_pekerjaan"] = $this->input->post("status_pekerjaan");
          
          
          
          
				$simpan["status"] = $this->input->post("status");
				
          
          if($this->input->post("status_pekerjaan")==0){
            $simpan["perusahaan"] = "-";
            $simpan["jenis"] =  "-";
            	$simpan["mulai_bekerja"] =  "-";
          }else{
               $simpan["perusahaan"] = $this->input->post("perusahaan");
            $simpan["jenis"] = $this->input->post("jenis_instansi");
            	$simpan["mulai_bekerja"] = $this->input->post("mulai");
          }
          
          
          $this->web_app_model->updateDataMultiField('tbl_orang_asing',$simpan,array('id_orang_asing'=>$id_orang_asing));
				?>
					<script>
					window.parent.location.reload(true);
					</script>
				<?php
				
			}
			else if($st=="tambah")
			{
				$simpan["nama"] = $this->input->post("nama");
				$simpan["tgl_lahir"] = $this->input->post("tgl");
				$simpan["tempat_lahir"] = $this->input->post("tempat");
				$simpan["jk"] = $this->input->post("jk");
				$simpan["asal_negara"] = $this->input->post("asal");
		
			

				$simpan["status_pekerjaan"] = $this->input->post("status_pekerjaan");
				$simpan["status"] = $this->input->post("status");
		
          if($this->input->post("status_pekerjaan")==0){
            $simpan["perusahaan"] = "-";
            $simpan["jenis"] =  "-";
            	$simpan["mulai_bekerja"] =  "-";
          }else{
               $simpan["perusahaan"] = $this->input->post("perusahaan");
            $simpan["jenis"] = $this->input->post("jenis_instansi");
            	$simpan["mulai_bekerja"] = $this->input->post("mulai");
          }
          
        
        
        
        
					$this->web_app_model->insertData('tbl_orang_asing',$simpan);
			
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
  
  public function edit_ket(){
    
      	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
	    	$d['judul'] = "Konfirmasi - Sistem Informasi ";
				//$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$this->uri->segment(3));
	 
    
	 $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	$bc['ormas']=$this->db->get();
			$this->load->view('admin/bg_edit_ket.php',$bc);
	
		
	
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
		if(!empty($cek) && $stts=='admin')
		{
			$bc['ormas'] = $this->web_app_model->getAllData('tbl_ormas');
		//	$bc['ormas'] = $this->web_app_model->getEditMahasisiwa($this->uri->segment(3));
			$this->load->view('admin/bg_edit_ormas',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
		public function edit_oras()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin'||  $stts=='perusahaan')
		{
      
      $nim = $this->uri->segment(3);		
			$bc['ormas'] = $this->web_app_model->getAllDataLimitedDataPilih($nim);
		//	$bc['ormas'] = $this->web_app_model->getEditMahasisiwa($this->uri->segment(3));
			$this->load->view('admin/bg_edit_oras',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$bc['dosen'] = $this->web_app_model->getAllData('tbl_dosen');
			$this->load->view('admin/bg_tambah_ormas',$bc);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
	  public function status(){
    	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
	    	$d['judul'] = "Konfirmasi - Sistem Informasi ";
				//$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$this->uri->segment(3));
	 
      
    
 $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	$bc['ormas']=$this->db->get();
			$this->load->view('admin/bg_status',$bc);
	
		
	
		}
		else
		{
			header('location:'.base_url().'web');
		}
  }
  public function konfirmasi(){
    	$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
	    	$d['judul'] = "Konfirmasi - Sistem Informasi ";
				//$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$this->uri->segment(3));
	 
      
    
 $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	$bc['ormas']=$this->db->get();
			$this->load->view('admin/bg_persetujuan',$bc);
	
		
	
		}
		else
		{
			header('location:'.base_url().'web');
		}
  }
  
  
	
	
	public function hapus_oras()
	{
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin' || $stts=='perusahaan')
		{
			$id = $this->uri->segment(3);
			$hapus = array('id_orang_asing' => $id);
		
			$this->web_app_model->deleteData('tbl_orang_asing',$hapus);

			header('location:'.base_url().'admin/orangasing');
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
		if(!empty($cek) && $stts=='admin')
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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'admin/data_ormas/';
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
			$this->load->view('admin/bg_skt',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Input Nilai Mahasiswa - Sistem Informasi ";
			
			$bc['nama'] = $this->session->userdata('nama');
			$bc['status'] = $this->session->userdata('stts');
			$bc['username'] = $this->session->userdata('username');
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
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
			$this->load->view('admin/bg_input_nilai',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$nim = $this->uri->segment(3);
			$kd_mk = $this->uri->segment(4);
			$bc['edit'] = $this->web_app_model->getEditDetailNilai($nim,$kd_mk);
			
			$this->load->view('admin/bg_edit_nilai',$bc);
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
		if(!empty($cek) && $stts=='admin')
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
			
			$this->load->view('admin/bg_form_input_nilai',$bc);
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
		if(!empty($cek) && $stts=='admin')
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
		if(!empty($cek) && $stts=='admin')
		{
			$dl['nim'] = $this->uri->segment(3);
			$dl['kd_mk'] = $this->uri->segment(4);
			$this->web_app_model->deleteData('tbl_nilai',$dl);
			header('location:'.base_url().'admin/input_nilai/'.$dl['nim']);
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
		if(!empty($cek) && $stts=='admin')
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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['menu2'] = $this->load->view('admin/menu2', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'admin/data_ormas/';
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
			$this->load->view('admin/bg_laporan',$bc);
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
		if(!empty($cek) && $stts=='admin')
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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['menu2'] = $this->load->view('admin/menu2', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'admin/data_ormas/';
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
			$this->load->view('admin/bg_laporan_proses',$bc);
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
		if(!empty($cek) && $stts=='admin')
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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['menu2'] = $this->load->view('admin/menu2', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_ormas");
			$config['base_url'] = base_url() . 'admin/data_ormas/';
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
			$this->load->view('admin/bg_laporan_status',$bc);
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
		if(!empty($cek) && $stts=='admin')
		{
			$d['judul'] = "Laporan - Sistem Informasi ";
		
		
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
			$bc['menu'] = $this->load->view('admin/menu', '', true);
			$bc['menu2'] = $this->load->view('admin/menu2', '', true);
			$bc['bio'] = $this->load->view('admin/bio', $bc, true);
			
			$tot_hal = $this->web_app_model->getAllData("tbl_pengaduan");
			$config['base_url'] = base_url() . 'admin/laporan_pengaduan/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$bc["paginator"] =$this->pagination->create_links();
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_pengaduan',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('admin/bg_laporan_pengaduan',$bc);
			$this->load->view('global/bg_footer_admin',$d);
		}
		else
		{
			header('location:'.base_url().'web');
		}
	}
  
  
   public function cetak_pengaduan()
   {
     
          // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  $colors = $this->web_app_model->getAllData("tbl_pengaduan");
         foreach ($colors->result_array() as $row){
           // $id_ormas=$row['id_ormas'];
        
           

				     $pdf = new FPDF('p','mm','Letter');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 

                             $image3="logo.jpg";
$pdf->Cell(70,7,$pdf->Image('gambar/'.$image3, $pdf->GetX(),$pdf->GetY()+8,20,28),0,1,'L');
        $pdf->Cell(200,7,'PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
                   $pdf->SetFont('Arial','B',18);
        $pdf->Cell(200,7,'BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
                   $pdf->SetFont('Arial','BI',10);
              
   $pdf->Cell(200,7,'KOMPLEK PERKANTORAN PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
           
                   $pdf->SetFont('Arial','',12);
              $pdf->Cell(200,7,'#CONTACT',0,1,'C');
                       $pdf->SetFont('Arial','B',12);
   $pdf->Cell(200,7,'TELUK KUANTAN',0,1,'C');
              $pdf->Cell(70,7,'',0,1,'L');

    
           $pdf->SetFont('Arial','B',10);
           $pdf->Line(10, 55, 200, 55);
           
        $pdf->Cell(200,7,'DAFTAR LAPORAN PENGADUAN',0,1,'C');
        $pdf->Cell(190,7,'',0,1,'C');
  $pdf->SetFont('Arial','B',8);
        $pdf->Cell(8,6,'NO',1,0,'C');
       
        $pdf->Cell(40,6,'NAMA',1,0,'C');

        $pdf->Cell(35,6,'TANGGAL DAN WAKTU',1,0,'C');
        $pdf->Cell(43,6,'TEMPAT KEJADIAN KELAMIN',1,0,'C');
        $pdf->Cell(30,6,'BUKTI',1,0,'C');
        $pdf->Cell(37,6,'KETERANGAN',1,1,'C');
           $no=1;
           $pdf->SetFont('Arial','',8);
        $rujukan 	= $this->web_app_model->getAllData("tbl_pengaduan");
       	foreach($rujukan->result_array() as $row)
				{
            $pdf->Cell(8,36,$no++,1,0);
                $pdf->Cell(40,36,$row['nama'],1,0);
            $pdf->Cell(35,36, $row['tgl_waktu'],1,0);
            $pdf->Cell(43,36,$row['tempat'],1,0);
            $pdf->Cell(30,36,$pdf->Image('gambar/'.$row['bukti'], $pdf->GetX()+2,$pdf->GetY()+2,22,30),1,0);
            $pdf->Cell(37,36,$row['keterangan'],1,1);
        }
           
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
           
           $pdf->SetFont('Arial','',10);
             $pdf->Cell(280,7,'KEPALA BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
             $pdf->Cell(280,7,'KABUPATEN #KABNAME',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
           
                  $pdf->SetFont('Arial','UB',10);
                  $pdf->Cell(280,7,'Drs Linskar',0,1,'C');
                 $pdf->SetFont('Arial','',10);
                  $pdf->Cell(280,7,'NIP',0,1,'C');
   
     

      $pdf->Output();

        }

   }
  
    public function cetak_oras()
    {
     // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  $colors = $this->web_app_model->getAllDataLimitedData();
         foreach ($colors->result_array() as $row){
           // $id_ormas=$row['id_ormas'];
        
           

				     $pdf = new FPDF('p','mm','Letter');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 

                             $image3="logo.jpg";
$pdf->Cell(70,7,$pdf->Image('gambar/'.$image3, $pdf->GetX(),$pdf->GetY()+8,20,28),0,1,'L');
        $pdf->Cell(200,7,'PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
                   $pdf->SetFont('Arial','B',18);
        $pdf->Cell(200,7,'BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
                   $pdf->SetFont('Arial','BI',10);
              
   $pdf->Cell(200,7,'KOMPLEK PERKANTORAN PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
           
                   $pdf->SetFont('Arial','',12);
              $pdf->Cell(200,7,'#CONTACT',0,1,'C');
                       $pdf->SetFont('Arial','B',12);
   $pdf->Cell(200,7,'TELUK KUANTAN',0,1,'C');
              $pdf->Cell(70,7,'',0,1,'L');

    
           $pdf->SetFont('Arial','B',10);
           $pdf->Line(10, 55, 200, 55);
           
        $pdf->Cell(200,7,'DAFTAR ORANG ASING',0,1,'C');
        $pdf->Cell(190,7,'',0,1,'C');
  $pdf->SetFont('Arial','B',8);
        $pdf->Cell(8,6,'NO',1,0,'C');
       
        $pdf->Cell(40,6,'NAMA',1,0,'C');

        $pdf->Cell(50,6,'TEMPAT /TANGGAL LAHIR',1,0,'C');
        $pdf->Cell(30,6,'JENIS KELAMIN',1,0,'C');
        $pdf->Cell(30,6,'ASAL NEGARA',1,0,'C');
        $pdf->Cell(37,6,'JENIS INSTANSI',1,1,'C');
           $no=1;
           $pdf->SetFont('Arial','',8);
        $rujukan 	= $this->web_app_model->getAllDataLimitedData();
       	foreach($rujukan->result_array() as $row)
				{
            $pdf->Cell(8,6,$no++,1,0);
            $pdf->Cell(40,6,$row['nama'],1,0);
            $pdf->Cell(50,6, $row['tempat_lahir']." / ".$row['tgl_lahir'],1,0);
            $pdf->Cell(30,6,$row['jk'],1,0);
            $pdf->Cell(30,6,$row['asal_negara'],1,0);
            $pdf->Cell(37,6,$row['jenis'],1,1);

        }
           
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
           
           $pdf->SetFont('Arial','',10);
             $pdf->Cell(280,7,'KEPALA BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
             $pdf->Cell(280,7,'KABUPATEN #KABNAME',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
           
                  $pdf->SetFont('Arial','UB',10);
                  $pdf->Cell(280,7,'Drs Linskar',0,1,'C');
                 $pdf->SetFont('Arial','',10);
                  $pdf->Cell(280,7,'NIP',0,1,'C');
   
     

      $pdf->Output();

        }

  
        
    }
    public function cetak_orasbek()
    {
     // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  $colors = $this->web_app_model->getAllDataLimitedData();
         foreach ($colors->result_array() as $row){
           // $id_ormas=$row['id_ormas'];
        
           

				     $pdf = new FPDF('p','mm','Letter');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 

                             $image3="logo.jpg";
$pdf->Cell(70,7,$pdf->Image('gambar/'.$image3, $pdf->GetX(),$pdf->GetY()+8,20,28),0,1,'L');
        $pdf->Cell(200,7,'PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
                   $pdf->SetFont('Arial','B',18);
        $pdf->Cell(200,7,'BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
                   $pdf->SetFont('Arial','BI',10);
              
   $pdf->Cell(200,7,'KOMPLEK PERKANTORAN PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
           
                   $pdf->SetFont('Arial','',12);
              $pdf->Cell(200,7,'#CONTACT',0,1,'C');
                       $pdf->SetFont('Arial','B',12);
   $pdf->Cell(200,7,'TELUK KUANTAN',0,1,'C');
              $pdf->Cell(70,7,'',0,1,'L');

    
           $pdf->SetFont('Arial','B',10);
           $pdf->Line(10, 55, 200, 55);
           
        $pdf->Cell(200,7,'DAFTAR ORANG ASING BEKERJA',0,1,'C');
        $pdf->Cell(190,7,'',0,1,'C');
  $pdf->SetFont('Arial','B',8);
        $pdf->Cell(8,6,'NO',1,0,'C');
       
   
        $pdf->Cell(60,6,'ASAL NEGARA',1,0,'C');
        $pdf->Cell(30,6,'PERUSAHAAN',1,0,'C');
        $pdf->Cell(40,6,'PERUSAHAAN ASING',1,0,'C');
        $pdf->Cell(30,6,'LEMBAGA ASING',1,0,'C');

        $pdf->Cell(20,6,'JUMLAH',1,1,'C');
           $no=1;
           $pdf->SetFont('Arial','',8);
        $rujukan 	= $this->web_app_model->getAllDataOrangAsingBekerja();
       	foreach($rujukan->result_array() as $row)
				{
            $pdf->Cell(8,6,$no++,1,0);
 
            $pdf->Cell(60,6,$row['asal_negara'],1,0);
            $pdf->Cell(30,6,$row['dalam_negeri'],1,0,'C');
            $pdf->Cell(40,6,$row['luar_negeri'],1,0,'C');
            $pdf->Cell(30,6,$row['lembaga'],1,0,'C');
    
            $pdf->Cell(20,6,$row['jumlah'],1,1,'C');

        }
           
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
           
           $pdf->SetFont('Arial','',10);
             $pdf->Cell(280,7,'KEPALA BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
             $pdf->Cell(280,7,'KABUPATEN #KABNAME',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
           
                  $pdf->SetFont('Arial','UB',10);
                  $pdf->Cell(280,7,'Drs Linskar',0,1,'C');
                 $pdf->SetFont('Arial','',10);
                  $pdf->Cell(280,7,'NIP',0,1,'C');
   
     

      $pdf->Output();

        }

  
        
    }
    public function cetak_orastibek()
    {
     // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      
  $colors = $this->web_app_model->getAllDataLimitedData();
         foreach ($colors->result_array() as $row){
           // $id_ormas=$row['id_ormas'];
        
           

				     $pdf = new FPDF('p','mm','Letter');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 

                             $image3="logo.jpg";
$pdf->Cell(70,7,$pdf->Image('gambar/'.$image3, $pdf->GetX(),$pdf->GetY()+8,20,28),0,1,'L');
        $pdf->Cell(200,7,'PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
                   $pdf->SetFont('Arial','B',18);
        $pdf->Cell(200,7,'BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
                   $pdf->SetFont('Arial','BI',10);
              
   $pdf->Cell(200,7,'KOMPLEK PERKANTORAN PEMERINTAH KABUPATEN #KABNAME',0,1,'C');
           
                   $pdf->SetFont('Arial','',12);
              $pdf->Cell(200,7,'#CONTACT',0,1,'C');
                       $pdf->SetFont('Arial','B',12);
   $pdf->Cell(200,7,'TELUK KUANTAN',0,1,'C');
              $pdf->Cell(70,7,'',0,1,'L');

    
           $pdf->SetFont('Arial','B',10);
           $pdf->Line(10, 55, 200, 55);
           
        $pdf->Cell(200,7,'DAFTAR ORANG ASING TIDAK BEKERJA ',0,1,'C');
        $pdf->Cell(190,7,'',0,1,'C');
  $pdf->SetFont('Arial','B',8);
         $pdf->Cell(20,7,'',0,0,'C');   $pdf->Cell(8,6,'NO',1,0,'C');

        $pdf->Cell(130,6,'ASAL NEGARA',1,0,'C');
        $pdf->Cell(30,6,'JUMLAH',1,1,'C');

           $no=1;
           $pdf->SetFont('Arial','',8);
        $rujukan 	= $this->web_app_model->getAllDataOrangAsingTidakBekerja();
       	foreach($rujukan->result_array() as $row)
				{
            $pdf->Cell(20,7,'',0,0,'C');   $pdf->Cell(8,6,$no++,1,0);
         
            $pdf->Cell(130,6,$row['asal_negara'],1,0);
            $pdf->Cell(30,6,$row['jumlah'],1,1,'C');
   

        }
           
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
             $pdf->Cell(190,7,'',0,1,'C');
           
           $pdf->SetFont('Arial','',10);
             $pdf->Cell(280,7,'KEPALA BADAN KESATUAN BANGSA DAN POLITIK',0,1,'C');
             $pdf->Cell(280,7,'KABUPATEN #KABNAME',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
             $pdf->Cell(280,7,'',0,1,'C');
           
                  $pdf->SetFont('Arial','UB',10);
                  $pdf->Cell(280,7,'Drs Linskar',0,1,'C');
                 $pdf->SetFont('Arial','',10);
                  $pdf->Cell(280,7,'NIP',0,1,'C');
   
     

      $pdf->Output();

        }

  
        
    }


}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */