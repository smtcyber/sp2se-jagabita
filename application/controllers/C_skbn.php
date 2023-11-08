<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_skbn extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT BELUM MENIKAH / JANDA DUDA KIOS -------------------------------------------------------------------------------------------
	function panel_skbn() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_skbn.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_skbn() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_skbn($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$skbnId = $this->m_index->tambah_skbn($data_nik);
			$data =  array ("surat" => "Surat Keterangan Belum Menikah / Janda Duda",
							"link" => "c_skbn/skbn",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_panel/notif_sukses/'. $skbnId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//SURAT KETERANGAN BELUM NIKAH / JANDA DUDA ADMIN ----------------------------------------------------------
	public function skbn() {
	$this->m_index->cekLogin();
	$data['skbn']=$this->m_index->get_skbn();
	foreach($this->m_index->statistik_skbn()->result_array() as $row)
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
	$data['isi'] = "skbn/skbn.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_skbn(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "skbn/tambah_skbn.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_skbn(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_skbn($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_skbn/skbn'));
	}

	public function edit_skbn($id){
		$this->m_index->cekLogin();
		$data['edit_skbn'] = $this->m_index->getEdit_skbn($id);
		$data['isi'] = "skbn/edit_skbn.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_skbn(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						);
		$this->m_index->edit_skbn($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_skbn/skbn'));
	}

	public function proses_hapus_skbn($id) {
		$this->m_index->hapus_skbn($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_skbn/skbn'));
	}


//EXPORT TO WORD
	public function skbn_word($id) {
		$data['tampil'] = $this->m_index->cetak_skbn($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "skbn/skbn_word.php";
		$this->load->view('template/word',$data);
	}

	public function skbn_word1($id) {
		$data['tampil'] = $this->m_index->cetak_skbn1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "skbn/skbn_word1.php";
		$this->load->view('template/word',$data);
	}

	public function janda_duda_word($id) {
		$data['tampil'] = $this->m_index->cetak_janda_duda($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['isi'] = "skbn/janda_duda_word.php";
		$this->load->view('template/word',$data);
	}

	public function janda_duda_word1($id) {
		$data['tampil'] = $this->m_index->cetak_janda_duda1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "skbn/janda_duda_word1.php";
		$this->load->view('template/word',$data);
	}


//CETAK PDF SURAT KETERANGAN BELUM NIKAH
	public function skbn_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_skbn($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('skbn/cetak_data_skbn', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('skbn.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN BELUM NIKAH 1
	public function skbn_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_skbn1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('skbn/cetak_data_skbn1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('skbn.pdf', 'P');
	}

//CETAK PDF SURAT JANDA DUDA
	public function janda_duda_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_janda_duda($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('skbn/cetak_data_janda_duda', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('janda_duda.pdf', 'P');
	}


//CETAK PDF SURAT JANDA DUDA 1
	public function janda_duda_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_janda_duda1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('skbn/cetak_data_janda_duda1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('janda_duda.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_skbn() {
		$this->m_index->cekLogin();
		$data['isi'] = "skbn/rekap_skbn.php";
		$this->load->view('template/utama', $data);
	}

	public function skbn_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['skbn'] = $this->m_index->rekap_skbn($T1,$T2);
		$this->load->view('skbn/rekap_data_skbn', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('skbn.pdf', 'P');
	}

}
?>