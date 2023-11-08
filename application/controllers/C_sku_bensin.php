<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_sku_bensin extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
		$this->load->model('m_surat_keterangan_telah_menikah');
	}



//SURAT -------------------------------------------------------------------------------------------
	function panel() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/sku_bensin.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_surat_keterangan_telah_menikah->cek_nik($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_tambah=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$suratID = $this->m_surat_keterangan_telah_menikah->tambah($data_tambah);
			// $this->m_surat_keterangan_telah_menikah->edit_penduduk([ 'deleted_at' => date('Y-m-d') ], $data->id_penduduk);
			$data =  array ("surat" => "Surat Keterangan Sku Bensin",
							"link" => "c_sku_bensin/data",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_panel/notif_sukses/'. $suratID));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//data ADMIN -------------------------------------------------------------------------------------
	public function data() {
	$this->m_index->cekLogin();
	$data['pelapor']=$this->m_surat_keterangan_telah_menikah->get();
	foreach($this->m_surat_keterangan_telah_menikah->statistik()->result_array() as $row)
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
	$data['isi'] = "telah_menikah/data.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "telah_menikah/tambah.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama" => $this->input->post("nama"),
						"nik" => $this->input->post("nik"),
						"tgl_meninggal" => date("Y-m-d",strtotime($this->input->post("tgl_meninggal"))),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_surat_keterangan_telah_menikah->tambah($data);
		redirect(site_url('c_sku_bensin/data'));
	}

	public function edit($id){
		$this->m_index->cekLogin();
		$data['edit'] = $this->m_surat_keterangan_telah_menikah->getEdit($id);
		$data['pasangan'] = $this->m_surat_keterangan_telah_menikah->getPasangan($id);
		$data['isi'] = "telah_menikah/edit.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit(){
		$id = $this->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"id_pasangan" => $this->input->post("pasangan"),
						"tgl_menikah" => date("Y-m-d",strtotime($this->input->post("tgl_menikah"))),
						"konsumen" => $this->input->post("konsumen"),
						"jenis_usaha" => $this->input->post("jenis_usaha"),
						"tempat_pengambilan" => $this->input->post("tempat_pengambilan"),
						"no_penyalur" => $this->input->post("no_penyalur"),
						"lokasi_penyalur" => $this->input->post("lokasi_penyalur"),
						);
		$this->m_surat_keterangan_telah_menikah->edit($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_sku_bensin/data/'.$id));
	}

	public function proses_hapus($id) {
		$this->m_surat_keterangan_telah_menikah->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_sku_bensin/data'));
	}

	
//AHLI WARIS ADMIN ----------------------------------------------------------------------------------------------------
	public function anak($id) {
	$this->m_index->cekLogin();
	$data['id_surat'] = $id;
	$data['surat'] = $this->m_surat_keterangan_telah_menikah->getEdit($id);
	$data['anak']=$this->m_surat_keterangan_telah_menikah->getAnak($id);
	$data['isi'] = "telah_menikah/anak.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_anak($id){
		$this->m_index->cekLogin();
		$data['anak']=$this->m_surat_keterangan_telah_menikah->get_anak($id);
		$data['pelapor'] = $this->m_surat_keterangan_telah_menikah->getEdit($id)->row();
		$data['isi'] = "telah_menikah/tambah_anak.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_anak(){
		$id_surat = $this->input->post("id_surat");
		$data =  array (
			"id_surat" => $id_surat,
			"jenis_alat" => $this->input->post("jenis_alat"),
			"jumlah_alat" => $this->input->post("jumlah_alat"),
			"fungsi_alat" => $this->input->post("fungsi_alat"),
			"jenis_bbm" => $this->input->post("jenis_bbm"),
			"kebutuhan_bbm" => $this->input->post("kebutuhan_bbm"),
			"jam_operasi" => $this->input->post("jam_operasi"),
			"konsumsi_bbm" => $this->input->post("konsumsi_bbm"),
						);
		$this->m_surat_keterangan_telah_menikah->tambah_anak($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_sku_bensin/anak/'.$id_surat));
	}

	public function edit_anak($id){
		$this->m_index->cekLogin();
		$data['edit_anak'] = $this->m_surat_keterangan_telah_menikah->getEdit_anak($id);
		$data['isi'] = "telah_menikah/edit_anak.php";
		$this->load->view('template/utama',$data);
	}


	public function proses_hapus_anak($surat,$id) {
		$this->m_surat_keterangan_telah_menikah->hapus_anak($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_sku_bensin/anak/'.$surat));
	}


//EXPORT TO WORD
	public function word($id) {
		$data['id_surat'] = $id;
		$data['surat'] = $this->m_surat_keterangan_telah_menikah->cetak($id);
		$data['pasangan'] = $this->m_surat_keterangan_telah_menikah->getPasangan($id);
		$data['anak']= $this->m_surat_keterangan_telah_menikah->getAnak($id);
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "telah_menikah/word.php";
		$this->load->view('template/word',$data);
	}

	public function word1($id) {
		$data['id_surat'] = $id;
		$data['surat'] = $this->m_surat_keterangan_telah_menikah->cetak($id);
		$data['pasangan'] = $this->m_surat_keterangan_telah_menikah->getPasangan($id);
		$data['anak']= $this->m_surat_keterangan_telah_menikah->getAnak($id);
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "telah_menikah/word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF AHLI WARIS
	public function cetak($id) {
		ob_start();
		$data['id_surat'] = $id;
		$data['surat'] = $this->m_surat_keterangan_telah_menikah->cetak($id);
		$data['pasangan'] = $this->m_surat_keterangan_telah_menikah->getPasangan($id);
		$data['anak']= $this->m_surat_keterangan_telah_menikah->getAnak($id);
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('telah_menikah/cetak', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();
		
		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('telah_menikah.pdf', 'P');
	}

//CETAK PDF AHLI WARIS
	public function cetak1($id) {
		ob_start();
		$data['id_surat'] = $id;
		$data['surat'] = $this->m_surat_keterangan_telah_menikah->cetak($id);
		$data['pasangan'] = $this->m_surat_keterangan_telah_menikah->getPasangan($id);
		$data['anak']= $this->m_surat_keterangan_telah_menikah->getAnak($id);
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('telah_menikah/cetak1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();
		
		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('telah_menikah.pdf', 'P');		
	}

//REKAP SURAT
	public function tampil_rekap_anak() {
		$this->m_index->cekLogin();
		$data['isi'] = "telah_menikah/rekap_anak.php";
		$this->load->view('template/utama', $data);
	}

	public function rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['anak'] = $this->m_surat_keterangan_telah_menikah->rekap_anak($T1,$T2);
		$data['meninggal'] = $this->m_surat_keterangan_telah_menikah->cetak($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('telah_menikah/rekap', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('anak.pdf', 'P');
	}


}
?>