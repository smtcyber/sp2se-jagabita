<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_yatim extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT BELUM MENIKAH / JANDA DUDA KIOS -------------------------------------------------------------------------------------------
	function panel_yatim() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_yatim.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_yatim() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_yatim($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"keperluan" => $this->input->post("keperluan"),
					"nama_ayah" => $this->input->post("nama_ayah"),
					"tahun_meninggal" => $this->input->post("tahun_meninggal"),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$yatimId = $this->m_index->tambah_yatim($data_nik);
			$data =  array ("surat" => "Surat Keterangan Yatim",
							"link" => "c_yatim/yatim",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_yatim/cetak_data/'. $yatimId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}

	function cetak_data($id) {
		$data['data'] = $this->m_index->cetak_data_yatim($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$data['isi'] = "panel/cetak/surat_yatim/cetak";
	    $this->load->view('panel/panel_utama',$data);
	}

	function cetak_data_yatim($id) {
		$data['data'] = $this->m_index->cetak_data_yatim($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('panel/cetak/surat_yatim/cetak_yatim',$data);
	}

	function cetak_data_yatim1($id) {
		$data['data'] = $this->m_index->cetak_data_yatim1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('panel/cetak/surat_yatim/cetak_yatim1',$data);
	}

//SURAT KETERANGAN BELUM KERJA ADMIN ----------------------------------------------------------
	public function yatim() {
	$this->m_index->cekLogin();
	$data['yatim']=$this->m_index->get_yatim();
	foreach($this->m_index->statistik_yatim()->result_array() as $row)
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
	$data['isi'] = "yatim/yatim.php";
	$this->load->view('template/utama',$data);
	}

	public function tambah_yatim(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "yatim/tambah_yatim.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_yatim(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"tahun_meninggal" => $this->input->post("tahun_meninggal"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_yatim($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_yatim/yatim'));
	}

	public function edit_yatim($id){
		$this->m_index->cekLogin();
		$data['edit_yatim'] = $this->m_index->getEdit_yatim($id);
		$data['isi'] = "yatim/edit_yatim.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_yatim(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"keperluan" => $this->input->post("keperluan"),
						"nama_ayah" => $this->input->post("nama_ayah"),
						"tahun_meninggal" => $this->input->post("tahun_meninggal"),
						);
		$this->m_index->edit_yatim($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_yatim/yatim'));
	}

	public function proses_hapus_yatim($id) {
		$this->m_index->hapus_yatim($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_yatim/yatim'));
	}



//CETAK PDF SURAT KETERANGAN BELUM KERJA
	public function yatim_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_yatim($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('yatim/cetak_data_yatim', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('yatim.pdf', 'P');
	}

//CETAK PDF SURAT KETERANGAN BELUM KERJA 1
	public function yatim_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_yatim1($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('yatim/cetak_data_yatim1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('yatim.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_yatim() {
		$this->m_index->cekLogin();
		$data['isi'] = "yatim/rekap_yatim.php";
		$this->load->view('template/utama', $data);
	}

	public function yatim_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['yatim'] = $this->m_index->rekap_yatim($T1,$T2);
		$this->load->view('yatim/rekap_data_yatim', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('yatim.pdf', 'P');
	}

}
?>