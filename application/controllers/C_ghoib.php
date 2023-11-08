<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_ghoib extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT GHOIB KIOS -------------------------------------------------------------------------------------------
	function panel_ghoib() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_ghoib.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_ghoib() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_ghoib($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$ghoibId = $this->m_index->tambah_ghoib($data_nik);
			$data =  array ("surat" => "Surat Keterangan Ghoib",
							"link" => "c_ghoib/ghoib",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_ghoib/cetak_data/'. $ghoibId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_ghoib($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_ghoib/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_ghoib($id) {
		$data['data'] = $this->m_index->cetak_data_ghoib($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_ghoib/cetak_ghoib',$data);
	}

	function cetak_data_ghoib1($id) {
		$data['data'] = $this->m_index->cetak_data_ghoib1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_ghoib/cetak_ghoib1',$data);
	}

//SURAT KETERANGAN BELUM KERJA ADMIN ----------------------------------------------------------
	public function ghoib() {
	$this->m_index->cekLogin();
	$data['ghoib']=$this->m_index->get_ghoib();
	foreach($this->m_index->statistik_ghoib()->result_array() as $row)
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
	$data['isi'] = "ghoib/ghoib.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_ghoib(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "ghoib/tambah_ghoib.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_ghoib(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_ghoib($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_ghoib/ghoib'));
	}

	public function edit_ghoib($id){
		$this->m_index->cekLogin();
		$data['edit_ghoib'] = $this->m_index->getEdit_ghoib($id);
		$data['isi'] = "ghoib/edit_ghoib.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_ghoib(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_ghoib($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_ghoib/ghoib'));
	}

	public function proses_hapus_ghoib($id) {
		$this->m_index->hapus_ghoib($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_ghoib/ghoib'));
	}



//CETAK PDF SURAT KETERANGAN BELUM KERJA
	public function ghoib_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_ghoib($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('ghoib/cetak_data_ghoib', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ghoib.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN BELUM KERJA 1
	public function ghoib_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_ghoib1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('ghoib/cetak_data_ghoib1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ghoib.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_ghoib() {
		$this->m_index->cekLogin();
		$data['isi'] = "ghoib/rekap_ghoib.php";
		$this->load->view('template/utama', $data);
	}

	public function ghoib_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['ghoib'] = $this->m_index->rekap_ghoib($T1,$T2);
		$this->load->view('ghoib/rekap_data_ghoib', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('ghoib.pdf', 'P');
	}

}
?>