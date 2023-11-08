<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_kematian extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT KEMATIAN KIOS -------------------------------------------------------------------------------------------
	function panel_kematian() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_kematian.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_kematian() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_kematian($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"nama_pelapor" => $this->input->post("nama_pelapor"),
					"tanggal_meninggal" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$kematianId = $this->m_index->tambah_kematian($data_nik);
			$this->m_index->edit_penduduk([ 'deleted_at' => date('Y-m-d') ], $data->id_penduduk);
			$data =  array ("surat" => "Surat Kematian",
							"link" => "c_kematian/kematian",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);

			redirect(site_url('c_panel/notif_sukses/'. $kematianId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//KEMATIAN
		public function kematian() {
		$this->m_index->cekLogin();
		$data['kematian']=$this->m_index->get_kematian();
		foreach($this->m_index->statistik_kematian()->result_array() as $row)
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
		$data['isi'] = "kematian/kematian.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_kematian(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "kematian/tambah_kematian.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_kematian(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"hari_meninggal" => $this->input->post("hari_meninggal"),
						"tanggal_meninggal" => date("Y-m-d",strtotime($this->input->post("tanggal_meninggal"))),
						"pukul" => $this->input->post("pukul"),
						"bertempat_di" => $this->input->post("bertempat_di"),
						"penyebab" => $this->input->post("penyebab"),
						"yang_menerangkan" => $this->input->post("yang_menerangkan"),
						"nama_pelapor" => $this->input->post("nama_pelapor"),
						"kelamin_pelapor" => $this->input->post("kelamin_pelapor"),
						"no_ktp_pelapor" => $this->input->post("no_ktp_pelapor"),
						"umur_pelapor" => $this->input->post("umur_pelapor"),
						"pekerjaan_pelapor" => $this->input->post("pekerjaan_pelapor"),
						"hubungan_pelapor" => $this->input->post("hubungan_pelapor"),
						"hub_keluarga" => $this->input->post("hub_keluarga"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_kematian($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_kematian/kematian'));
	}

	public function edit_kematian($id){
		$this->m_index->cekLogin();
		$data['edit_kematian'] = $this->m_index->getEdit_kematian($id);
		$data['isi'] = "kematian/edit_kematian.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_kematian(){
		$id = $this ->input->post("H1");
		$alamat_pelapor = NULL;
		if($this->input->post("alamat_pelapor") != NULL){
			$alamat_pelapor = $this->input->post("alamat_pelapor");
		}
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"umur" => $this->input->post("umur"),
						"hari_meninggal" => $this->input->post("hari_meninggal"),
						"tanggal_meninggal" => date("Y-m-d",strtotime($this->input->post("tanggal_meninggal"))),
						"pukul" => $this->input->post("pukul"),
						"bertempat_di" => $this->input->post("bertempat_di"),
						"penyebab" => $this->input->post("penyebab"),
						"tpu" => $this->input->post("tpu"),
						"yang_menerangkan" => $this->input->post("yang_menerangkan"),
						"nama_pelapor" => $this->input->post("nama_pelapor"),
						"kelamin_pelapor" => $this->input->post("kelamin_pelapor"),
						"no_ktp_pelapor" => $this->input->post("no_ktp_pelapor"),
						"umur_pelapor" => $this->input->post("umur_pelapor"),
						"pekerjaan_pelapor" => $this->input->post("pekerjaan_pelapor"),
						"hubungan_pelapor" => $this->input->post("hubungan_pelapor"),
						"alamat_pelapor" => $alamat_pelapor,
						);
		$this->m_index->edit_kematian($data, $id);
		// $this->m_index->edit_penduduk([ 'deleted_at' => date('Y-m-d') ], $this->input->post("R1"));
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
				redirect(site_url('c_kematian/kematian'));
	}

	public function proses_hapus_kematian($id) {
		$this->m_index->hapus_kematian($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_kematian/kematian'));
	}

//CETAK PDF KEMATIAN
	public function kematian_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kematian($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kematian/cetak_data_kematian', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_kematian.pdf', 'P');
	}

	public function kematian_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_kematian($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('kematian/cetak_data_kematian1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_kematian.pdf', 'P');
	}

//CETAK PDF PENGUBURAN
	public function penguburan_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_data_penguburan($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('kematian/cetak_data_penguburan', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('penguburan.pdf', 'P');
	}

//REKAP SURAT
	public function tampil_rekap_kematian() {
		$this->m_index->cekLogin();
		$data['isi'] = "kematian/rekap_kematian.php";
		$this->load->view('template/utama', $data);
	}

	public function kematian_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['kematian'] = $this->m_index->rekap_kematian($T1,$T2);
		$this->load->view('kematian/rekap_data_kematian', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('kematian.pdf', 'P');
	}

}
?>