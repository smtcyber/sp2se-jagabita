<?php

class m_surat_keterangan_telah_menikah extends CI_Model {
    function get() {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->order_by('id', 'DESC');
		$this->db->from('tsurat_keterangan_telah_menikah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_penduduk', 'left');
		return $this->db->get();
	}

	public function tambah($data) {
		$this->db->insert('tsurat_keterangan_telah_menikah', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}

	public function getEdit($id) {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_penduduk', 'left');
		return $this->db->get_where('tsurat_keterangan_telah_menikah', array('id' => $id));
	}
	public function getPasangan($id) {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_pasangan', 'left');
		return $this->db->get_where('tsurat_keterangan_telah_menikah', array('id' => $id));
	}

	public function edit($data,$id) {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->from('tsurat_keterangan_telah_menikah');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_penduduk', 'left');
		$this->db->update('tsurat_keterangan_telah_menikah',$data, array('id' => $id));
	}

	public function hapus($id) {
		$this->db->where('id',$id);
		$this->db->delete('tsurat_keterangan_telah_menikah');
	}

	public function getAnak($id){
		$this->db->from('tsurat_keterangan_telah_menikah_anak');
		$this->db->order_by('id', 'asc');
		$this->db->where("id_surat",$id);
		return $this->db->get();
	}
	public function tambah_anak($data) {
		$this->db->insert('tsurat_keterangan_telah_menikah_anak', $data);
		$last_id = $this->db->insert_id();
        return  $last_id;
	}
	public function hapus_anak($id) {
		$this->db->where('id',$id);
		$this->db->delete('tsurat_keterangan_telah_menikah_anak');
	}

	function cetak($id) {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_penduduk', 'left');
		$this->db->where('id',$id);
		return $this->db->get('tsurat_keterangan_telah_menikah');
		
	}

	function cetak1($id) {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_penduduk', 'left');
		$this->db->where('id',$id);
		return $this->db->get('tsurat_keterangan_telah_menikah');
		
	}

	//Awal kode untuk rekap beda identitas
	function rekap($T1,$T2) {
		$this->db->select('tsurat_keterangan_telah_menikah.*, tpenduduk.*');
		$this->db->join('tpenduduk','tpenduduk.id_penduduk = tsurat_keterangan_telah_menikah.id_penduduk', 'left');
		$this->db->where('tgl_surat >=',$T1);
		$this->db->where('tgl_surat <=',$T2);
		return $this->db->get('tsurat_keterangan_telah_menikah');
	}

	//chart
	public function statistik() {
  
  		$sql= $this->db->query("
  
  		select
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=1)AND (YEAR(tgl_surat)=2020))),0) AS 'Januari',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=2)AND (YEAR(tgl_surat)=2020))),0) AS 'Februari',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=3)AND (YEAR(tgl_surat)=2020))),0) AS 'Maret',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=4)AND (YEAR(tgl_surat)=2020))),0) AS 'April',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=5)AND (YEAR(tgl_surat)=2020))),0) AS 'Mei',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=6)AND (YEAR(tgl_surat)=2020))),0) AS 'Juni',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=7)AND (YEAR(tgl_surat)=2020))),0) AS 'Juli',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=8)AND (YEAR(tgl_surat)=2020))),0) AS 'Agustus',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=9)AND (YEAR(tgl_surat)=2020))),0) AS 'September',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=10)AND (YEAR(tgl_surat)=2020))),0) AS 'Oktober',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=11)AND (YEAR(tgl_surat)=2020))),0) AS 'November',
  		ifnull((SELECT count(id) FROM (tsurat_keterangan_telah_menikah)WHERE((Month(tgl_surat)=12)AND (YEAR(tgl_surat)=2020))),0) AS 'Desember'
 		from tsurat_keterangan_telah_menikah GROUP BY YEAR(tgl_surat) 
  
  		");
  
  		return $sql;
  
 	} 

 	function cek_nik($nik) {
		$this->db->where('no_ktp',$nik);
		$this->db->where('deleted_at', NULL);
		return $this->db->get('tpenduduk');
	}
}