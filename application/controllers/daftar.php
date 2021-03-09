<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {
function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));

        $this->load->library('fpdf');

	}
	/**
	 * @author : Aldesfi Arifin
	 * @web : http://aldes.id
	 * @keterangan : Controller untuk halaman khusus dosen
	 */
	
	public function index()
	{
	
			$d['judul'] = "Pendaftaran Organisasi Masyarakat - Sistem Informasi ";
			
	
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('daftar/bg_form_input_nilai','$bc');
			$this->load->view('global/bg_footer_admin',$d);
		
	
	}
	

	
	public function informasi()
	{
			$d['judul'] = "Daftar Status Organisasi Masyarakat - Sistem Informasi ";
			
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
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_ormas',$offset,$limit);
			
	
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('daftar/bg_status',$bc);
			$this->load->view('global/bg_footer_admin',$d);
	}
  
  
  	public function informasi_pengaduan()
	{
			$d['judul'] = "Daftar Status Organisasi Masyarakat - Sistem Informasi ";
			
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
			
			$tot_hal = $this->web_app_model->getAllData("tbl_pengaduan");
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
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimited('tbl_pengaduan',$offset,$limit);
			
	
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('daftar/bg_list_pengaduan',$bc);
			$this->load->view('global/bg_footer_admin',$d);
	}
public function ormas(){
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
			
			$bc['ormas'] = $this->web_app_model->getAllDataLimitedData('tbl_ormas',$offset,$limit);
			
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('daftar/ormas',$bc);
			$this->load->view('global/bg_footer_admin',$d);
}
public function syarat(){
  	$d['judul'] = "Pendaftaran Organisasi Masyarakat - Sistem Informasi ";
			
	
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('daftar/bg_syarat','$bc');
			$this->load->view('global/bg_footer_admin',$d);
}
	
	public function simpan_ormas()
	{

				//$di['nim'] = $this->input->post('nim');
				//$di['kd_mk'] = $this->input->post('kd_mk');
				//$nim = $this->input->post('nim');
				//$kd_mk = $this->input->post('kd_mk');
			//	$di['kd_dosen'] = $this->input->post('kd_dosen');
			//	$di['kd_tahun'] = $this->input->post('kd_tahun');
			//	$di['semester_ditempuh'] = $this->input->post('semester_ditempuh');
			//	$di['grade'] = $this->input->post('grade');
			//	$this->web_app_model->updateDataMultiField('tbl_nilai',$di,array('nim'=>$nim, 'kd_mk'=>$kd_mk));
		
			
		
				$di['nama_ormas'] = $this->input->post('nama');
				$di['bidang_kegiatan'] = $this->input->post('bidang');
				$di['alamat'] = $this->input->post('alamat');
				$di['asas'] = $this->input->post('asas');
				$di['tujuan'] = $this->input->post('tujuan');
				$di['tujuan'] = $this->input->post('tujuan');
				$di['pendiri'] = $this->input->post('pendiri');
				$di['pembina'] = $this->input->post('pembina');
				$di['penasehat'] = $this->input->post('penasehat');
				$di['ketua'] = $this->input->post('ketua');
				$di['sek'] = $this->input->post('sekretaris');
				$di['bendahara'] = $this->input->post('bendahara');
				$di['masa'] = $this->input->post('masa');
				$di['keputusan'] = $this->input->post('keputusan');
				$di['unit'] = $this->input->post('unit');
				$di['usaha'] = $this->input->post('usaha');
				$di['sumber_keu'] = $this->input->post('sumber');
			
   
                $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 2024;
                $config['max_height']           = 2024;
              
                $new_name=date("Ymdhisa")."lambang";  
             
                $file_ext = pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
            //    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $di['lambang']=$new_name.".".$file_ext;
                
                $config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                $this->upload->do_upload('logo');
                
    
    
                
          
                $config['file_name'] = $new_name;
                $di['bendera']=$new_name."1".".".$file_ext;
                $this->load->library('upload', $config);
                $this->upload->do_upload('bendera');
         
          
                     //   $data = array('upload_data' => $this->upload->data());
                   	    $this->web_app_model->insertData('tbl_ormas',$di);
		                		header('location:'.base_url().'daftar/cetak_formulir');
              


			
			

	}


