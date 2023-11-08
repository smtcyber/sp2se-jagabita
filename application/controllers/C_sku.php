<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_sku extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN USAHA KIOS -------------------------------------------------------------------------------------------
	function panel_sku() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_sku.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_sku() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_sku($nik);
		if ($get_nik->num_rows() > 0) {
			foreach ($get_nik->result() as $data) {
				// Mengonversi penghasilan ke format rupiah
				$penghasilan = $this->input->post("penghasilan");
				$penghasilan_rupiah = number_format($penghasilan, 0, ',', '.');
	
				$data_nik = array(
					"id_penduduk" => $data->id_penduduk,
					"nama_usaha" => $this->input->post("nama_usaha"),
					"lokasi_usaha" => $this->input->post("lokasi_usaha"),
					"penghasilan" => $penghasilan_rupiah, // Simpan penghasilan dalam format rupiah
					"tgl_surat" => date('Y-m-d'),
				);
			}
			$skuId = $this->m_index->tambah_sku($data_nik);
			$data =  array ("surat" => "Surat Keterangan Usaha",
							"link" => "c_sku/sku",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_sku/cetak_data/'. $skuId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_sku($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_sku/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_sku($id) {
		$data['data'] = $this->m_index->cetak_data_sku($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_sku/cetak_sku',$data);
	}

	function cetak_data_sku1($id) {
		$data['data'] = $this->m_index->cetak_data_sku1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_sku/cetak_sku1',$data);
	}



//SURAT KETERANGAN USAHA ADMIN -------------------------------------------------------------------------------------------
	public function sku() {
	$this->m_index->cekLogin();
	$data['sku']=$this->m_index->get_sku();
	foreach($this->m_index->statistik_sku()->result_array() as $row)
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
	$data['isi'] = "sku/sku.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_sku(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "sku/tambah_sku.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_sku(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"nama_usaha" => $this->input->post("nama_usaha"),
						"jenis_usaha" => $this->input->post("jenis_usaha"),
						"lokasi_usaha" => $this->input->post("lokasi_usaha"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_sku($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_sku/sku'));
	}

	public function edit_sku($id){
		$this->m_index->cekLogin();
		$data['edit_sku'] = $this->m_index->getEdit_sku($id);
		$data['isi'] = "sku/edit_sku.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_sku(){
		$id = $this->input->post("H1");
	
		// Konversi penghasilan ke format rupiah
		$penghasilan = $this->input->post("penghasilan");
		$penghasilan_rupiah = number_format($penghasilan, 0, ',', '.');
	
		$data =  array (
			"id_penduduk" => $this->input->post("R1"),
			"penghasilan" => $penghasilan_rupiah, // Simpan penghasilan dalam format rupiah
			"bidang_usaha" => $this->input->post("bidang_usaha"),
			"nama_usaha" => $this->input->post("nama_usaha"),
		);
		$this->m_index->edit_sku($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_sku/sku'));
	}

	public function proses_hapus_sku($id) {
		$this->m_index->hapus_sku($id);
		$this->m_index->hapus_notif($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_sku/sku'));
	}


//EXPORT TO WORD
	public function sku_word($id) {
		$data['tampil'] = $this->m_index->cetak_sku($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "sku/sku_word.php";
		$this->load->view('template/word',$data);
	}

	public function sku_word1($id) {
		$data['tampil'] = $this->m_index->cetak_sku1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "sku/sku_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN  USAHA
	public function sku_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_sku($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('sku/cetak_data_sku', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('sku.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN  USAHA
	public function sku_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_sku1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('sku/cetak_data_sku1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('sku.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_sku() {
		$this->m_index->cekLogin();
		$data['isi'] = "sku/rekap_sku.php";
		$this->load->view('template/utama', $data);
	}

	public function sku_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['sku'] = $this->m_index->rekap_sku($T1,$T2);
		$this->load->view('sku/rekap_data_sku', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('sku.pdf', 'P');
	}

}
?>