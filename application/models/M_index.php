<?php

class m_index extends CI_Model {

//LOGIN ---------------------------------------------------------------------------------------------------
	public function cek_login($data)  {
		$this->db->select('pengguna.*');
		return $this->db->get_where('pengguna', $data);
		//return $this->db->get_where('pengguna', $data);
	}

	public function cekLogin() {
		if ($this->session->userdata('status') != 'login') {
			redirect('dashboard/notif');
		}

		return true;
	}


//PENGGUNA ------------------------------------------------------------------------------------------------
	function get_pengguna() {
		$this->db->select('pengguna.*, anggota.*');
		$this->db->from('pengguna');
		$this->db->join('anggota','anggota.anggota_id = pengguna.anggota_id', 'left');
		return $this->db->get();
	}

	public function tambah_pengguna($data) {
		$this->db->insert('pengguna', $data);
	}

	public function getEdit_pengguna($id) {
		$this->db->select('pengguna.*, anggota.*');
		$this->db->from('pengguna');
		$this->db->join('anggota','anggota.anggota_id = pengguna.anggota_id', 'left');
		$this->db->where('pengguna_id', $id);
		return $this->db->get();
	}

	public function edit_pengguna($data, $id) {
		$this->db->update('pengguna', $data, array('pengguna_id' => $id));
	}

	public function hapus_pengguna($id) {
		$this->db->where('pengguna_id', $id);
		$this->db->delete('pengguna');
	}	


//ANGGOTA -------------------------------------------------------------------------------------
	function get_anggota() {
		$this->db->where('admin_at', NULL);
		return $this->db->get('anggota');
	}
	public function tambah_anggota($data) {
		$this->db->insert('anggota', $data);
	}
	public function getdetail_anggota($id) {
		return $this->db->get_where('anggota', array('anggota_id' => $id));
	}
	public function detail_anggota($data, $id) {
		$this->db->update('anggota', $data, array('anggota_id' => $id));
	}
	public function getEdit_anggota($id) {
		return $this->db->get_where('anggota', array('anggota_id' => $id));
	}
	public function edit_anggota($data, $id) {
		$this->db->update('anggota', $data, array('anggota_id' => $id));
	}
	public function gambar($id) {
		$this->db->where('anggota_id', $id);
		return $this->db->get('anggota')->row();
	}
	public function hapus_anggota($id) {
		$this->db->where('anggota_id', $id);
		$this->db->delete('anggota');
	}


//PENDUDUK -------------------------------------------------------------------------------------------------
function get_penduduk() {
	    $this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


	function get_penduduk_wafat() {
	    $this->db->where('deleted_at !=', NULL);
		return $this->db->get('tpenduduk');
	}

	function tampil_laki_laki() {
		$this->db->select('id_penduduk, kelamin, COUNT(kelamin) as total');
		$this->db->group_by('kelamin'); 
		$this->db->order_by('total', 'desc'); 
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
	}

	public function tambah_penduduk($data) {
		$this->db->insert('tpenduduk', $data);
	}

	public function getEdit_penduduk($id) {
		return $this->db->get_where('tpenduduk', array('id_penduduk' => $id));
	}

	public function edit_penduduk($data,$id) {
		$this->db->update('tpenduduk',$data, array('id_penduduk' => $id));
	}
	public function hapus_penduduk($id) {
		$this->db->where('id_penduduk',$id);
		$this->db->delete('tpenduduk');
	}

	function cetak_penduduk($id) {
		$this->db->where('id_penduduk',$id);
		return $this->db->get('tpenduduk');
		
	}


//HEADER  -------------------------------------------------------------------------------------------------
	function get_header() {
		return $this->db->get('tkuwu');

	}

	public function tampilHeader() {
		$this->db->where('id_kuwu', 2);
		return $this->db->get('tkuwu');
	}

	public function tambah_header($data) {
		$this->db->insert('tkuwu', $data);
	}

	public function getEdit_header($id) {
		return $this->db->get_where('tkuwu', array('id_kuwu' => $id));
	}

	public function edit_header($data,$id) {
		$this->db->update('tkuwu',$data, array('id_kuwu' => $id));
	}

	public function logo($id) {
		$this->db->where('id_kuwu', $id);
		return $this->db->get('tkuwu')->row();
	}

	public function hapus_header($id) {
		$this->db->where('id_kuwu',$id);
		$this->db->delete('tkuwu');
	}

	function cetak_header() {
		$this->db->where('id_kuwu');
		return $this->db->get('tkuwu');
		
	}


//KEPDES  -------------------------------------------------------------------------------------------------
	function get_kepdes() {
		return $this->db->get('tnama_kades');

	}

	public function tampilKepdes() {
		$this->db->where('id_nama_kades', 1);
		return $this->db->get('tnama_kades');
	}

	public function tambah_kepdes($data) {
		$this->db->insert('tnama_kades', $data);
	}

	public function getEdit_kepdes($id) {
		return $this->db->get_where('tnama_kades', array('id_nama_kades' => $id));
	}

	public function edit_kepdes($data,$id) {
		$this->db->update('tnama_kades',$data, array('id_nama_kades' => $id));
	}
	public function hapus_kepdes($id) {
		$this->db->where('id_nama_kades',$id);
		$this->db->delete('tnama_kades');
	}

	function cetak_kepdes() {
		$this->db->where('id_nama_kades');
		return $this->db->get('tnama_kades');
		
	}

	public function foto_kepdes($id) {
		$this->db->where('id_nama_kades', $id);
		return $this->db->get('tnama_kades')->row();
	}


//ATAS NAMA  -------------------------------------------------------------------------------------------------------
	function get_atas_nama() {
		return $this->db->get('atas_nama');
	}

	public function tampilAtasNama() {
		$this->db->where('id', 1);
		return $this->db->get('atas_nama');
	}

	public function tambah_atas_nama($data) {
		$this->db->insert('atas_nama', $data);
	}

	public function getEdit_atas_nama($id) {
		return $this->db->get_where('atas_nama', array('id' => $id));
	}

	public function edit_atas_nama($data,$id) {
		$this->db->update('atas_nama',$data, array('id' => $id));
	}

	public function hapus_atas_nama($id) {
		$this->db->where('id',$id);
		$this->db->delete('atas_nama');
	}

	function cetak_atas_nama() {
		$this->db->where('id');
		return $this->db->get('atas_nama');
		
	}


//NOTIF -------------------------------------------------------------------------------------------------
	function get_notif() {
	    $this->db->order_by('id_notif', 'DESC');
		return $this->db->get('notif');
	}

	function get_hari_ini() {
	    $tgl = date('Y-m-d');
		$this->db->where('tanggal', $tgl);
		return $this->db->get('notif');
	}

	public function tambah_notif($data) {
		$this->db->insert('notif', $data);
	}

	function rekap_notif($T1,$T2) {
		$this->db->select('id_notif, surat, COUNT(surat) as total');
		$this->db->group_by('surat'); 
		$this->db->order_by('total', 'desc'); 
		$this->db->where('tanggal >=',$T1);
		$this->db->where('tanggal <=',$T2);
		$hasil = $this->db->get('notif');
		return $hasil;
	}

	public function hapus_notif($id) {
		$this->db->where('id_notif',$id);
		$this->db->delete('notif');
	}

	public function statistik_notif() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=1)AND (YEAR(tanggal)=2020))),0) AS 'Jan',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=2)AND (YEAR(tanggal)=2020))),0) AS 'Feb',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=3)AND (YEAR(tanggal)=2020))),0) AS 'Mar',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=4)AND (YEAR(tanggal)=2020))),0) AS 'Apr',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=5)AND (YEAR(tanggal)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=6)AND (YEAR(tanggal)=2020))),0) AS 'Jun',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=7)AND (YEAR(tanggal)=2020))),0) AS 'Jul',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=8)AND (YEAR(tanggal)=2020))),0) AS 'Agt',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=9)AND (YEAR(tanggal)=2020))),0) AS 'Sep',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=10)AND (YEAR(tanggal)=2020))),0) AS 'Okt',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=11)AND (YEAR(tanggal)=2020))),0) AS 'Nov',
  		ifnull((SELECT count(id_notif) FROM (notif)WHERE((Month(tanggal)=12)AND (YEAR(tanggal)=2020))),0) AS 'Des'
 		from notif GROUP BY YEAR(tanggal) 
  
  		");
  
  		return $sql;
  
 	}



