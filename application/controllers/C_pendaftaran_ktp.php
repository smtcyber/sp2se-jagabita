<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_pendaftaran_ktp extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT PENDAFTARAN KTP KIOS -------------------------------------------------------------------
	function panel_pendaftaran_ktp() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_pendaftaran_ktp.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_pendaftaran_ktp() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_pendaftaran_ktp($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$pendaftaran_ktpId = $this->m_index->tambah_pendaftaran_ktp($data_nik);
			$data =  array ("surat" => "Surat Pendaftaran KTP",
							"link" => "c_pendaftaran_ktp/pendaftaran_ktp",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_panel/notif_sukses/'. $pendaftaran_ktpId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}


//PENDAFTARAN KTP ADMIN --------------------------------------------------------------------
	public function pendaftaran_ktp() {
		$this->m_index->cekLogin();
		$data['pendaftaran_ktp']=$this->m_index->get_pendaftaran_ktp();
		foreach($this->m_index->statistik_ktp()->result_array() as $row)
   		{
    		$data['grafik'][]=(float)$row['Januari'];
    		$data['grafik'][]=(float)$row['Februari'];
    		$data['grafik'][]=(float)$row['Maret'];
    		$data['grafik'][]=(float)$row['April'];
    		$data['grafik'][]=(float)$row['Mei'];
    		$data['grafik'][]=(float)$row['Juni'];
    		$data['grafik'][]=(float)$row['Juli'];
    		$data['grafik'][]=(float)$row['Agustus'];
    		$data['grafik'][]=(float)$row['September'];
    		$data['grafik'][]=(float)$row['Oktober'];
    		$data['grafik'][]=(float)$row['November'];
    		$data['grafik'][]=(float)$row['Desember'];
   		}
		$data['isi'] = "pendaftaran_ktp/pendaftaran_ktp.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_pendaftaran_ktp(){
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "pendaftaran_ktp/tambah_pendaftaran_ktp.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_pendaftaran_ktp(){
		$config['upload_path'] = './assets/foto_ktp'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
		$this->upload->initialize($config);
		if (!empty($_FILES['F1'] ['name'])) {
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_ktp'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_ktp'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"gol_darah" => $this->input->post("gol_darah"),
						"s_kawin" => $this->input->post("s_kawin"),
						"permohonan_ktp" => $this->input->post("permohonan_ktp"),
						"kode_pos" => $this->input->post("kode_pos"),
						"status_ktp" => $this->input->post("status_ktp"),
						"berkas" => $this->input->post("berkas"),
						"tgl_surat" => date('Y-m-d'),
						"foto" => $gbr['file_name'],
						);
		}else{
				echo "Image yang diupload kosong";
			}
		}else{
			$data =  array ("id_penduduk" => $this->input->post("R1"),
						"gol_darah" => $this->input->post("gol_darah"),
						"s_kawin" => $this->input->post("s_kawin"),
						"permohonan_ktp" => $this->input->post("permohonan_ktp"),
						"kode_pos" => $this->input->post("kode_pos"),
						"status_ktp" => $this->input->post("status_ktp"),
						"berkas" => $this->input->post("berkas"),
						"tgl_surat" => date('Y-m-d'),
						);
		}
			$this->m_index->tambah_pendaftaran_ktp($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
			redirect(site_url('c_pendaftaran_ktp/pendaftaran_ktp'));
	}

	public function edit_pendaftaran_ktp($id){
		$this->m_index->cekLogin();
		$data['edit_pendaftaran_ktp'] = $this->m_index->getEdit_pendaftaran_ktp($id);
		$data['isi'] = "pendaftaran_ktp/edit_pendaftaran_ktp.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_pendaftaran_ktp(){
		if (empty($_FILES['F1']['name'])) {
		$id = $this ->input->post("H1");
		$photo_lama = $this->input->post("H2");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"gol_darah" => $this->input->post("gol_darah"),
						"s_kawin" => $this->input->post("s_kawin"),
						"permohonan_ktp" => $this->input->post("permohonan_ktp"),
						"kode_pos" => $this->input->post("kode_pos"),
						"status_ktp" => $this->input->post("status_ktp"),
						"berkas" => $this->input->post("berkas"),
						);
		$this->m_index->edit_pendaftaran_ktp($data, $id);
		$data['msg'] = "Data Berhasil Diedit";
		$data['pendaftaran_ktp'] = $this->m_index->get_pendaftaran_ktp();
		$data['isi'] = "pendaftaran_ktp/pendaftaran_ktp.php";
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		$this->load->view('template/utama',$data);
	}else{
			$config['upload_path'] = './assets/foto_ktp'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar disesuaikan
			$this->upload->initialize($config);
			if ($this->upload->do_upload('F1')) {
				$gbr = $this->upload->data();
				//compress Image
				$config['image_library']='gd2';
				$config['source_image']='./assets/foto_ktp'.$gbr['file_name'];
				$config['create_thumb']=FALSE;
				$config['maintain_ratio']=FALSE;
				$config['quality']='50%';
				$config['width']=600;
				$config['height']=400;
				$config['new_image']='./assets/foto_ktp'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$id = $this ->input->post("H1");
				$data = array ("id_penduduk" => $this->input->post("R1"),
						"gol_darah" => $this->input->post("gol_darah"),
						"s_kawin" => $this->input->post("s_kawin"),
						"permohonan_ktp" => $this->input->post("permohonan_ktp"),
						"kode_pos" => $this->input->post("kode_pos"),
						"status_ktp" => $this->input->post("status_ktp"),
						"berkas" => $this->input->post("berkas"),
						);
				$foto_ktp = $this->m_index->foto_ktp($id);
				unlink('assets/foto_ktp/'.$foto_ktp->foto); //Menghapus gambar lama
				$this->m_index->edit_pendaftaran_ktp($data, $id);
				redirect(site_url('c_pendaftaran_ktp/pendaftaran_ktp'));
			}
		}
	}

	public function proses_hapus_pendaftaran_ktp($id) {
		$foto_ktp= $this->m_index->foto_ktp($id);
		unlink('assets/foto_ktp/'.$foto_ktp->foto);
		$this->m_index->hapus_pendaftaran_ktp($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_pendaftaran_ktp/pendaftaran_ktp'));
	}

//EXPORT TO WORD
	public function pendaftaran_ktp_word($id) {
		$data['tampil'] = $this->m_index->cetak_pendaftaran_ktp($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "pendaftaran_ktp/pendaftaran_ktp_word.php";
		$this->load->view('template/word',$data);
	}

	public function pendaftaran_ktp_word1($id) {
		$data['tampil'] = $this->m_index->cetak_pendaftaran_ktp1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "pendaftaran_ktp/pendaftaran_ktp_word1.php";
		$this->load->view('template/word',$data);
	}

//CETAK PDF KTP
	public function pendaftaran_ktp_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pendaftaran_ktp($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('pendaftaran_ktp/cetak_data_pendaftaran_ktp', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Pendaftaran_KTP.pdf', 'P');
	}

//CETAK PDF KTP
	public function pendaftaran_ktp_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pendaftaran_ktp1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('pendaftaran_ktp/cetak_data_pendaftaran_ktp1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Pendaftaran_KTP.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_pendaftaran_ktp() {
		$data['isi'] = "pendaftaran_ktp/rekap_pendaftaran_ktp.php";
		$this->load->view('template/utama', $data);
	}

	public function pendaftaran_ktp_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['pendaftaran_ktp'] = $this->m_index->rekap_pendaftaran_ktp($T1,$T2);
		$this->load->view('pendaftaran_ktp/rekap_data_pendaftaran_ktp', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Pendaftaran_KTP.pdf', 'P');
	}

}
?>