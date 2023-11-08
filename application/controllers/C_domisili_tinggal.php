<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_domisili_tinggal extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KETERANGAN USAHA KIOS -------------------------------------------------------------------------------------------
	function panel_domtinggal() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_domtinggal.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_domtinggal() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_domtinggal($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$domtinggalId = $this->m_index->tambah_domisili_tinggal($data_nik);
			$data =  array ("surat" => "Surat Keterangan Domisili Tinggal",
							"link" => "c_domisili_tinggal/domisili_tinggal",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_domisili_tinggal/cetak_data/'. $domtinggalId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_domtinggal($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_domtinggal/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}
 
	function cetak_data_domtinggal($id) {
		$data['data'] = $this->m_index->cetak_data_domtinggal($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_domtinggal/cetak_domtinggal',$data);
	}

	function cetak_data_domtinggal1($id) {
		$data['data'] = $this->m_index->cetak_data_domtinggal1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_domtinggal/cetak_domtinggal1',$data);
	}


//SURAT KETERANGAN DOMISILI TINGGAL ADMIN -----------------------------------------------------------------------------
	public function domisili_tinggal() {
	$this->m_index->cekLogin();
	$data['domisili_tinggal']=$this->m_index->get_domisili_tinggal();
	foreach($this->m_index->statistik_domisili_tinggal()->result_array() as $row)
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
	$data['isi'] = "domisili_tinggal/domisili_tinggal.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_domisili_tinggal(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "domisili_tinggal/tambah_domisili_tinggal.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_domisili_tinggal(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_domisili_tinggal($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_domisili_tinggal/domisili_tinggal'));
	}

	public function edit_domisili_tinggal($id){
		$this->m_index->cekLogin();
		$data['edit_domisili_tinggal'] = $this->m_index->getEdit_domisili_tinggal($id);
		$data['isi'] = "domisili_tinggal/edit_domisili_tinggal.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_domisili_tinggal(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"alamat_domisili" => $this->input->post("alamat_domisili"),
						"rt_domisili" => $this->input->post("rt_domisili"),
						"rw_domisili" => $this->input->post("rw_domisili"),
						"desa1" => $this->input->post("desa1"),
						"kecamatan1" => $this->input->post("kecamatan1"),
						"kabupaten1" => $this->input->post("kabupaten1"),
						"tgl_surat" => date("Y-m-d",strtotime($this->input->post("tgl_surat"))),
						);
		$this->m_index->edit_domisili_tinggal($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_domisili_tinggal/domisili_tinggal'));
	}

	public function proses_hapus_domisili_tinggal($id) {
		$this->m_index->hapus_domisili_tinggal($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_domisili_tinggal/domisili_tinggal'));
	}


//EXPORT TO WORD
	public function domisili_tinggal_word($id) {
		$data['tampil'] = $this->m_index->cetak_domisili_tinggal($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "domisili_tinggal/domisili_tinggal_word.php";
		$this->load->view('template/word',$data);
	}

	public function domisili_tinggal_word1($id) {
		$data['tampil'] = $this->m_index->cetak_domisili_tinggal1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "domisili_tinggal/domisili_tinggal_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN DOMISILI TINGGAL
	public function domisili_tinggal_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domisili_tinggal($id)->row();
		$data['anggota1'] = $this->m_index->tampil_anggota1($id)->row();
		$data['anggota2'] = $this->m_index->tampil_anggota2($id)->row();
		$data['anggota3'] = $this->m_index->tampil_anggota3($id)->row();
		$data['anggota4'] = $this->m_index->tampil_anggota4($id)->row();
		$data['anggota5'] = $this->m_index->tampil_anggota5($id)->row();
		$data['anggota6'] = $this->m_index->tampil_anggota6($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('domisili_tinggal/cetak_data_domisili_tinggal', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domisili_tinggal.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN DOMISILI TINGGAL
	public function domisili_tinggal_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_domisili_tinggal1($id)->row();
		$data['anggota1'] = $this->m_index->tampil_anggota1($id)->row();
		$data['anggota2'] = $this->m_index->tampil_anggota2($id)->row();
		$data['anggota3'] = $this->m_index->tampil_anggota3($id)->row();
		$data['anggota4'] = $this->m_index->tampil_anggota4($id)->row();
		$data['anggota5'] = $this->m_index->tampil_anggota5($id)->row();
		$data['anggota6'] = $this->m_index->tampil_anggota6($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('domisili_tinggal/cetak_data_domisili_tinggal1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domisili_tinggal.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_domisili_tinggal() {
		$this->m_index->cekLogin();
		$data['isi'] = "domisili_tinggal/rekap_domisili_tinggal.php";
		$this->load->view('template/utama', $data);
	}

	public function domisili_tinggal_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['domisili_tinggal'] = $this->m_index->rekap_domisili_tinggal($T1,$T2);
		$this->load->view('domisili_tinggal/rekap_data_domisili_tinggal', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('domisili_tinggal.pdf', 'P');
	}


}
?>