//KARTU KELUARGA -------------------------------------------------------------------------------------------------
	function get_kartu_keluarga() {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->order_by('no_daftar', 'DESC');
		$this->db->from('tkk');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		return $this->db->get();
	}

	public function getEdit_status($id) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		return $this->db->get_where('tkk', array('no_daftar' => $id));
	}

	public function edit_status($data,$id) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->from('tkk');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		$this->db->update('tkk',$data, array('no_daftar' => $id));
	}

	public function tambah_kartu_keluarga($data) {
		$this->db->insert('tkk', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_kartu_keluarga($id) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		return $this->db->get_where('tkk', array('no_daftar' => $id));
	}

	public function edit_kartu_keluarga($data,$id) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->from('tkk');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		$this->db->update('tkk',$data, array('no_daftar' => $id));
	}

	public function hapus_kartu_keluarga($id) {
		$this->db->where('no_daftar',$id);
		$this->db->delete('tkk');
	}

	function cetak_kartu_keluarga($id) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		$this->db->where('no_daftar',$id);
		return $this->db->get('tkk');
		
	}

	function cetak_kartu_keluarga1($id) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		$this->db->where('no_daftar',$id);
		return $this->db->get('tkk');
		
	}

	//Awal kode untuk rekap surat kartu keluarga
	function rekap_kartu_keluarga($T1,$T2) {
		$this->db->select('tkk.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tkk');
	}

	//chart
	public function statistik_kk() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Januari',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Februari',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Maret',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'April',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Mei',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Juni',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Juli',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Agustus',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'September',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Oktober',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'November',
  		ifnull((SELECT count(no_daftar) FROM (tkk)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=".date('Y')."))),0) AS 'Desember'
 		from tkk GROUP BY YEAR(tgl_surat)=".date('Y')." 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_kk($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


	//SURAT PENGANTAR KK -------------------------------------------------------------------------------------
	function get_tkk1() {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->order_by('id_tkk1', 'DESC');
		$this->db->from('tkk1');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_tkk1($data) {
		$this->db->insert('tkk1', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	function cek_nik_tkk1($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}

	public function getEdit_tkk1($id) {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		return $this->db->get_where('tkk1', array('id_tkk1' => $id));
	}

	public function edit_tkk1($data,$id) {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->from('tkk1');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		$this->db->update('tkk1',$data, array('id_tkk1' => $id));
	}

	public function hapus_tkk1($id) {
		$this->db->where('id_tkk1',$id);
		$this->db->delete('tkk1');
	}

	function cetak_tkk1($id) {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		$this->db->where('id_tkk1',$id);
		return $this->db->get('tkk1');
		
	}

	function cetak_tkk11($id) {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		$this->db->where('id_tkk1',$id);
		return $this->db->get('tkk1');
		
	}

	public function cetak_data_tkk1($id) {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->from('tkk1');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		$this->db->where('id_tkk1', $id);
		return $this->db->get();
	}

	public function cetak_data_tkk11($id) {
		$this->db->select('tkk1.*, tpenduduk.*');
		$this->db->from('tkk1');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkk1.id_penduduk', 'left');
		$this->db->where('id_tkk1', $id);
		return $this->db->get();
	}


//PENDAFTARAN KTP -------------------------------------------------------------------------------------------------
	function get_pendaftaran_ktp() {
		$this->db->select('tdaftar.*, tpenduduk.*');
		$this->db->order_by('no_daftar', 'DESC');
		$this->db->from('tdaftar');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_pendaftaran_ktp($data) {
		$this->db->insert('tdaftar', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_pendaftaran_ktp($id) {
		$this->db->select('tdaftar.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar.id_penduduk', 'left');
		return $this->db->get_where('tdaftar', array('no_daftar' => $id));
	}

	public function edit_pendaftaran_ktp($data,$id) {
		$this->db->select('tdaftar.*, tpenduduk.*');
		$this->db->from('tdaftar');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar.id_penduduk', 'left');
		$this->db->update('tdaftar',$data, array('no_daftar' => $id));
	}

	public function hapus_pendaftaran_ktp($id) {
		$this->db->where('no_daftar',$id);
		$this->db->delete('tdaftar');
	}

	function cetak_pendaftaran_ktp($id) {
		$this->db->select('tdaftar.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar.id_penduduk', 'left');
		$this->db->where('no_daftar',$id);
		return $this->db->get('tdaftar');
	}

	function cetak_pendaftaran_ktp1($id) {
		$this->db->select('tdaftar.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar.id_penduduk', 'left');
		$this->db->where('no_daftar',$id);
		return $this->db->get('tdaftar');
	}

	public function foto_ktp($id) {
		$this->db->where('no_daftar', $id);
		return $this->db->get('tdaftar')->row();
	}

	//Awal kode untuk rekap pendaftaran ktp
	function rekap_pendaftaran_ktp($T1,$T2) {
		$this->db->select('tdaftar.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tdaftar');
	}

	//chart
	public function statistik_ktp() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(no_daftar) FROM (tdaftar)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tdaftar GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_pendaftaran_ktp($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//PELAPOR AHLI WARIS -------------------------------------------------------------------------------------------------
	function get_pelapor() {
		$this->db->select('tahli_pelapor.*, tpenduduk.*');
		$this->db->order_by('id_pelapor', 'DESC');
		$this->db->from('tahli_pelapor');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tahli_pelapor.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_pelapor($data) {
		$this->db->insert('tahli_pelapor', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getahliwaris1($id) {
		return $this->db->get_where('tahli_pelapor', array('id_pelapor' => $id));
	}
	
	public function ahli_waris1($data, $id) {
		$this->db->update('tahli_pelapor', $data, array('id_pelapor' => $id));
	}

	public function getEdit_pelapor($id) {
		$this->db->select('tahli_pelapor.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tahli_pelapor.id_penduduk', 'left');
		return $this->db->get_where('tahli_pelapor', array('id_pelapor' => $id));
	}

	public function edit_pelapor($data,$id) {
		$this->db->select('tahli_pelapor.*, tpenduduk.*');
		$this->db->from('tahli_pelapor');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tahli_pelapor.id_penduduk', 'left');
		$this->db->update('tahli_pelapor',$data, array('id_pelapor' => $id));
	}

	public function hapus_pelapor($id) {
		$this->db->where('id_pelapor',$id);
		$this->db->delete('tahli_pelapor');
	}


	//Awal kode untuk rekap ahli waris
	function rekap_ahli_waris($T1,$T2) {
		$this->db->select('tahli_pelapor.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tahli_pelapor.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tahli_pelapor');
	}

	//chart
	public function statistik_ahli_waris() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_pelapor) FROM (tahli_pelapor)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tahli_pelapor GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_waris($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//AHLI WARIS -------------------------------------------------------------------------------------------------
	function get_ahli_waris($id) {
		$this->db->select('tahli_waris_surat.*, tahli_pelapor.*');
		$this->db->from('tahli_waris_surat');
		$this->db->join('tahli_pelapor','tahli_pelapor.id_pelapor = tahli_waris_surat.id_pelapor', 'left');
		$this->db->where('tahli_waris_surat.id_pelapor',$id);
		return $this->db->get();
	}

	public function tambah_ahli_waris($data) {
		$this->db->insert('tahli_waris_surat', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_ahli_waris($id) {
		$this->db->select('tahli_waris_surat.*, tahli_pelapor.*');
		$this->db->join('tahli_pelapor','tahli_pelapor.id_pelapor = tahli_waris_surat.id_pelapor', 'left');
		return $this->db->get_where('tahli_waris_surat', array('id_ahli_waris' => $id));
	}

	public function edit_ahli_waris($data,$id) {
		$this->db->select('tahli_waris_surat.*, tahli_pelapor.*');
		$this->db->from('tahli_waris_surat');
		$this->db->join('tahli_pelapor','tahli_pelapor.id_pelapor = tahli_waris_surat.id_pelapor', 'left');
		$this->db->update('tahli_waris_surat',$data, array('id_ahli_waris' => $id));
	}

	public function hapus_ahli_waris($id) {
		$this->db->where('id_ahli_waris',$id);
		$this->db->delete('tahli_waris_surat');
	}


	public function detail_ahli_waris($data, $id) {
		$this->db->update('tahli_waris_surat', $data, array('id_ahli_waris' => $id));
	}

	function cetak_ahli_waris($id) {
		$this->db->select('tahli_waris_surat.*, tahli_pelapor.*, tpenduduk.*');
		$this->db->join('tahli_pelapor','tahli_pelapor.id_pelapor = tahli_waris_surat.id_pelapor', 'left');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tahli_pelapor.id_penduduk', 'left');
		$this->db->where('tahli_waris_surat.id_pelapor',$id);
		return $this->db->get('tahli_waris_surat');
		
	}

	function cetak_ahli_waris1($id) {
		$this->db->select('tahli_waris_surat.*, tahli_pelapor.*');
		$this->db->join('tahli_pelapor','tahli_pelapor.id_pelapor = tahli_waris_surat.id_pelapor', 'left');
		$this->db->where('tahli_waris_surat.id_pelapor',$id);
		return $this->db->get('tahli_waris_surat');
		
	}

	function cetak_pelapor($id) {
		$this->db->select('tahli_pelapor.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tahli_pelapor.id_penduduk', 'left');
		$this->db->where('id_pelapor',$id);
		return $this->db->get('tahli_pelapor');
		
	}



//ANDON NIKAH -------------------------------------------------------------------------------------------------
	function get_andon_nikah() {
		$this->db->select('tandon_nikah.*, tpenduduk.*');
		$this->db->order_by('id_andon_nikah', 'DESC');
		$this->db->from('tandon_nikah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tandon_nikah.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_andon_nikah($data) {
		$this->db->insert('tandon_nikah', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_andon_nikah($id) {
		$this->db->select('tandon_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tandon_nikah.id_penduduk', 'left');
		return $this->db->get_where('tandon_nikah', array('id_andon_nikah' => $id));
	}

	public function edit_andon_nikah($data,$id) {
		$this->db->select('tandon_nikah.*, tpenduduk.*');
		$this->db->from('tandon_nikah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tandon_nikah.id_penduduk', 'left');
		$this->db->update('tandon_nikah',$data, array('id_andon_nikah' => $id));
	}

	public function hapus_andon_nikah($id) {
		$this->db->where('id_andon_nikah',$id);
		$this->db->delete('tandon_nikah');
	}

	function cetak_andon_nikah($id) {
		$this->db->select('tandon_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tandon_nikah.id_penduduk', 'left');
		$this->db->where('id_andon_nikah',$id);
		return $this->db->get('tandon_nikah');
	}

	function cetak_andon_nikah1($id) {
		$this->db->select('tandon_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tandon_nikah.id_penduduk', 'left');
		$this->db->where('id_andon_nikah',$id);
		return $this->db->get('tandon_nikah');
	}

	//Awal kode untuk rekap andon nikah
	function rekap_andon_nikah($T1,$T2) {
		$this->db->select('tandon_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tandon_nikah.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tandon_nikah');
	}

	//chart
	public function statistik_andon_nikah() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_andon_nikah) FROM (tandon_nikah)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tandon_nikah GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_andon_nikah($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//BEDA IDENTITAS -------------------------------------------------------------------------------------------------
	function get_beda_identitas() {
		$this->db->select('tsurat_identitas.*, tpenduduk.*');
		$this->db->order_by('id_identitas', 'DESC');
		$this->db->from('tsurat_identitas');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_identitas.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_beda_identitas($data) {
		$this->db->insert('tsurat_identitas', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_beda_identitas($id) {
		$this->db->select('tsurat_identitas.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_identitas.id_penduduk', 'left');
		return $this->db->get_where('tsurat_identitas', array('id_identitas' => $id));
	}

	public function edit_beda_identitas($data,$id) {
		$this->db->select('tsurat_identitas.*, tpenduduk.*');
		$this->db->from('tsurat_identitas');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_identitas.id_penduduk', 'left');
		$this->db->update('tsurat_identitas',$data, array('id_identitas' => $id));
	}

	public function hapus_beda_identitas($id) {
		$this->db->where('id_identitas',$id);
		$this->db->delete('tsurat_identitas');
	}

	function cetak_beda_identitas($id) {
		$this->db->select('tsurat_identitas.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_identitas.id_penduduk', 'left');
		$this->db->where('id_identitas',$id);
		return $this->db->get('tsurat_identitas');
		
	}

	function cetak_beda_identitas1($id) {
		$this->db->select('tsurat_identitas.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_identitas.id_penduduk', 'left');
		$this->db->where('id_identitas',$id);
		return $this->db->get('tsurat_identitas');
		
	}

	//Awal kode untuk rekap beda identitas
	function rekap_beda_identitas($T1,$T2) {
		$this->db->select('tsurat_identitas.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_identitas.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_identitas');
	}

	//chart
	public function statistik_beda_identitas() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_identitas) FROM (tsurat_identitas)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_identitas GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_beda_identitas($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//SURAT KETERANGAN BELUMNIKAH & SURAT JANDA DUDA ---------------------------------------------------------------------
	function get_skbn() {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->order_by('id_belum_nikah', 'DESC');
		$this->db->from('tskbn');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_skbn($data) {
		$this->db->insert('tskbn', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_skbn($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		return $this->db->get_where('tskbn', array('id_belum_nikah' => $id));
	}

	public function edit_skbn($data,$id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->from('tskbn');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->update('tskbn',$data, array('id_belum_nikah' => $id));
	}

	public function hapus_skbn($id) {
		$this->db->where('id_belum_nikah',$id);
		$this->db->delete('tskbn');
	}

	function cetak_skbn($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('id_belum_nikah',$id);
		return $this->db->get('tskbn');
		
	}

	function cetak_skbn1($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('id_belum_nikah',$id);
		return $this->db->get('tskbn');
		
	}

	function cetak_janda_duda($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('id_belum_nikah',$id);
		return $this->db->get('tskbn');
		
	}

	function cetak_janda_duda1($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('id_belum_nikah',$id);
		return $this->db->get('tskbn');
		
	}

	public function cetak_data_janda_duda($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->from('tskbn');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('id_belum_nikah', $id);
		return $this->db->get();
	}

	public function cetak_data_janda_duda1($id) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->from('tskbn');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('id_belum_nikah', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap skbn
	function rekap_skbn($T1,$T2) {
		$this->db->select('tskbn.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tskbn.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tskbn');
	}

	//chart
	public function statistik_skbn() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_belum_nikah) FROM (tskbn)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tskbn GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_skbn($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}

//SURAT KETERANGAN YATIM ---------------------------------------------------------------------
function get_yatim() {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->order_by('id_yatim', 'DESC');
	$this->db->from('tsurat_yatim');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	return $this->db->get();
}

public function tambah_yatim($data) {
	$this->db->insert('tsurat_yatim', $data);
	$last_id = $this->db->insert_id();
	return  $last_id;
}

public function getEdit_yatim($id) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	return $this->db->get_where('tsurat_yatim', array('id_yatim' => $id));
}

public function edit_yatim($data,$id) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->from('tsurat_yatim');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	$this->db->update('tsurat_yatim',$data, array('id_yatim' => $id));
}

public function hapus_yatim($id) {
	$this->db->where('id_yatim',$id);
	$this->db->delete('tsurat_yatim');
}

public function cetak_data_yatim($id) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->from('tsurat_yatim');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	$this->db->where('id_yatim', $id);
	return $this->db->get();
}

public function cetak_data_yatim1($id) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->from('tsurat_yatim');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	$this->db->where('id_yatim', $id);
	return $this->db->get();
}

function cetak_yatim($id) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	$this->db->where('id_yatim',$id);
	return $this->db->get('tsurat_yatim');
	
}

function cetak_yatim1($id) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	$this->db->where('id_yatim',$id);
	return $this->db->get('tsurat_yatim');
	
}

//Awal kode untuk rekap yatim
function rekap_yatim($T1,$T2) {
	$this->db->select('tsurat_yatim.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_yatim.id_penduduk', 'left');
	$this->db->where('tgl_surat >=',$T1);
	$this->db->where('tgl_surat <=',$T2);
	return $this->db->get('tsurat_yatim');
}

//chart
public function statistik_yatim() {

	  $sql= $this->db->query("

	  select
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
	  ifnull((SELECT count(id_yatim) FROM (tsurat_yatim)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
	 from tsurat_yatim GROUP BY YEAR(tgl_surat) 

	  ");

	  return $sql;

 } 

 function cek_nik_yatim($nik) {
	$this->db->where('no_ktp',$nik);
	$this->db->where('deleted_at', NULL);
	return $this->db->get('tpenduduk');
}

//SURAT KETERANGAN PEKERJAAN ---------------------------------------------------------------------
function get_pekerjaan() {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->order_by('id_pekerjaan', 'DESC');
	$this->db->from('tsurat_pekerjaan');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	return $this->db->get();
}

public function tambah_pekerjaan($data) {
	$this->db->insert('tsurat_pekerjaan', $data);
	$last_id = $this->db->insert_id();
	return  $last_id;
}

public function getEdit_pekerjaan($id) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	return $this->db->get_where('tsurat_pekerjaan', array('id_pekerjaan' => $id));
}

public function edit_pekerjaan($data,$id) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->from('tsurat_pekerjaan');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	$this->db->update('tsurat_pekerjaan',$data, array('id_pekerjaan' => $id));
}

public function hapus_pekerjaan($id) {
	$this->db->where('id_pekerjaan',$id);
	$this->db->delete('tsurat_pekerjaan');
}

public function cetak_data_pekerjaan($id) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->from('tsurat_pekerjaan');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	$this->db->where('id_pekerjaan', $id);
	return $this->db->get();
}

public function cetak_data_pekerjaan1($id) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->from('tsurat_pekerjaan');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	$this->db->where('id_pekerjaan', $id);
	return $this->db->get();
}

function cetak_pekerjaan($id) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	$this->db->where('id_pekerjaan',$id);
	return $this->db->get('tsurat_pekerjaan');
	
}

function cetak_pekerjaan1($id) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	$this->db->where('id_pekerjaan',$id);
	return $this->db->get('tsurat_pekerjaan');
	
}

//Awal kode untuk rekap pekerjaan
function rekap_pekerjaan($T1,$T2) {
	$this->db->select('tsurat_pekerjaan.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pekerjaan.id_penduduk', 'left');
	$this->db->where('tgl_surat >=',$T1);
	$this->db->where('tgl_surat <=',$T2);
	return $this->db->get('tsurat_pekerjaan');
}

//chart
public function statistik_pekerjaan() {

	  $sql= $this->db->query("

	  select
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
	  ifnull((SELECT count(id_pekerjaan) FROM (tsurat_pekerjaan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
	 from tsurat_pekerjaan GROUP BY YEAR(tgl_surat) 

	  ");

	  return $sql;

 } 

 function cek_nik_pekerjaan($nik) {
	$this->db->where('no_ktp',$nik);
	$this->db->where('deleted_at', NULL);
	return $this->db->get('tpenduduk');
}

//SURAT KETERANGAN GHOIB ---------------------------------------------------------------------
function get_ghoib() {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->order_by('id_ghoib', 'DESC');
	$this->db->from('tsurat_ghoib');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	return $this->db->get();
}

public function tambah_ghoib($data) {
	$this->db->insert('tsurat_ghoib', $data);
	$last_id = $this->db->insert_id();
	return  $last_id;
}

public function getEdit_ghoib($id) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	return $this->db->get_where('tsurat_ghoib', array('id_ghoib' => $id));
}

public function edit_ghoib($data,$id) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->from('tsurat_ghoib');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	$this->db->update('tsurat_ghoib',$data, array('id_ghoib' => $id));
}

public function hapus_ghoib($id) {
	$this->db->where('id_ghoib',$id);
	$this->db->delete('tsurat_ghoib');
}

public function cetak_data_ghoib($id) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->from('tsurat_ghoib');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	$this->db->where('id_ghoib', $id);
	return $this->db->get();
}

public function cetak_data_ghoib1($id) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->from('tsurat_ghoib');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	$this->db->where('id_ghoib', $id);
	return $this->db->get();
}

function cetak_ghoib($id) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	$this->db->where('id_ghoib',$id);
	return $this->db->get('tsurat_ghoib');
	
}

function cetak_ghoib1($id) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	$this->db->where('id_ghoib',$id);
	return $this->db->get('tsurat_ghoib');
	
}

//Awal kode untuk rekap ghoib
function rekap_ghoib($T1,$T2) {
	$this->db->select('tsurat_ghoib.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ghoib.id_penduduk', 'left');
	$this->db->where('tgl_surat >=',$T1);
	$this->db->where('tgl_surat <=',$T2);
	return $this->db->get('tsurat_ghoib');
}

//chart
public function statistik_ghoib() {

	  $sql= $this->db->query("

	  select
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
	  ifnull((SELECT count(id_ghoib) FROM (tsurat_ghoib)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
	 from tsurat_ghoib GROUP BY YEAR(tgl_surat) 

	  ");

	  return $sql;

 } 

 function cek_nik_ghoib($nik) {
	$this->db->where('no_ktp',$nik);
	$this->db->where('deleted_at', NULL);
	return $this->db->get('tpenduduk');
}

//SURAT KETERANGAN BELUM KERJA ---------------------------------------------------------------------
function get_belum_bekerja() {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->order_by('id_belum_bekerja', 'DESC');
	$this->db->from('tsurat_belumkerja');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	return $this->db->get();
}

public function tambah_belum_bekerja($data) {
	$this->db->insert('tsurat_belumkerja', $data);
	$last_id = $this->db->insert_id();
	return  $last_id;
}

public function getEdit_belum_bekerja($id) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	return $this->db->get_where('tsurat_belumkerja', array('id_belum_bekerja' => $id));
}

public function edit_belum_bekerja($data,$id) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->from('tsurat_belumkerja');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	$this->db->update('tsurat_belumkerja',$data, array('id_belum_bekerja' => $id));
}

public function hapus_belum_bekerja($id) {
	$this->db->where('id_belum_bekerja',$id);
	$this->db->delete('tsurat_belumkerja');
}

public function cetak_data_belum_bekerja($id) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->from('tsurat_belumkerja');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	$this->db->where('id_belum_bekerja', $id);
	return $this->db->get();
}

public function cetak_data_belum_bekerja1($id) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->from('tsurat_belumkerja');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	$this->db->where('id_belum_bekerja', $id);
	return $this->db->get();
}

function cetak_belum_bekerja($id) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	$this->db->where('id_belum_bekerja',$id);
	return $this->db->get('tsurat_belumkerja');
	
}

function cetak_belum_bekerja1($id) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	$this->db->where('id_belum_bekerja',$id);
	return $this->db->get('tsurat_belumkerja');
	
}

//Awal kode untuk rekap belum_bekerja
function rekap_belum_bekerja($T1,$T2) {
	$this->db->select('tsurat_belumkerja.*, tpenduduk.*');
	$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_belumkerja.id_penduduk', 'left');
	$this->db->where('tgl_surat >=',$T1);
	$this->db->where('tgl_surat <=',$T2);
	return $this->db->get('tsurat_belumkerja');
}

//chart
public function statistik_belum_bekerja() {

	  $sql= $this->db->query("

	  select
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
	  ifnull((SELECT count(id_belum_bekerja) FROM (tsurat_belumkerja)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
	 from tsurat_belumkerja GROUP BY YEAR(tgl_surat) 

	  ");

	  return $sql;

 } 

 function cek_nik_belum_bekerja($nik) {
	$this->db->where('no_ktp',$nik);
	$this->db->where('deleted_at', NULL);
	return $this->db->get('tpenduduk');
}


//BELUM PUNYA KTP -------------------------------------------------------------------------------------------------
	function get_bp_ktp() {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->order_by('id_bp_ktp', 'DESC');
		$this->db->from('bp_ktp');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_bp_ktp($data) {
		$this->db->insert('bp_ktp', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_bp_ktp($id) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		return $this->db->get_where('bp_ktp', array('id_bp_ktp' => $id));
	}

	public function edit_bp_ktp($data,$id) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->from('bp_ktp');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		$this->db->update('bp_ktp',$data, array('id_bp_ktp' => $id));
	}

	public function hapus_bp_ktp($id) {
		$this->db->where('id_bp_ktp',$id);
		$this->db->delete('bp_ktp');
	}

	function cetak_bp_ktp($id) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		$this->db->where('id_bp_ktp',$id);
		return $this->db->get('bp_ktp');
		
	}

	function cetak_bp_ktp1($id) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		$this->db->where('id_bp_ktp',$id);
		return $this->db->get('bp_ktp');
		
	}

	public function cetak_data_bp_ktp($id) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->from('bp_ktp');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		$this->db->where('id_bp_ktp', $id);
		return $this->db->get();
	}

	public function cetak_data_bp_ktp1($id) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->from('bp_ktp');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		$this->db->where('id_bp_ktp', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap belum punya ktp
	function rekap_bp_ktp($T1,$T2) {
		$this->db->select('bp_ktp.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = bp_ktp.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('bp_ktp');
	}

	//chart
	public function statistik_bp_ktp() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_bp_ktp) FROM (bp_ktp)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from bp_ktp GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_bp_ktp($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN BELUM MEMILIKI RUMAH ---------------------------------------------------------------------
	function get_belum_memiliki_rumah() {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->order_by('id_belum_memiliki_rumah', 'DESC');
		$this->db->from('tsurat_ket_belum_memiliki_rumah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_belum_memiliki_rumah($data) {
		$this->db->insert('tsurat_ket_belum_memiliki_rumah', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_belum_memiliki_rumah($id) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		return $this->db->get_where('tsurat_ket_belum_memiliki_rumah', array('id_belum_memiliki_rumah' => $id));
	}

	public function edit_belum_memiliki_rumah($data,$id) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->from('tsurat_ket_belum_memiliki_rumah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		$this->db->update('tsurat_ket_belum_memiliki_rumah',$data, array('id_belum_memiliki_rumah' => $id));
	}

	public function hapus_belum_memiliki_rumah($id) {
		$this->db->where('id_belum_memiliki_rumah',$id);
		$this->db->delete('tsurat_ket_belum_memiliki_rumah');
	}

	function cetak_belum_memiliki_rumah($id) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		$this->db->where('id_belum_memiliki_rumah',$id);
		return $this->db->get('tsurat_ket_belum_memiliki_rumah');
		
	}

	function cetak_belum_memiliki_rumah1($id) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		$this->db->where('id_belum_memiliki_rumah',$id);
		return $this->db->get('tsurat_ket_belum_memiliki_rumah');
		
	}

	public function cetak_data_belum_memiliki_rumah($id) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->from('tsurat_ket_belum_memiliki_rumah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		$this->db->where('id_belum_memiliki_rumah', $id);
		return $this->db->get();
	}

	public function cetak_data_belum_memiliki_rumah1($id) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->from('tsurat_ket_belum_memiliki_rumah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		$this->db->where('id_belum_memiliki_rumah', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap belum memiliki rumah
	function rekap_belum_memiliki_rumah($T1,$T2) {
		$this->db->select('tsurat_ket_belum_memiliki_rumah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ket_belum_memiliki_rumah.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_ket_belum_memiliki_rumah');
	}

	//chart
	public function statistik_belum_memiliki_rumah() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_belum_memiliki_rumah) FROM (tsurat_ket_belum_memiliki_rumah)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_ket_belum_memiliki_rumah GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_bp_rumah($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//DAFTAR NIKAH -------------------------------------------------------------------------------------------------
		function get_daftar_nikah() {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->order_by('id_daftar_nikah', 'DESC');
		$this->db->from('tdaftar_nikah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_daftar_nikah($data) {
		$this->db->insert('tdaftar_nikah', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_daftar_nikah($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		return $this->db->get_where('tdaftar_nikah', array('id_daftar_nikah' => $id));
	}

	public function edit_daftar_nikah($data,$id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->from('tdaftar_nikah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->update('tdaftar_nikah',$data, array('id_daftar_nikah' => $id));
	}

	public function hapus_daftar_nikah($id) {
		$this->db->where('id_daftar_nikah',$id);
		$this->db->delete('tdaftar_nikah');
	}

	function cetak_daftar_nikah($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_nikah1($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_nonis($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N1($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N11($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N2($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N21($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N3($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N31($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N4($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N41($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N5($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N51($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N6($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N61($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N7($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_N71($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_surat_wali($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_surat_wali1($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_surat_pernyataan($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_surat_pernyataan1($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	function cetak_daftar_surat_keterangan_wali($id) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('id_daftar_nikah',$id);
		return $this->db->get('tdaftar_nikah');
		
	}

	//Awal kode untuk rekap daftar nikah
	function rekap_daftar_nikah($T1,$T2) {
		$this->db->select('tdaftar_nikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tdaftar_nikah.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tdaftar_nikah');
	}

	//chart
	public function statistik_daftar_nikah() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_daftar_nikah) FROM (tdaftar_nikah)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tdaftar_nikah GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_daftar_nikah($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN DOMISILI TINGGAL ---------------------------------------------------------------------
	function get_domisili_tinggal() {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->order_by('id_surat_domtinggal', 'DESC');
		$this->db->from('tsurat_domtinggal');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		return $this->db->get();
	}
	

	public function tambah_domisili_tinggal($data) {
		$this->db->insert('tsurat_domtinggal', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_domisili_tinggal($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		return $this->db->get_where('tsurat_domtinggal', array('id_surat_domtinggal' => $id));
	}

	public function edit_domisili_tinggal($data,$id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->from('tsurat_domtinggal');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		$this->db->update('tsurat_domtinggal',$data, array('id_surat_domtinggal' => $id));
	}

	public function hapus_domisili_tinggal($id) {
		$this->db->where('id_surat_domtinggal',$id);
		$this->db->delete('tsurat_domtinggal');
	}

	function cetak_domisili_tinggal($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');	
	}

	public function tampil_anggota1($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk1', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
	  }

	  public function tampil_anggota2($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk2', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
	  }

	  public function tampil_anggota3($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk3', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
	  }

	  public function tampil_anggota4($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk4', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
	  }

	  public function tampil_anggota5($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk5', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
	  }

	  public function tampil_anggota6($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk6', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
	  }


	function cetak_domisili_tinggal1($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		$this->db->where('id_surat_domtinggal',$id);
		return $this->db->get('tsurat_domtinggal');
		
	}
	
	public function cetak_data_domtinggal($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->from('tsurat_domtinggal');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		$this->db->where('id_surat_domtinggal', $id);
		return $this->db->get();
	}

	public function cetak_data_domtinggal1($id) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->from('tsurat_domtinggal');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		$this->db->where('id_surat_domtinggal', $id);
		return $this->db->get();
	}


	//Awal kode untuk rekap domisili tinggal
	function rekap_domisili_tinggal($T1,$T2) {
		$this->db->select('tsurat_domtinggal.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domtinggal.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_domtinggal');
	}

	//chart
	public function statistik_domisili_tinggal() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_domtinggal) FROM (tsurat_domtinggal)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_domtinggal GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_domtinggal($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN DOMISILI USAHA ---------------------------------------------------------------------
	function get_domisili_usaha() {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->order_by('id_surat_domusaha', 'DESC');
		$this->db->from('tsurat_domusaha');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_domisili_usaha($data) {
		$this->db->insert('tsurat_domusaha', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_domisili_usaha($id) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		return $this->db->get_where('tsurat_domusaha', array('id_surat_domusaha' => $id));
	}

	public function edit_domisili_usaha($data,$id) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->from('tsurat_domusaha');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		$this->db->update('tsurat_domusaha',$data, array('id_surat_domusaha' => $id));
	}

	public function hapus_domisili_usaha($id) {
		$this->db->where('id_surat_domusaha',$id);
		$this->db->delete('tsurat_domusaha');
	}

	function cetak_domisili_usaha($id) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		$this->db->where('id_surat_domusaha',$id);
		return $this->db->get('tsurat_domusaha');
		
	}

	function cetak_domisili_usaha1($id) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		$this->db->where('id_surat_domusaha',$id);
		return $this->db->get('tsurat_domusaha');
		
	}

	public function cetak_data_domisili_usaha($id) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->from('tsurat_domusaha');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		$this->db->where('id_surat_domusaha', $id);
		return $this->db->get();
	}

	public function cetak_data_domisili_usaha1($id) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->from('tsurat_domusaha');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		$this->db->where('id_surat_domusaha', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap domisili usaha
	function rekap_domisili_usaha($T1,$T2) {
		$this->db->select('tsurat_domusaha.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domusaha.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_domusaha');
	}

	//chart
	public function statistik_domisili_usaha() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_domusaha) FROM (tsurat_domusaha)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_domusaha GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_domusaha($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN PERNYATAAN GADAI ---------------------------------------------------------------------
	function get_gadai() {
		$this->db->select('tsurat_gadai.*, tpenduduk.*');
		$this->db->order_by('id_gadai', 'DESC');
		$this->db->from('tsurat_gadai');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_gadai.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_gadai($data) {
		$this->db->insert('tsurat_gadai', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_gadai($id) {
		$this->db->select('tsurat_gadai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_gadai.id_penduduk', 'left');
		return $this->db->get_where('tsurat_gadai', array('id_gadai' => $id));
	}

	public function edit_gadai($data,$id) {
		$this->db->select('tsurat_gadai.*, tpenduduk.*');
		$this->db->from('tsurat_gadai');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_gadai.id_penduduk', 'left');
		$this->db->update('tsurat_gadai',$data, array('id_gadai' => $id));
	}

	public function hapus_gadai($id) {
		$this->db->where('id_gadai',$id);
		$this->db->delete('tsurat_gadai');
	}

	function cetak_gadai($id) {
		$this->db->select('tsurat_gadai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_gadai.id_penduduk', 'left');
		$this->db->where('id_gadai',$id);
		return $this->db->get('tsurat_gadai');
	}

	function cetak_gadai1($id) {
		$this->db->select('tsurat_gadai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_gadai.id_penduduk', 'left');
		$this->db->where('id_gadai',$id);
		return $this->db->get('tsurat_gadai');
	}

	//Awal kode untuk rekap domisili usaha
	function rekap_gadai($T1,$T2) {
		$this->db->select('tsurat_gadai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_gadai.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_gadai');
	}

	//chart
	public function statistik_gadai() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_gadai) FROM (tsurat_gadai)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_gadai GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_gadai($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN PERNYATAAN RAMAI ---------------------------------------------------------------------
	function get_ramai() {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->order_by('id_surat_ramai', 'DESC');
		$this->db->from('tsurat_ramai');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_ramai($data) {
		$this->db->insert('tsurat_ramai', $data);
	}

	public function getEdit_ramai($id) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		return $this->db->get_where('tsurat_ramai', array('id_surat_ramai' => $id));
	}

	public function edit_ramai($data,$id) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->from('tsurat_ramai');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		$this->db->update('tsurat_ramai',$data, array('id_surat_ramai' => $id));
	}

	public function hapus_ramai($id) {
		$this->db->where('id_surat_ramai',$id);
		$this->db->delete('tsurat_ramai');
	}

	function cetak_ramai($id) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		$this->db->where('id_surat_ramai',$id);
		return $this->db->get('tsurat_ramai');
		
	}

	function cetak_ramai1($id) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		$this->db->where('id_surat_ramai',$id);
		return $this->db->get('tsurat_ramai');
		
	}

	function cetak_pernyataan_ramai($id) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		$this->db->where('id_surat_ramai',$id);
		return $this->db->get('tsurat_ramai');
		
	}

	function cetak_pernyataan_ramai1($id) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		$this->db->where('id_surat_ramai',$id);
		return $this->db->get('tsurat_ramai');
		
	}

	//Awal kode untuk rekap izin ramai
	function rekap_ramai($T1,$T2) {
		$this->db->select('tsurat_ramai.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_ramai.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_ramai');
	}

	//chart
	public function statistik_ramai() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_ramai) FROM (tsurat_ramai)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_ramai GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_ramai($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN PERNYATAAN JUAL BELI ---------------------------------------------------------------------
	function get_jual_beli() {
		$this->db->select('tsurat_jualbeli.*, tpenduduk.*');
		$this->db->order_by('id_jb', 'DESC');
		$this->db->from('tsurat_jualbeli');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_jualbeli.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_jual_beli($data) {
		$this->db->insert('tsurat_jualbeli', $data);
	}

	public function getEdit_jual_beli($id) {
		$this->db->select('tsurat_jualbeli.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_jualbeli.id_penduduk', 'left');
		return $this->db->get_where('tsurat_jualbeli', array('id_jb' => $id));
	}

	public function edit_jual_beli($data,$id) {
		$this->db->select('tsurat_jualbeli.*, tpenduduk.*');
		$this->db->from('tsurat_jualbeli');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_jualbeli.id_penduduk', 'left');
		$this->db->update('tsurat_jualbeli',$data, array('id_jb' => $id));
	}

	public function hapus_jual_beli($id) {
		$this->db->where('id_jb',$id);
		$this->db->delete('tsurat_jualbeli');
	}

	function cetak_jual_beli($id) {
		$this->db->select('tsurat_jualbeli.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_jualbeli.id_penduduk', 'left');
		$this->db->where('id_jb',$id);
		return $this->db->get('tsurat_jualbeli');
		
	}

	function cetak_jual_beli1($id) {
		$this->db->select('tsurat_jualbeli.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_jualbeli.id_penduduk', 'left');
		$this->db->where('id_jb',$id);
		return $this->db->get('tsurat_jualbeli');
		
	}

	//Awal kode untuk rekap jual beli
	function rekap_jual_beli($T1,$T2) {
		$this->db->select('tsurat_jualbeli.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_jualbeli.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_jualbeli');
	}

	//chart
	public function statistik_jual_beli() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_jb) FROM (tsurat_jualbeli)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_jualbeli GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_juak_beli($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN KEHILANGAN -------------------------------------------------------------------------------------
	function get_kehilangan() {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->order_by('id_surat_kehilangan', 'DESC');
		$this->db->from('tsurat_kehilangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_kehilangan($data) {
		$this->db->insert('tsurat_kehilangan', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_kehilangan($id) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		return $this->db->get_where('tsurat_kehilangan', array('id_surat_kehilangan' => $id));
	}

	public function edit_kehilangan($data,$id) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->from('tsurat_kehilangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		$this->db->update('tsurat_kehilangan',$data, array('id_surat_kehilangan' => $id));
	}

	public function hapus_kehilangan($id) {
		$this->db->where('id_surat_kehilangan',$id);
		$this->db->delete('tsurat_kehilangan');
	}

	function cetak_kehilangan($id) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		$this->db->where('id_surat_kehilangan',$id);
		return $this->db->get('tsurat_kehilangan');
		
	}

	function cetak_kehilangan1($id) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		$this->db->where('id_surat_kehilangan',$id);
		return $this->db->get('tsurat_kehilangan');
		
	}

	public function cetak_data_kehilangan($id) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->from('tsurat_kehilangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		$this->db->where('id_surat_kehilangan', $id);
		return $this->db->get();
	}

	public function cetak_data_kehilangan1($id) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->from('tsurat_kehilangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		$this->db->where('id_surat_kehilangan', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap kehilangan
	function rekap_kehilangan($T1,$T2) {
		$this->db->select('tsurat_kehilangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kehilangan.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_kehilangan');
	}

	//chart
	public function statistik_kehilangan() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_kehilangan) FROM (tsurat_kehilangan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_kehilangan GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_kehilangan($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//KELAHIRAN -------------------------------------------------------------------------------------------------
	function get_kelahiran() {
		$this->db->select('tsurat_kelahiran.*, tpenduduk.*');
		$this->db->order_by('id_surat_kelahiran', 'DESC');
		$this->db->from('tsurat_kelahiran');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kelahiran.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_kelahiran($data) {
		$this->db->insert('tsurat_kelahiran', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_kelahiran($id) {
		$this->db->select('tsurat_kelahiran.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kelahiran.id_penduduk', 'left');
		return $this->db->get_where('tsurat_kelahiran', array('id_surat_kelahiran' => $id));
	}

	public function edit_kelahiran($data,$id) {
		$this->db->select('tsurat_kelahiran.*, tpenduduk.*');
		$this->db->from('tsurat_kelahiran');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kelahiran.id_penduduk', 'left');
		$this->db->update('tsurat_kelahiran',$data, array('id_surat_kelahiran' => $id));
	}

	public function hapus_kelahiran($id) {
		$this->db->where('id_surat_kelahiran',$id);
		$this->db->delete('tsurat_kelahiran');
	}

	function cetak_kelahiran($id) {
		$this->db->select('tsurat_kelahiran.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kelahiran.id_penduduk', 'left');
		$this->db->where('id_surat_kelahiran',$id);
		return $this->db->get('tsurat_kelahiran');
		
	}

	function cetak_data_arsip($id) {
		$this->db->select('tsurat_kelahiran.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kelahiran.id_penduduk', 'left');
		$this->db->where('id_surat_kelahiran',$id);
		return $this->db->get('tsurat_kelahiran');
		
	}

	//Awal kode untuk rekap kelahiran
	function rekap_kelahiran($T1,$T2) {
		$this->db->select('tsurat_kelahiran.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kelahiran.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_kelahiran');
	}

	//chart
	public function statistik_kelahiran() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_kelahiran) FROM (tsurat_kelahiran)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_kelahiran GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_kelahiran($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN KEMATIAN -------------------------------------------------------------------------------------
	function get_kematian() {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->order_by('id_surat_kematian', 'DESC');
		$this->db->from('tsurat_kematian');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_kematian($data) {
		$this->db->insert('tsurat_kematian', $data);
	}

	public function getEdit_kematian($id) {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		return $this->db->get_where('tsurat_kematian', array('id_surat_kematian' => $id));
	}

	public function edit_kematian($data,$id) {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->from('tsurat_kematian');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		$this->db->update('tsurat_kematian',$data, array('id_surat_kematian' => $id));
	}

	public function hapus_kematian($id) {
		$this->db->where('id_surat_kematian',$id);
		$this->db->delete('tsurat_kematian');
	}

	function cetak_kematian($id) {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		$this->db->where('id_surat_kematian',$id);
		return $this->db->get('tsurat_kematian');
		
	}

	function cetak_kematian1($id) {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		$this->db->where('id_surat_kematian',$id);
		return $this->db->get('tsurat_kematian');
		
	}

	function cetak_data_penguburan($id) {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		$this->db->where('id_surat_kematian',$id);
		return $this->db->get('tsurat_kematian');
		
	}

	//Awal kode untuk rekap kematian
	function rekap_kematian($T1,$T2) {
		$this->db->select('tsurat_kematian.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_kematian.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_kematian');
	}

	//chart
	public function statistik_kematian() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_kematian) FROM (tsurat_kematian)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_kematian GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_kematian($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//SURAT KETERANGAN KENAL LAHIR -------------------------------------------------------------------------------------
	function get_kenal_lahir() {
		$this->db->select('tkenal_lahir.*, tpenduduk.*');
		$this->db->order_by('id_kenal_lahir', 'DESC');
		$this->db->from('tkenal_lahir');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkenal_lahir.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_kenal_lahir($data) {
		$this->db->insert('tkenal_lahir', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_kenal_lahir($id) {
		$this->db->select('tkenal_lahir.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkenal_lahir.id_penduduk', 'left');
		return $this->db->get_where('tkenal_lahir', array('id_kenal_lahir' => $id));
	}

	public function edit_kenal_lahir($data,$id) {
		$this->db->select('tkenal_lahir.*, tpenduduk.*');
		$this->db->from('tkenal_lahir');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkenal_lahir.id_penduduk', 'left');
		$this->db->update('tkenal_lahir',$data, array('id_kenal_lahir' => $id));
	}

	public function hapus_kenal_lahir($id) {
		$this->db->where('id_kenal_lahir',$id);
		$this->db->delete('tkenal_lahir');
	}

	function cetak_kenal_lahir($id) {
		$this->db->select('tkenal_lahir.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkenal_lahir.id_penduduk', 'left');
		$this->db->where('id_kenal_lahir',$id);
		return $this->db->get('tkenal_lahir');
		
	}

	function cetak_kenal_lahir1($id) {
		$this->db->select('tkenal_lahir.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkenal_lahir.id_penduduk', 'left');
		$this->db->where('id_kenal_lahir',$id);
		return $this->db->get('tkenal_lahir');
		
	}

	//Awal kode untuk rekap kenal lahir
	function rekap_kenal_lahir($T1,$T2) {
		$this->db->select('tkenal_lahir.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tkenal_lahir.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tkenal_lahir');
	}

	//chart
	public function statistik_kenal_lahir() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_kenal_lahir) FROM (tkenal_lahir)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tkenal_lahir GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_kenal_lahir($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN KTP SEMENTARA -------------------------------------------------------------------------------------
	function get_ktp_sementara() {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->order_by('id_ktps', 'DESC');
		$this->db->from('tktpsementara');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_ktp_sementara($data) {
		$this->db->insert('tktpsementara', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_ktp_sementara($id) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		return $this->db->get_where('tktpsementara', array('id_ktps' => $id));
	}

	public function edit_ktp_sementara($data,$id) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->from('tktpsementara');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		$this->db->update('tktpsementara',$data, array('id_ktps' => $id));
	}

	public function hapus_ktp_sementara($id) {
		$this->db->where('id_ktps',$id);
		$this->db->delete('tktpsementara');
	}

	function cetak_ktp_sementara($id) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		$this->db->where('id_ktps',$id);
		return $this->db->get('tktpsementara');
		
	}

	function cetak_ktp_sementara1($id) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		$this->db->where('id_ktps',$id);
		return $this->db->get('tktpsementara');
		
	}

	public function cetak_data_ktp_sementara($id) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->from('tktpsementara');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		$this->db->where('id_ktps', $id);
		return $this->db->get();
	}

	public function cetak_data_ktp_sementara1($id) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->from('tktpsementara');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		$this->db->where('id_ktps', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap ktp sementara
	function rekap_ktp_sementara($T1,$T2) {
		$this->db->select('tktpsementara.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tktpsementara.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tktpsementara');
	}

	//chart
	public function statistik_ktp_sementara() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_ktps) FROM (tktpsementara)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tktpsementara GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_ktp_sementara($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN TANAH -------------------------------------------------------------------------------------
	function get_keterangan_tanah() {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->order_by('id_surat_tanah', 'DESC');
		$this->db->from('tsurat_keterangan_tanah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_keterangan_tanah($data) {
		$this->db->insert('tsurat_keterangan_tanah', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_keterangan_tanah($id) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		return $this->db->get_where('tsurat_keterangan_tanah', array('id_surat_tanah' => $id));
	}

	public function edit_keterangan_tanah($data,$id) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_tanah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		$this->db->update('tsurat_keterangan_tanah',$data, array('id_surat_tanah' => $id));
	}

	public function hapus_keterangan_tanah($id) {
		$this->db->where('id_surat_tanah',$id);
		$this->db->delete('tsurat_keterangan_tanah');
	}

	function cetak_keterangan_tanah($id) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		$this->db->where('id_surat_tanah',$id);
		return $this->db->get('tsurat_keterangan_tanah');
		
	}

	function cetak_keterangan_tanah1($id) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		$this->db->where('id_surat_tanah',$id);
		return $this->db->get('tsurat_keterangan_tanah');
		
	}

	public function cetak_data_keterangan_tanah($id) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_tanah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		$this->db->where('id_surat_tanah', $id);
		return $this->db->get();
	}

	public function cetak_data_keterangan_tanah1($id) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_tanah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		$this->db->where('id_surat_tanah', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap keterangan tanah
	function rekap_keterangan_tanah($T1,$T2) {
		$this->db->select('tsurat_keterangan_tanah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_keterangan_tanah');
	}

	//chart
	public function statistik_keterangan_tanah() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_tanah) FROM (tsurat_keterangan_tanah)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_keterangan_tanah GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_ket_tanah($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN JALAN -------------------------------------------------------------------------------------
	function get_keterangan_jalan() {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->order_by('id_surat_jalan', 'DESC');
		$this->db->from('tsurat_keterangan_jalan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_keterangan_jalan($data) {
		$this->db->insert('tsurat_keterangan_jalan', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_keterangan_jalan($id) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		return $this->db->get_where('tsurat_keterangan_jalan', array('id_surat_jalan' => $id));
	}

	public function edit_keterangan_jalan($data,$id) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_jalan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		$this->db->update('tsurat_keterangan_jalan',$data, array('id_surat_jalan' => $id));
	}

	public function hapus_keterangan_jalan($id) {
		$this->db->where('id_surat_jalan',$id);
		$this->db->delete('tsurat_keterangan_jalan');
	}

	function cetak_keterangan_jalan($id) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		$this->db->where('id_surat_jalan',$id);
		return $this->db->get('tsurat_keterangan_jalan');
		
	}

	function cetak_keterangan_jalan1($id) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		$this->db->where('id_surat_jalan',$id);
		return $this->db->get('tsurat_keterangan_jalan');
		
	}

	public function cetak_data_keterangan_jalan($id) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_jalan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		$this->db->where('id_surat_jalan', $id);
		return $this->db->get();
	}

	public function cetak_data_keterangan_jalan1($id) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_jalan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		$this->db->where('id_surat_jalan', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap keterangan jalan
	function rekap_keterangan_jalan($T1,$T2) {
		$this->db->select('tsurat_keterangan_jalan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_jalan.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_keterangan_jalan');
	}

	//chart
	public function statistik_keterangan_jalan() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_jalan) FROM (tsurat_keterangan_jalan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_keterangan_jalan GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_ket_jalan($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//PINDAH DATANG -------------------------------------------------------------------------------------------------
	function get_pindah_datang() {
		$this->db->select('tpindah_datang.*, tpenduduk.*');
		$this->db->order_by('id_pindah_datang', 'DESC');
		$this->db->from('tpindah_datang');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tpindah_datang.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_pindah_datang($data) {
		$this->db->insert('tpindah_datang', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_pindah_datang($id) {
		$this->db->select('tpindah_datang.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tpindah_datang.id_penduduk', 'left');
		return $this->db->get_where('tpindah_datang', array('id_pindah_datang' => $id));
	}

	public function edit_pindah_datang($data,$id) {
		$this->db->select('tpindah_datang.*, tpenduduk.*');
		$this->db->from('tpindah_datang');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tpindah_datang.id_penduduk', 'left');
		$this->db->update('tpindah_datang',$data, array('id_pindah_datang' => $id));
	}

	public function hapus_pindah_datang($id) {
		$this->db->where('id_pindah_datang',$id);
		$this->db->delete('tpindah_datang');
	}

	function cetak_pindah_datang($id) {
		$this->db->select('tpindah_datang.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tpindah_datang.id_penduduk', 'left');
		$this->db->where('id_pindah_datang',$id);
		return $this->db->get('tpindah_datang');
	}

	//Awal kode untuk rekap pindah datang
	function rekap_pindah_datang($T1,$T2) {
		$this->db->select('tpindah_datang.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tpindah_datang.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tpindah_datang');
	}

	//chart
	public function statistik_pindah_datang() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_pindah_datang) FROM (tpindah_datang)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tpindah_datang GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_pindah_datang($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//SURAT KEPEMILIKAN TANAH -------------------------------------------------------------------------------------
	function get_kepemilikan_tanah() {
		$this->db->select('tsurat_keterangan_tanah1.*, tpenduduk.*');
		$this->db->order_by('id_tanah', 'DESC');
		$this->db->from('tsurat_keterangan_tanah1');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah1.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_kepemilikan_tanah($data) {
		$this->db->insert('tsurat_keterangan_tanah1', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_kepemilikan_tanah($id) {
		$this->db->select('tsurat_keterangan_tanah1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah1.id_penduduk', 'left');
		return $this->db->get_where('tsurat_keterangan_tanah1', array('id_tanah' => $id));
	}

	public function edit_kepemilikan_tanah($data,$id) {
		$this->db->select('tsurat_keterangan_tanah1.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_tanah1');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah1.id_penduduk', 'left');
		$this->db->update('tsurat_keterangan_tanah1',$data, array('id_tanah' => $id));
	}

	public function hapus_kepemilikan_tanah($id) {
		$this->db->where('id_tanah',$id);
		$this->db->delete('tsurat_keterangan_tanah1');
	}

	function cetak_kepemilikan_tanah($id) {
		$this->db->select('tsurat_keterangan_tanah1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah1.id_penduduk', 'left');
		$this->db->where('id_tanah',$id);
		return $this->db->get('tsurat_keterangan_tanah1');
		
	}

	function cetak_kepemilikan_tanah1($id) {
		$this->db->select('tsurat_keterangan_tanah1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah1.id_penduduk', 'left');
		$this->db->where('id_tanah',$id);
		return $this->db->get('tsurat_keterangan_tanah1');
		
	}

	//Awal kode untuk rekap kepemilikan tanah
	function rekap_kepemilikan_tanah($T1,$T2) {
		$this->db->select('tsurat_keterangan_tanah1.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_tanah1.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_keterangan_tanah1');
	}

	//chart
	public function statistik_kepemilikan_tanah() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_tanah) FROM (tsurat_keterangan_tanah1)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_keterangan_tanah1 GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_kepemilikan_tanah($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN TIDAK MAMPU -------------------------------------------------------------------------------------------------
	function get_sktm() {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->order_by('id_sktm', 'DESC');
		$this->db->from('tsktm');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_sktm($data) {
		$this->db->insert('tsktm', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_sktm($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		return $this->db->get_where('tsktm', array('id_sktm' => $id));
	}

	public function edit_sktm($data,$id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->from('tsktm');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->update('tsktm',$data, array('id_sktm' => $id));
	}

	public function hapus_sktm($id) {
		$this->db->where('id_sktm',$id);
		$this->db->delete('tsktm');
	}

	function cetak_sktm($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_sktm1($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_sekolah($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_sekolah1($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_kesehatan($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_kesehatan1($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_skkm($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	function cetak_skkm1($id) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('id_sktm',$id);
		return $this->db->get('tsktm');
	}

	//Awal kode untuk rekap keterangan tidak mampu
	function rekap_sktm($T1,$T2) {
		$this->db->select('tsktm.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsktm.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsktm');
	}

	//chart
	public function statistik_sktm() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_sktm) FROM (tsktm)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsktm GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_sktm($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SKTM F1 -------------------------------------------------------------------------------------------------
	function get_sktm1($id) {
		$this->db->select('tsktm1.*, tsktm.*');
		$this->db->from('tsktm1');
		$this->db->join('tsktm','tsktm.id_sktm = tsktm1.id_sktm', 'left');
		$this->db->where('tsktm1.id_sktm',$id);
		return $this->db->get();
	}

	public function tambah_sktm1($data) {
		$this->db->insert('tsktm1', $data);
	}

	public function getEdit_sktm1($id) {
		$this->db->select('tsktm1.*, tsktm.*');
		$this->db->join('tsktm','tsktm.id_sktm = tsktm1.id_sktm', 'left');
		return $this->db->get_where('tsktm1', array('id_tsktm1' => $id));
	}

	public function edit_sktm1($data,$id) {
		$this->db->select('tsktm1.*, tsktm.*');
		$this->db->from('tsktm1');
		$this->db->join('tsktm','tsktm.id_sktm = tsktm1.id_sktm', 'left');
		$this->db->update('tsktm1',$data, array('id_tsktm1' => $id));
	}

	public function hapus_sktm1($id) {
		$this->db->where('id_tsktm1',$id);
		$this->db->delete('tsktm1');
	}

	function cetak_F1($id) {
		$this->db->select('tsktm1.*, tsktm.*');
		$this->db->join('tsktm','tsktm.id_sktm = tsktm1.id_sktm', 'left');
		$this->db->where('tsktm1.id_sktm',$id);
		return $this->db->get('tsktm1');
		
	}


//SURAT KETERANGAN USAHA -------------------------------------------------------------------------------------
	function get_sku() {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->order_by('id_sku', 'DESC');
		$this->db->from('tsku');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_sku($data) {
		$this->db->insert('tsku', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_sku($id) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		return $this->db->get_where('tsku', array('id_sku' => $id));
	}

	public function edit_sku($data,$id) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->from('tsku');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		$this->db->update('tsku',$data, array('id_sku' => $id));
	}

	public function hapus_sku($id) {
		$this->db->where('id_sku',$id);
		$this->db->delete('tsku');
	}

	function cetak_sku($id) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		$this->db->where('id_sku',$id);
		return $this->db->get('tsku');
		
	}

	function cetak_sku1($id) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		$this->db->where('id_sku',$id);
		return $this->db->get('tsku');
		
	}

	public function cetak_data_sku($id) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->from('tsku');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		$this->db->where('id_sku', $id);
		return $this->db->get();
	}

	public function cetak_data_sku1($id) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->from('tsku');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		$this->db->where('id_sku', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap keterangan tidak mampu
	function rekap_sku($T1,$T2) {
		$this->db->select('tsku.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsku.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsku');
	}

	//chart
	public function statistik_sku() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_sku) FROM (tsku)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsku GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_sku($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN LAIN LAIN -------------------------------------------------------------------------------------
	function get_lain_lain() {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->order_by('id_surat_keterangan', 'DESC');
		$this->db->from('tsurat_keterangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_lain_lain($data) {
		$this->db->insert('tsurat_keterangan', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_lain_lain($id) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		return $this->db->get_where('tsurat_keterangan', array('id_surat_keterangan' => $id));
	}

	public function edit_lain_lain($data,$id) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		$this->db->update('tsurat_keterangan',$data, array('id_surat_keterangan' => $id));
	}

	public function hapus_lain_lain($id) {
		$this->db->where('id_surat_keterangan',$id);
		$this->db->delete('tsurat_keterangan');
	}

	function cetak_lain_lain($id) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		$this->db->where('id_surat_keterangan',$id);
		return $this->db->get('tsurat_keterangan');
		
	}

	function cetak_lain_lain1($id) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		$this->db->where('id_surat_keterangan',$id);
		return $this->db->get('tsurat_keterangan');
		
	}

	public function cetak_data_lain_lain($id) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		$this->db->where('id_surat_keterangan', $id);
		return $this->db->get();
	}

	public function cetak_data_lain_lain1($id) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		$this->db->where('id_surat_keterangan', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap keterangan lain-lain
	function rekap_lain_lain($T1,$T2) {
		$this->db->select('tsurat_keterangan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_keterangan');
	}

	//chart
	public function statistik_lain_lain() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_keterangan) FROM (tsurat_keterangan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_keterangan GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_lain_lain($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT PERNYATAAN ------------------------------------------------------------------------------------------
	function get_pernyataan() {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->order_by('id_surat_pernyataan', 'DESC');
		$this->db->from('tsurat_pernyataan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_pernyataan($data) {
		$this->db->insert('tsurat_pernyataan', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_pernyataan($id) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		return $this->db->get_where('tsurat_pernyataan', array('id_surat_pernyataan' => $id));
	}

	public function edit_pernyataan($data,$id) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->from('tsurat_pernyataan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		$this->db->update('tsurat_pernyataan',$data, array('id_surat_pernyataan' => $id));
	}

	public function hapus_pernyataan($id) {
		$this->db->where('id_surat_pernyataan',$id);
		$this->db->delete('tsurat_pernyataan');
	}

	function cetak_pernyataan($id) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		$this->db->where('id_surat_pernyataan',$id);
		return $this->db->get('tsurat_pernyataan');
		
	}

	function cetak_pernyataan1($id) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		$this->db->where('id_surat_pernyataan',$id);
		return $this->db->get('tsurat_pernyataan');
		
	}

	public function cetak_data_pernyataan($id) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->from('tsurat_pernyataan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		$this->db->where('id_surat_pernyataan', $id);
		return $this->db->get();
	}

	public function cetak_data_pernyataan1($id) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->from('tsurat_pernyataan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		$this->db->where('id_surat_pernyataan', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap pernyataan
	function rekap_pernyataan($T1,$T2) {
		$this->db->select('tsurat_pernyataan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_pernyataan.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_pernyataan');
	}

	//chart
	public function statistik_pernyataan() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_pernyataan) FROM (tsurat_pernyataan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_pernyataan GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_pernyataan($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT SKCK ----------------------------------------------------------------------------------------------
	function get_skck() {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->order_by('id_surat_skck', 'DESC');
		$this->db->from('tsurat_skck');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_skck($data) {
		$this->db->insert('tsurat_skck', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_skck($id) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		return $this->db->get_where('tsurat_skck', array('id_surat_skck' => $id));
	}

	public function edit_skck($data,$id) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->from('tsurat_skck');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		$this->db->update('tsurat_skck',$data, array('id_surat_skck' => $id));
	}

	public function hapus_skck($id) {
		$this->db->where('id_surat_skck',$id);
		$this->db->delete('tsurat_skck');
	}

	function cetak_skck($id) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		$this->db->where('id_surat_skck',$id);
		return $this->db->get('tsurat_skck');
		
	}

	function cetak_skck1($id) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		$this->db->where('id_surat_skck',$id);
		return $this->db->get('tsurat_skck');
		
	}

	public function cetak_data_skck($id) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->from('tsurat_skck');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		$this->db->where('id_surat_skck', $id);
		return $this->db->get();
	}

	public function cetak_data_skck1($id) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->from('tsurat_skck');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		$this->db->where('id_surat_skck', $id);
		return $this->db->get();
	}

	//Awal kode untuk rekap skck
	function rekap_skck($T1,$T2) {
		$this->db->select('tsurat_skck.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_skck.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_skck');
	}

	//chart
	public function statistik_skck() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_skck) FROM (tsurat_skck)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_skck GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_skck($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT DOMISILI LEMBAGA ----------------------------------------------------------------------------------------------
	function get_domlembaga() {
		$this->db->select('tsurat_domlembaga.*, tpenduduk.*');
		$this->db->order_by('id_surat_domlembaga', 'DESC');
		$this->db->from('tsurat_domlembaga');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domlembaga.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_domlembaga($data) {
		$this->db->insert('tsurat_domlembaga', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_domlembaga($id) {
		$this->db->select('tsurat_domlembaga.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domlembaga.id_penduduk', 'left');
		return $this->db->get_where('tsurat_domlembaga', array('id_surat_domlembaga' => $id));
	}

	public function edit_domlembaga($data,$id) {
		$this->db->select('tsurat_domlembaga.*, tpenduduk.*');
		$this->db->from('tsurat_domlembaga');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domlembaga.id_penduduk', 'left');
		$this->db->update('tsurat_domlembaga',$data, array('id_surat_domlembaga' => $id));
	}

	public function hapus_domlembaga($id) {
		$this->db->where('id_surat_domlembaga',$id);
		$this->db->delete('tsurat_domlembaga');
	}

	function cetak_domlembaga($id) {
		$this->db->select('tsurat_domlembaga.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domlembaga.id_penduduk', 'left');
		$this->db->where('id_surat_domlembaga',$id);
		return $this->db->get('tsurat_domlembaga');
		
	}

	function cetak_domlembaga1($id) {
		$this->db->select('tsurat_domlembaga.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domlembaga.id_penduduk', 'left');
		$this->db->where('id_surat_domlembaga',$id);
		return $this->db->get('tsurat_domlembaga');
		
	}

	//Awal kode untuk rekap domisili lembaga
	function rekap_domlembaga($T1,$T2) {
		$this->db->select('tsurat_domlembaga.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domlembaga.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_domlembaga');
	}

	//chart
	public function statistik_domlembaga() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_domlembaga) FROM (tsurat_domlembaga)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_domlembaga GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_domlembaga($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT DOMISILI SEKOLAH ----------------------------------------------------------------------------------------------
	function get_domsekolah() {
		$this->db->select('tsurat_domsekolah.*, tpenduduk.*');
		$this->db->order_by('id_surat_domsekolah', 'DESC');
		$this->db->from('tsurat_domsekolah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domsekolah.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_domsekolah($data) {
		$this->db->insert('tsurat_domsekolah', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_domsekolah($id) {
		$this->db->select('tsurat_domsekolah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domsekolah.id_penduduk', 'left');
		return $this->db->get_where('tsurat_domsekolah', array('id_surat_domsekolah' => $id));
	}

	public function edit_domsekolah($data,$id) {
		$this->db->select('tsurat_domsekolah.*, tpenduduk.*');
		$this->db->from('tsurat_domsekolah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domsekolah.id_penduduk', 'left');
		$this->db->update('tsurat_domsekolah',$data, array('id_surat_domsekolah' => $id));
	}

	public function hapus_domsekolah($id) {
		$this->db->where('id_surat_domsekolah',$id);
		$this->db->delete('tsurat_domsekolah');
	}

	function cetak_domsekolah($id) {
		$this->db->select('tsurat_domsekolah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domsekolah.id_penduduk', 'left');
		$this->db->where('id_surat_domsekolah',$id);
		return $this->db->get('tsurat_domsekolah');
		
	}

	function cetak_domsekolah1($id) {
		$this->db->select('tsurat_domsekolah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domsekolah.id_penduduk', 'left');
		$this->db->where('id_surat_domsekolah',$id);
		return $this->db->get('tsurat_domsekolah');
		
	}

	//Awal kode untuk rekap domisili sekolah
	function rekap_domsekolah($T1,$T2) {
		$this->db->select('tsurat_domsekolah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domsekolah.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_domsekolah');
	}

	//chart
	public function statistik_domsekolah() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_domsekolah) FROM (tsurat_domsekolah)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_domsekolah GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_domsekolah($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT KETERANGAN PENGHASILAN -------------------------------------------------------------------------------------
	function get_penghasilan() {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->order_by('id_penghasilan', 'DESC');
		$this->db->from('tsurat_penghasilan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_penghasilan($data) {
		$this->db->insert('tsurat_penghasilan', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_penghasilan($id) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		return $this->db->get_where('tsurat_penghasilan', array('id_penghasilan' => $id));
	}

	public function edit_penghasilan($data,$id) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->from('tsurat_penghasilan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		$this->db->update('tsurat_penghasilan',$data, array('id_penghasilan' => $id));
	}

	public function hapus_penghasilan($id) {
		$this->db->where('id_penghasilan',$id);
		$this->db->delete('tsurat_penghasilan');
	}

	function cetak_penghasilan($id) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		$this->db->where('id_penghasilan',$id);
		return $this->db->get('tsurat_penghasilan');
		
	}

	function cetak_penghasilan1($id) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		$this->db->where('id_penghasilan',$id);
		return $this->db->get('tsurat_penghasilan');
		
	}

	public function cetak_data_penghasilan($id) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->from('tsurat_penghasilan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		$this->db->where('id_penghasilan', $id);
		return $this->db->get();
	}

	public function cetak_data_penghasilan1($id) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->from('tsurat_penghasilan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		$this->db->where('id_penghasilan', $id);
		return $this->db->get();
	}

	//SURAT KETERANGAN HAJI -------------------------------------------------------------------------------------
	function get_haji() {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->order_by('id_haji', 'DESC');
		$this->db->from('thaji');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		return $this->db->get();
	}

	function cek_nik_haji($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}

	public function tambah_haji($data) {
		$this->db->insert('thaji', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_haji($id) {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		return $this->db->get_where('thaji', array('id_haji' => $id));
	}

	public function edit_haji($data,$id) {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->from('thaji');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		$this->db->update('thaji',$data, array('id_haji' => $id));
	}

	public function hapus_haji($id) {
		$this->db->where('id_haji',$id);
		$this->db->delete('thaji');
	}

	function cetak_haji($id) {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		$this->db->where('id_haji',$id);
		return $this->db->get('thaji');
		
	}

	function cetak_haji1($id) {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		$this->db->where('id_haji',$id);
		return $this->db->get('thaji');
		
	}

	public function cetak_data_haji($id) {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->from('thaji');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		$this->db->where('id_haji', $id);
		return $this->db->get();
	}

	public function cetak_data_haji1($id) {
		$this->db->select('thaji.*, tpenduduk.*');
		$this->db->from('thaji');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = thaji.id_penduduk', 'left');
		$this->db->where('id_haji', $id);
		return $this->db->get();
	}

		public function statistik_haji() {
  
			$sql= $this->db->query("
	
			select
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
			ifnull((SELECT count(id_haji) FROM (thaji)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
		   from thaji GROUP BY YEAR(tgl_surat) 
	
			");
	
			return $sql;
	
	   } 

	//Awal kode untuk rekap keterangan tidak mampu
	function rekap_penghasilan($T1,$T2) {
		$this->db->select('tsurat_penghasilan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_penghasilan.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_penghasilan');
	}

	//chart
	public function statistik_penghasilan() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_penghasilan) FROM (tsurat_penghasilan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_penghasilan GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_penghasilan($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//SURAT DOMISILI PERUSAHAAN ----------------------------------------------------------------------------------------------
	function get_domperusahaan() {
		$this->db->select('tsurat_domperusahaan.*, tpenduduk.*');
		$this->db->order_by('id_surat_domperusahaan', 'DESC');
		$this->db->from('tsurat_domperusahaan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domperusahaan.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_domperusahaan($data) {
		$this->db->insert('tsurat_domperusahaan', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_domperusahaan($id) {
		$this->db->select('tsurat_domperusahaan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domperusahaan.id_penduduk', 'left');
		return $this->db->get_where('tsurat_domperusahaan', array('id_surat_domperusahaan' => $id));
	}

	public function edit_domperusahaan($data,$id) {
		$this->db->select('tsurat_domperusahaan.*, tpenduduk.*');
		$this->db->from('tsurat_domperusahaan');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domperusahaan.id_penduduk', 'left');
		$this->db->update('tsurat_domperusahaan',$data, array('id_surat_domperusahaan' => $id));
	}

	public function hapus_domperusahaan($id) {
		$this->db->where('id_surat_domperusahaan',$id);
		$this->db->delete('tsurat_domperusahaan');
	}

	function cetak_domperusahaan($id) {
		$this->db->select('tsurat_domperusahaan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domperusahaan.id_penduduk', 'left');
		$this->db->where('id_surat_domperusahaan',$id);
		return $this->db->get('tsurat_domperusahaan');
		
	}

	function cetak_domperusahaan1($id) {
		$this->db->select('tsurat_domperusahaan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domperusahaan.id_penduduk', 'left');
		$this->db->where('id_surat_domperusahaan',$id);
		return $this->db->get('tsurat_domperusahaan');
		
	}

	//Awal kode untuk rekap domisili perusahaan
	function rekap_domperusahaan($T1,$T2) {
		$this->db->select('tsurat_domperusahaan.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_domperusahaan.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_domperusahaan');
	}

	//chart
	public function statistik_domperusahaan() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_domperusahaan) FROM (tsurat_domperusahaan)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_domperusahaan GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_domperusahaan($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}


//SURAT PERNYATAAN BERSAMA ----------------------------------------------------------------------------------------------
	function get_bersama() {
		$this->db->select('tsurat_bersama.*, tpenduduk.*');
		$this->db->order_by('id_surat_bersama', 'DESC');
		$this->db->from('tsurat_bersama');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_bersama.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah_bersama($data) {
		$this->db->insert('tsurat_bersama', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit_bersama($id) {
		$this->db->select('tsurat_bersama.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_bersama.id_penduduk', 'left');
		return $this->db->get_where('tsurat_bersama', array('id_surat_bersama' => $id));
	}

	public function edit_bersama($data,$id) {
		$this->db->select('tsurat_bersama.*, tpenduduk.*');
		$this->db->from('tsurat_bersama');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_bersama.id_penduduk', 'left');
		$this->db->update('tsurat_bersama',$data, array('id_surat_bersama' => $id));
	}

	public function hapus_bersama($id) {
		$this->db->where('id_surat_bersama',$id);
		$this->db->delete('tsurat_bersama');
	}

	function cetak_bersama($id) {
		$this->db->select('tsurat_bersama.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_bersama.id_penduduk', 'left');
		$this->db->where('id_surat_bersama',$id);
		return $this->db->get('tsurat_bersama');
		
	}

	function cetak_bersama1($id) {
		$this->db->select('tsurat_bersama.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_bersama.id_penduduk', 'left');
		$this->db->where('id_surat_bersama',$id);
		return $this->db->get('tsurat_bersama');
		
	}


	//Awal kode untuk rekap pernyataan bersama
	function rekap_bersama($T1,$T2) {
		$this->db->select('tsurat_bersama.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_bersama.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_bersama');
	}

	//chart
	public function statistik_bersama() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id_surat_bersama) FROM (tsurat_bersama)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_bersama GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik_bersama($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}



//BERDASARKAN PEKERJAAN -------------------------------------------------------------------------------------------------
	function search_pekerjaan($list) {
		$this->db->where('pekerjaan', $list);
        $query = $this->db->get('tpenduduk');
        return $query;
    }

     function tampil_pekerjaan() {
		$this->db->select('id_penduduk, pekerjaan, COUNT(pekerjaan) as total');
		$this->db->group_by('pekerjaan'); 
		$this->db->order_by('total', 'desc'); 
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
	}

//BERDASARKAN PENDIDIKAN -------------------------------------------------------------------------------------------------

	function search_pendidikan($list) {
		$this->db->where('pendidikan', $list);
        $query = $this->db->get('tpenduduk');
        return $query;
    }

    function tampil_pendidikan() {
		$this->db->select('id_penduduk, pendidikan, COUNT(pendidikan) as total');
		$this->db->group_by('pendidikan'); 
		$this->db->order_by('total', 'desc'); 
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
	}

//BERDASARKAN USIA -------------------------------------------------------------------------------------------------

    function tampil_usia() {
		return $this->db->query('SELECT YEAR(tanggal_lahir) AS tahun,COUNT(YEAR(tanggal_lahir)) as usia FROM tpenduduk GROUP BY tahun ORDER BY tahun DESC');
	}

//PENDUDUK PELUANG BANSOS -------------------------------------------------------------------------------------------------
	function bansos() {
		$pekerjaan = array('buruh tani/perkebunan', 'pedagang', 'buruh harian lepas');
		$this->db->where_in('pekerjaan', $pekerjaan);
        $query = $this->db->get('tpenduduk');
        return $query;
    }

}
?>