public function pengaduan()
	{
			$d['judul'] = "Pengaduan Organisasi Masyarakat - Sistem Informasi ";
			
	
			$this->load->view('global/bg_top_admin',$d);
			$this->load->view('daftar/bg_pengaduan','$bc');
			$this->load->view('global/bg_footer_admin',$d);
	}
  
  public function simpan_pengaduan()
	{
			//$d['judul'] = "Pendaftaran Organisasi Masyarakat - Sistem Informasi ";
			
		    $di['nama'] = $this->input->post('nama');
				$di['tgl_waktu'] = $this->input->post('tgl');
				$di['tempat'] = $this->input->post('tempat');
				//$di['bukti'] = $this->input->post('bukti');
				$di['keterangan'] = $this->input->post('ket');
    
        $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 2024;
                $config['max_height']           = 2024;
              
                $new_name=date("Ymdhisa")."bukti";  
             
                $file_ext = pathinfo($_FILES["bukti"]["name"], PATHINFO_EXTENSION);
            //    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $di['bukti']=$new_name.".".$file_ext;
                
                $config['file_name'] = $new_name;
                $this->load->library('upload', $config);
                $this->upload->do_upload('bukti');
                
    
    
                
          
                $config['file_name'] = $new_name;
                $di['bukti']=$new_name.".".$file_ext;
                $this->load->library('upload', $config);
                $this->upload->do_upload('bendera');
    
    
			  $this->web_app_model->insertData('tbl_pengaduan',$di);
    header('location:'.base_url().'daftar/informasi_pengaduan');
	}
  
    public function cetak_formulir()
    {
     // $d['judul'] = "Cetak Formulir - Sistem Informasi ";
      

     
	
				     $pdf = new FPDF('p','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',10);
        // mencetak string 
        $pdf->Cell(190,7,'Formulir Pendaftaran Ormas ',0,1,'C');
        $pdf->SetFont('Arial','B',10);
   $pdf->Cell(15,7,'1. Nama Ormas : ',0,1,'L');
   $pdf->Cell(23,7,'2. Bidang Kegiatan : ',0,1,'L');
   $pdf->Cell(15,7,'3. Alamat Kantor/Sekretariat : ',0,1,'L');
   $pdf->Cell(15,7,'4. No Telepon : ',0,1,'L');
   $pdf->Cell(15,7,'5. Tempat Dan Waktu Pendirian: ',0,1,'L');
   $pdf->Cell(15,7,'6. Asas Ciri Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'7. Asas Ciri Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'8. Nama Pendiri : ',0,1,'L');
   $pdf->Cell(15,7,'9. Nama Pembina : ',0,1,'L');
   $pdf->Cell(15,7,'10. Nama Penasehat : ',0,1,'L');
   $pdf->Cell(15,7,'11. Nama Pembina : ',0,1,'L');
   $pdf->Cell(15,7,'12. Nama-Nama Pengurus  : ',0,1,'L');
   $pdf->Cell(15,7,'a. Ketua/Sederajat  : ',0,1,'L');
   $pdf->Cell(15,7,'b. Sekretaris/Sederajat  : ',0,1,'L');
   $pdf->Cell(15,7,'c. Bendahara/Sederajat  : ',0,1,'L');
      
        $pdf->Cell(15,7,'13. Masa Bhakti Kepengurusan : ',0,1,'L');
   $pdf->Cell(15,7,'14. Keputusan Tertinggi Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'15. Unit/Cabang/ Sayap Otonom Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'16. Usaha Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'17. Asas Ciri Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'18. Sumber Keuangan : ',0,1,'L');
   $pdf->Cell(15,7,'19. Lambang/Logo Organisasi : ',0,1,'L');
   $pdf->Cell(15,7,'20. Bendera Organisasi : ',0,1,'L');
  
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->SetFont('Arial','',10);
      
      
             $this->db->select('*');
    $this->db->from('tbl_ormas');
    $this->db->where('id_ormas', $this->uri->segment(3));
   	//$bc['ormas']=$this->db->get();
			     $rujukan = $this->db->get();
	   foreach ($rujukan as $row){
           $pdf->Cell(15,7,'DATA : ',0,1,'L');
      
        }
  
        $pdf->Output();
    }

}

/* End of file dosen.php */
/* Location: ./application/controllers/dosen.php */