<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_pindah_datang extends CI_Controller {
	function __construct(){
	parent::__construct();
		$this->load->model('m_index');
	}


//SURAT PINDAH DATANG KIOS -------------------------------------------------------------------------------------------
	function panel_pindah_datang() {
		$data['header'] = $this->m_index->tampilHeader()->row();
	    $data['isi'] = "panel/panel_pindah_datang.php";
	    $this->load->view('panel/panel_utama',$data);
	}

	function proses_panel_pindah_datang() {
		$nik = $this->input->post('no_ktp');
		$get_nik = $this->m_index->cek_nik_pindah_datang($nik);
		if ($get_nik->num_rows()>0) {
			foreach ($get_nik->result() as $data) {
				$data_nik=array(
					"id_penduduk" => $data->id_penduduk,
					"rencana_tanggal_pindah" => date('Y-m-d'),
					"tanggal_kedatangan" => date('Y-m-d'),
					"tgl_surat" => date('Y-m-d'),
					);
			}
			$pindah_datangId = $this->m_index->tambah_pindah_datang($data_nik);
			$data =  array ("surat" => "Surat Keterangan Pindah Datang",
							"link" => "c_pindah_datang/pindah_datang",
							"tanggal" => date('Y-m-d'),
							);
			$this->m_index->tambah_notif($data);
			redirect(site_url('c_panel/notif_sukses/'. $pindah_datangId));
		} else {
			redirect(site_url('c_panel/notif_gagal'));
		}
		
	}



//PINDAH DATANG ADMIN ---------------------------------------------------------------------------------------
	public function pindah_datang() {
		$this->m_index->cekLogin();
		$data['pindah_datang']=$this->m_index->get_pindah_datang();
		foreach($this->m_index->statistik_pindah_datang()->result_array() as $row)
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
		$data['isi'] = "pindah_datang/pindah_datang.php";
		$this->load->view('template/utama',$data);
	}

	public function tambah_pindah_datang(){
		$this->m_index->cekLogin();
		$data['penduduk']=$this->m_index->get_penduduk();
		$data['isi'] = "pindah_datang/tambah_pindah_datang.php";
		$this->load->view('template/utama',$data);
	}

	public function proses_tambah_pindah_datang(){
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"propinsi_asal" => $this->input->post("propinsi_asal"),
						"kode_pos_asal" => $this->input->post("kode_pos_asal"),
						"telepon_asal" => $this->input->post("telepon_asal"),
						"alasan_pindah" => $this->input->post("alasan_pindah"),
						"alamat_tujuan_pindah" => $this->input->post("alamat_tujuan_pindah"),
						"rt_tujuan_pindah" => $this->input->post("rt_tujuan_pindah"),
						"rw_tujuan_pindah" => $this->input->post("rw_tujuan_pindah"),
						"kelurahan_tujuan_pindah" => $this->input->post("kelurahan_tujuan_pindah"),
						"kecamatan_tujuan_pindah" => $this->input->post("kecamatan_tujuan_pindah"),
						"kota_tujuan_pindah" => $this->input->post("kota_tujuan_pindah"),
						"propinsi_tujuan_pindah" => $this->input->post("propinsi_tujuan_pindah"),
						"kode_pos_tujuan_pindah" => $this->input->post("kode_pos_tujuan_pindah"),
						"telepon_tujuan_pindah" => $this->input->post("telepon_tujuan_pindah"),
						"klasifikasi_pindah" => $this->input->post("klasifikasi_pindah"),
						"jenis_kepindahan" => $this->input->post("jenis_kepindahan"),
						"status_no_kk_tidak_pindah" => $this->input->post("status_no_kk_tidak_pindah"),
						"status_no_kk_pindah" => $this->input->post("status_no_kk_pindah"),
						"rencana_tanggal_pindah" => date("Y-m-d",strtotime($this->input->post("rencana_tanggal_pindah"))),

						"nik_pengikut1" => $this->input->post("nik_pengikut1"),
						"nama_pengikut1" => $this->input->post("nama_pengikut1"),
						"hubkeluarga_pengikut1" => $this->input->post("hubkeluarga_pengikut1"),
						"nik_pengikut2" => $this->input->post("nik_pengikut2"),
						"nama_pengikut2" => $this->input->post("nama_pengikut2"),
						"hubkeluarga_pengikut2" => $this->input->post("hubkeluarga_pengikut2"),
						"nik_pengikut3" => $this->input->post("nik_pengikut3"),
						"nama_pengikut3" => $this->input->post("nama_pengikut3"),
						"hubkeluarga_pengikut3" => $this->input->post("hubkeluarga_pengikut3"),
						"nik_pengikut4" => $this->input->post("nik_pengikut4"),
						"nama_pengikut4" => $this->input->post("nama_pengikut4"),
						"hubkeluarga_pengikut4" => $this->input->post("hubkeluarga_pengikut4"),
						"nik_pengikut5" => $this->input->post("nik_pengikut5"),
						"nama_pengikut5" => $this->input->post("nama_pengikut5"),
						"hubkeluarga_pengikut5" => $this->input->post("hubkeluarga_pengikut5"),
						"nik_pengikut6" => $this->input->post("nik_pengikut6"),
						"nama_pengikut6" => $this->input->post("nama_pengikut6"),
						"hubkeluarga_pengikut6" => $this->input->post("hubkeluarga_pengikut6"),
						"no_kk_tujuan" => $this->input->post("no_kk_tujuan"),
						"nama_kep_tujuan" => $this->input->post("nama_kep_tujuan"),
						"nik_kepala_keluarga" => $this->input->post("nik_kepala_keluarga"),
						"status_no_kk_tujuan" => $this->input->post("status_no_kk_tujuan"),
						"tanggal_kedatangan" => date("Y-m-d",strtotime($this->input->post("tanggal_kedatangan"))),

						"alamat_tujuan" => $this->input->post("alamat_tujuan"),
						"rt_tujuan" => $this->input->post("rt_tujuan"),
						"rw_tujuan" => $this->input->post("rw_tujuan"),
						"kelurahan_tujuan" => $this->input->post("kelurahan_tujuan"),
						"kecamatan_tujuan" => $this->input->post("kecamatan_tujuan"),
						"kota_tujuan" => $this->input->post("kota_tujuan"),
						"propinsi_tujuan" => $this->input->post("propinsi_tujuan"),
						"nik_pengikut_tujuan1" => $this->input->post("nik_pengikut_tujuan1"),
						"nama_pengikut_tujuan1" => $this->input->post("nama_pengikut_tujuan1"),
						"hubkeluarga_pengikut_tujuan1" => $this->input->post("hubkeluarga_pengikut_tujuan1"),
						"nik_pengikut_tujuan2" => $this->input->post("nik_pengikut_tujuan2"),
						"nama_pengikut_tujuan2" => $this->input->post("nama_pengikut_tujuan2"),
						"hubkeluarga_pengikut_tujuan2" => $this->input->post("hubkeluarga_pengikut_tujuan2"),
						"nik_pengikut_tujuan3" => $this->input->post("nik_pengikut_tujuan3"),
						"nama_pengikut_tujuan3" => $this->input->post("nama_pengikut_tujuan3"),
						"hubkeluarga_pengikut_tujuan3" => $this->input->post("hubkeluarga_pengikut_tujuan3"),
						"nik_pengikut_tujuan4" => $this->input->post("nik_pengikut_tujuan4"),
						"nama_pengikut_tujuan4" => $this->input->post("nama_pengikut_tujuan4"),
						"hubkeluarga_pengikut_tujuan4" => $this->input->post("hubkeluarga_pengikut_tujuan4"),
						"nik_pengikut_tujuan5" => $this->input->post("nik_pengikut_tujuan5"),
						"nama_pengikut_tujuan5" => $this->input->post("nama_pengikut_tujuan5"),
						"hubkeluarga_pengikut_tujuan5" => $this->input->post("hubkeluarga_pengikut_tujuan5"),
						"nik_pengikut_tujuan6" => $this->input->post("nik_pengikut_tujuan6"),
						"nama_pengikut_tujuan6" => $this->input->post("nama_pengikut_tujuan6"),
						"hubkeluarga_pengikut_tujuan6" => $this->input->post("hubkeluarga_pengikut_tujuan6"),
						"tgl_surat" => date('Y-m-d'),
						);
		$this->m_index->tambah_pindah_datang($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Ditambah !
				</div>');
		redirect(site_url('c_pindah_datang/pindah_datang'));
	}

	public function edit_pindah_datang($id){
		$this->m_index->cekLogin();
		$data['edit_pindah_datang'] = $this->m_index->getEdit_pindah_datang($id);
		$data['isi'] = "pindah_datang/edit_pindah_datang.php";
		$data['penduduk']=$this->m_index->get_penduduk();
		$this->load->view('template/utama',$data);
	}

	public function proses_edit_pindah_datang(){
		$id = $this ->input->post("H1");
		$data =  array ("id_penduduk" => $this->input->post("R1"),
						"propinsi_asal" => $this->input->post("propinsi_asal"),
						"kode_pos_asal" => $this->input->post("kode_pos_asal"),
						"telepon_asal" => $this->input->post("telepon_asal"),
						"alasan_pindah" => $this->input->post("alasan_pindah"),
						"alamat_tujuan_pindah" => $this->input->post("alamat_tujuan_pindah"),
						"rt_tujuan_pindah" => $this->input->post("rt_tujuan_pindah"),
						"rw_tujuan_pindah" => $this->input->post("rw_tujuan_pindah"),
						"kelurahan_tujuan_pindah" => $this->input->post("kelurahan_tujuan_pindah"),
						"kecamatan_tujuan_pindah" => $this->input->post("kecamatan_tujuan_pindah"),
						"kota_tujuan_pindah" => $this->input->post("kota_tujuan_pindah"),
						"propinsi_tujuan_pindah" => $this->input->post("propinsi_tujuan_pindah"),
						"kode_pos_tujuan_pindah" => $this->input->post("kode_pos_tujuan_pindah"),
						"telepon_tujuan_pindah" => $this->input->post("telepon_tujuan_pindah"),
						"klasifikasi_pindah" => $this->input->post("klasifikasi_pindah"),
						"jenis_kepindahan" => $this->input->post("jenis_kepindahan"),
						"status_no_kk_tidak_pindah" => $this->input->post("status_no_kk_tidak_pindah"),
						"status_no_kk_pindah" => $this->input->post("status_no_kk_pindah"),
						"rencana_tanggal_pindah" => date("Y-m-d",strtotime($this->input->post("rencana_tanggal_pindah"))),
						"nik_pengikut1" => $this->input->post("nik_pengikut1"),
						"nama_pengikut1" => $this->input->post("nama_pengikut1"),
						"hubkeluarga_pengikut1" => $this->input->post("hubkeluarga_pengikut1"),
						"nik_pengikut2" => $this->input->post("nik_pengikut2"),
						"nama_pengikut2" => $this->input->post("nama_pengikut2"),
						"hubkeluarga_pengikut2" => $this->input->post("hubkeluarga_pengikut2"),
						"nik_pengikut3" => $this->input->post("nik_pengikut3"),
						"nama_pengikut3" => $this->input->post("nama_pengikut3"),
						"hubkeluarga_pengikut3" => $this->input->post("hubkeluarga_pengikut3"),
						"nik_pengikut4" => $this->input->post("nik_pengikut4"),
						"nama_pengikut4" => $this->input->post("nama_pengikut4"),
						"hubkeluarga_pengikut4" => $this->input->post("hubkeluarga_pengikut4"),
						"nik_pengikut5" => $this->input->post("nik_pengikut5"),
						"nama_pengikut5" => $this->input->post("nama_pengikut5"),
						"hubkeluarga_pengikut5" => $this->input->post("hubkeluarga_pengikut5"),
						"nik_pengikut6" => $this->input->post("nik_pengikut6"),
						"nama_pengikut6" => $this->input->post("nama_pengikut6"),
						"hubkeluarga_pengikut6" => $this->input->post("hubkeluarga_pengikut6"),
						"no_kk_tujuan" => $this->input->post("no_kk_tujuan"),
						"nama_kep_tujuan" => $this->input->post("nama_kep_tujuan"),
						"nik_kepala_keluarga" => $this->input->post("nik_kepala_keluarga"),
						"status_no_kk_tujuan" => $this->input->post("status_no_kk_tujuan"),
						"tanggal_kedatangan" => date("Y-m-d",strtotime($this->input->post("tanggal_kedatangan"))),
						"alamat_tujuan" => $this->input->post("alamat_tujuan"),
						"rt_tujuan" => $this->input->post("rt_tujuan"),
						"rw_tujuan" => $this->input->post("rw_tujuan"),
						"kelurahan_tujuan" => $this->input->post("kelurahan_tujuan"),
						"kecamatan_tujuan" => $this->input->post("kecamatan_tujuan"),
						"kota_tujuan" => $this->input->post("kota_tujuan"),
						"propinsi_tujuan" => $this->input->post("propinsi_tujuan"),
						"nik_pengikut_tujuan1" => $this->input->post("nik_pengikut_tujuan1"),
						"nama_pengikut_tujuan1" => $this->input->post("nama_pengikut_tujuan1"),
						"hubkeluarga_pengikut_tujuan1" => $this->input->post("hubkeluarga_pengikut_tujuan1"),
						"nik_pengikut_tujuan2" => $this->input->post("nik_pengikut_tujuan2"),
						"nama_pengikut_tujuan2" => $this->input->post("nama_pengikut_tujuan2"),
						"hubkeluarga_pengikut_tujuan2" => $this->input->post("hubkeluarga_pengikut_tujuan2"),
						"nik_pengikut_tujuan3" => $this->input->post("nik_pengikut_tujuan3"),
						"nama_pengikut_tujuan3" => $this->input->post("nama_pengikut_tujuan3"),
						"hubkeluarga_pengikut_tujuan3" => $this->input->post("hubkeluarga_pengikut_tujuan3"),
						"nik_pengikut_tujuan4" => $this->input->post("nik_pengikut_tujuan4"),
						"nama_pengikut_tujuan4" => $this->input->post("nama_pengikut_tujuan4"),
						"hubkeluarga_pengikut_tujuan4" => $this->input->post("hubkeluarga_pengikut_tujuan4"),
						"nik_pengikut_tujuan5" => $this->input->post("nik_pengikut_tujuan5"),
						"nama_pengikut_tujuan5" => $this->input->post("nama_pengikut_tujuan5"),
						"hubkeluarga_pengikut_tujuan5" => $this->input->post("hubkeluarga_pengikut_tujuan5"),
						"nik_pengikut_tujuan6" => $this->input->post("nik_pengikut_tujuan6"),
						"nama_pengikut_tujuan6" => $this->input->post("nama_pengikut_tujuan6"),
						"hubkeluarga_pengikut_tujuan6" => $this->input->post("hubkeluarga_pengikut_tujuan6"),
						);
		$this->m_index->edit_pindah_datang($data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Diedit !
				</div>');
		redirect(site_url('c_pindah_datang/pindah_datang'));
	}

	public function proses_hapus_pindah_datang($id) {
		$this->m_index->hapus_pindah_datang($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Data Berhasil Dihapus !
				</div>');
		redirect(site_url('c_pindah_datang/pindah_datang'));
	}

//CETAK PDF PINDAH DATANG
	public function pindah_datang_cetak($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pindah_datang($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['kepdes'] = $this->m_index->tampilKepdes()->row();
		$this->load->view('pindah_datang/cetak_data_pindah_datang', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_pindah_datang.pdf', 'P');
	}

	public function pindah_datang_cetak1($id) {
		ob_start();
		$data['tampil'] = $this->m_index->cetak_pindah_datang($id)->row();
		$data['header'] = $this->m_index->tampilHeader()->row();
		$data['atas_nama'] = $this->m_index->tampilAtasNama()->row();
		$this->load->view('pindah_datang/cetak_data_pindah_datang1', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('Surat_pindah_datang.pdf', 'P');
	}


//REKAP SURAT
	public function tampil_rekap_pindah_datang() {
		$this->m_index->cekLogin();
		$data['isi'] = "pindah_datang/rekap_pindah_datang.php";
		$this->load->view('template/utama', $data);
	}

	public function pindah_datang_rekap() {
		$T1 = date('Y-m-d', strtotime($this->input->post('T1', true)));
		$T2 = date('Y-m-d', strtotime($this->input->post('T2', true)));
		ob_start();
		$data['pindah_datang'] = $this->m_index->rekap_pindah_datang($T1,$T2);
		$this->load->view('pindah_datang/rekap_data_pindah_datang', $data);
		$html = ob_get_contents();
		ob_clean();
		//ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','Legal','en', array(5, 5, 5, 5));
		$pdf->WriteHTML($html);
		$pdf->Output('pindah_datang.pdf', 'P');
	}

}
?>