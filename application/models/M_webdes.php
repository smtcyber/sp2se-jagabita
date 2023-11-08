<?php

class m_webdes extends CI_Model {


//ADMIN ---------------------
//VISI MISI -------------------------------------------------------------------------------------
	function get_visi_misi() {
		return $this->db->get('tb_visi_misi');
	}

	public function tambah_visi_misi($data) {
		$this->db->insert('tb_visi_misi', $data);
	}

	public function getEdit_visi_misi($id) {
		return $this->db->get_where('tb_visi_misi', array('id_visi_misi' => $id));
	}

	public function edit_visi_misi($data, $id) {
		$this->db->update('tb_visi_misi', $data, array('id_visi_misi' => $id));
	}

	public function gambar($id) {
		$this->db->where('id_visi_misi', $id);
		return $this->db->get('tb_visi_misi')->row();
	}

	public function hapus_visi_misi($id) {
		$this->db->where('id_visi_misi', $id);
		$this->db->delete('tb_visi_misi');
	}


//SEJARAH -------------------------------------------------------------------------------------
	function get_sejarah() {
		return $this->db->get('tb_sejarah');
	}

	public function tambah_sejarah($data) {
		$this->db->insert('tb_sejarah', $data);
	}

	public function getEdit_sejarah($id) {
		return $this->db->get_where('tb_sejarah', array('id_sejarah' => $id));
	}

	public function edit_sejarah($data, $id) {
		$this->db->update('tb_sejarah', $data, array('id_sejarah' => $id));
	}

	public function gambar_sejarah($id) {
		$this->db->where('id_sejarah', $id);
		return $this->db->get('tb_sejarah')->row();
	}
	
	public function hapus_sejarah($id) {
		$this->db->where('id_sejarah', $id);
		$this->db->delete('tb_sejarah');
	}


//SEJARAH -------------------------------------------------------------------------------------
	function get_wilayah() {
		return $this->db->get('tb_wilayah');
	}

	public function tambah_wilayah($data) {
		$this->db->insert('tb_wilayah', $data);
	}

	public function getEdit_wilayah($id) {
		return $this->db->get_where('tb_wilayah', array('id_wilayah' => $id));
	}

	public function edit_wilayah($data, $id) {
		$this->db->update('tb_wilayah', $data, array('id_wilayah' => $id));
	}

	public function gambar_wilayah($id) {
		$this->db->where('id_wilayah', $id);
		return $this->db->get('tb_wilayah')->row();
	}
	
	public function hapus_wilayah($id) {
		$this->db->where('id_wilayah', $id);
		$this->db->delete('tb_wilayah');
	}


//BERITA -------------------------------------------------------------------------------------
	function get_berita() {
		$this->db->order_by('id_berita', 'DESC');
		return $this->db->get('tb_berita');
	}

	public function tambah_berita($data) {
		$this->db->insert('tb_berita', $data);
	}

	public function getEdit_berita($id) {
		return $this->db->get_where('tb_berita', array('id_berita' => $id));
	}

	public function edit_berita($data, $id) {
		$this->db->update('tb_berita', $data, array('id_berita' => $id));
	}

	public function gambar_berita($id) {
		$this->db->where('id_berita', $id);
		return $this->db->get('tb_berita')->row();
	}
	
	public function hapus_berita($id) {
		$this->db->where('id_berita', $id);
		$this->db->delete('tb_berita');
	}


//POTENSI -------------------------------------------------------------------------------------
	function get_potensi() {
		$this->db->order_by('id_potensi', 'DESC');
		return $this->db->get('tb_potensi');
	}

	public function tambah_potensi($data) {
		$this->db->insert('tb_potensi', $data);
	}

	public function getEdit_potensi($id) {
		return $this->db->get_where('tb_potensi', array('id_potensi' => $id));
	}

	public function edit_potensi($data, $id) {
		$this->db->update('tb_potensi', $data, array('id_potensi' => $id));
	}

	public function gambar_potensi($id) {
		$this->db->where('id_potensi', $id);
		return $this->db->get('tb_potensi')->row();
	}
	
	public function hapus_potensi($id) {
		$this->db->where('id_potensi', $id);
		$this->db->delete('tb_potensi');
	}


//LKMD -------------------------------------------------------------------------------------
	function get_lkmd() {
		$this->db->order_by('id_lkmd', 'DESC');
		return $this->db->get('tb_lkmd');
	}

	public function tambah_lkmd($data) {
		$this->db->insert('tb_lkmd', $data);
	}

	public function getEdit_lkmd($id) {
		return $this->db->get_where('tb_lkmd', array('id_lkmd' => $id));
	}

	public function edit_lkmd($data, $id) {
		$this->db->update('tb_lkmd', $data, array('id_lkmd' => $id));
	}

	public function gambar_lkmd($id) {
		$this->db->where('id_lkmd', $id);
		return $this->db->get('tb_lkmd')->row();
	}
	
	public function hapus_lkmd($id) {
		$this->db->where('id_lkmd', $id);
		$this->db->delete('tb_lkmd');
	}


//KARANG TARUNA -------------------------------------------------------------------------------------
	function get_taruna() {
		$this->db->order_by('id_taruna', 'DESC');
		return $this->db->get('tb_taruna');
	}

	public function tambah_taruna($data) {
		$this->db->insert('tb_taruna', $data);
	}

	public function getEdit_taruna($id) {
		return $this->db->get_where('tb_taruna', array('id_taruna' => $id));
	}

	public function edit_taruna($data, $id) {
		$this->db->update('tb_taruna', $data, array('id_taruna' => $id));
	}

	public function gambar_taruna($id) {
		$this->db->where('id_taruna', $id);
		return $this->db->get('tb_taruna')->row();
	}
	
	public function hapus_taruna($id) {
		$this->db->where('id_taruna', $id);
		$this->db->delete('tb_taruna');
	}


//LINMAS -------------------------------------------------------------------------------------
	function get_linmas() {
		$this->db->order_by('id_linmas', 'DESC');
		return $this->db->get('tb_linmas');
	}

	public function tambah_linmas($data) {
		$this->db->insert('tb_linmas', $data);
	}

	public function getEdit_linmas($id) {
		return $this->db->get_where('tb_linmas', array('id_linmas' => $id));
	}

	public function edit_linmas($data, $id) {
		$this->db->update('tb_linmas', $data, array('id_linmas' => $id));
	}

	public function gambar_linmas($id) {
		$this->db->where('id_linmas', $id);
		return $this->db->get('tb_linmas')->row();
	}
	
	public function hapus_linmas($id) {
		$this->db->where('id_linmas', $id);
		$this->db->delete('tb_linmas');
	}


//LINMAS -------------------------------------------------------------------------------------
	function get_sosmed() {
		$this->db->order_by('id_sosmed', 'DESC');
		return $this->db->get('tb_sosmed');
	}

	public function tambah_sosmed($data) {
		$this->db->insert('tb_sosmed', $data);
	}

	public function getEdit_sosmed($id) {
		return $this->db->get_where('tb_sosmed', array('id_sosmed' => $id));
	}

	public function edit_sosmed($data, $id) {
		$this->db->update('tb_sosmed', $data, array('id_sosmed' => $id));
	}

	public function gambar_sosmed($id) {
		$this->db->where('id_sosmed', $id);
		return $this->db->get('tb_sosmed')->row();
	}
	
	public function hapus_sosmed($id) {
		$this->db->where('id_sosmed', $id);
		$this->db->delete('tb_sosmed');
	}
	
	function convertYoutube($string) {
		return preg_replace(
			"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			"<iframe src=\"//www.youtube.com/embed/$2\" height=\"315\" frameborder=\"0\" allowfullscreen></iframe>",
			$string
		);
	}



//PKK -------------------------------------------------------------------------------------
	function get_pkk() {
		$this->db->order_by('id_pkk', 'DESC');
		return $this->db->get('tb_pkk');
	}

	public function tambah_pkk($data) {
		$this->db->insert('tb_pkk', $data);
	}

	public function getEdit_pkk($id) {
		return $this->db->get_where('tb_pkk', array('id_pkk' => $id));
	}

	public function edit_pkk($data, $id) {
		$this->db->update('tb_pkk', $data, array('id_pkk' => $id));
	}

	public function gambar_pkk($id) {
		$this->db->where('id_pkk', $id);
		return $this->db->get('tb_pkk')->row();
	}
	
	public function hapus_pkk($id) {
		$this->db->where('id_pkk', $id);
		$this->db->delete('tb_pkk');
	}


//BACKEND -----------------------------------
	function tampil_home_header1() {
		$this->db->order_by('id_berita', 'DESC');
		$this->db->from('tb_berita');
		$this->db->limit(1);
		return $this->db->get();
	}

	function tampil_home_header2() {
		$this->db->order_by('id_berita', 'DESC');
		$this->db->from('tb_berita');
		$this->db->limit(3);
		return $this->db->get();
	}

	function tampil_home_visi_misi() {
		$this->db->order_by('id_visi_misi', 'DESC');
		$this->db->from('tb_visi_misi');
		$this->db->limit(1);
		return $this->db->get();
	}

	function tampil_home_sejarah() {
		$this->db->order_by('id_sejarah', 'DESC');
		$this->db->from('tb_sejarah');
		$this->db->limit(1);
		return $this->db->get();
	}

	function tampil_home_wilayah() {
		$this->db->order_by('id_wilayah', 'DESC');
		$this->db->from('tb_wilayah');
		$this->db->limit(1);
		return $this->db->get();
	}

	function tampil_home_sosmed() {
		$this->db->order_by('id_sosmed', 'DESC');
		$this->db->from('tb_sosmed');
		return $this->db->get();
	}

	function tampil_home_linmas() {
		$this->db->order_by('id_linmas', 'DESC');
		$this->db->from('tb_linmas');
		return $this->db->get();
	}

	function tampil_home_berita() {
		$this->db->order_by('id_berita', 'DESC');
		$this->db->from('tb_berita');
		$this->db->limit(5);
		return $this->db->get();
	}


//PAGE PROFIL
	function tampil_profil_potensi() {
		$this->db->order_by('id_potensi', 'DESC');
		$this->db->from('tb_potensi');
		return $this->db->get();
	}

//PAGE LEMBAGA
	function tampil_lkmd() {
		$this->db->order_by('id_lkmd', 'DESC');
		$this->db->from('tb_lkmd');
		return $this->db->get();
	}

	function tampil_taruna() {
		$this->db->order_by('id_taruna', 'DESC');
		$this->db->from('tb_taruna');
		return $this->db->get();
	}

	function tampil_linmas() {
		$this->db->order_by('id_linmas');
		$this->db->from('tb_linmas');
		return $this->db->get();
	}

	function tampil_pkk() {
		$this->db->order_by('id_pkk');
		$this->db->from('tb_pkk');
		return $this->db->get();
	}

//PAGE BERITA
	//Semua Berita ------------------------------------
	function tampil_semua_berita($limit,$offset) {
		$this->db->order_by('id_berita', 'DESC');
		$this->db->from('tb_berita');
		$this->db->limit($limit, $offset);
		return $this->db->get();
	}

	function tampil_semua_page() {
		$this->db->order_by('id_berita', 'DESC');
		$this->db->from('tb_berita');
		return $this->db->get();
	}

	//Berita Mancanegara------------------------------------
	function tampil_berita_mancanegara($limit,$offset) {
		$berita = array('Berita Mancanegara');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

	function tampil_page_mancanegara() {
		$berita = array('Berita Mancanegara');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


    //Berita Dalam Negeri------------------------------------
    function tampil_berita_negeri($limit,$offset) {
		$berita = array('Berita Dalam Negeri');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_negeri() {
		$berita = array('Berita Dalam Negeri');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Desa------------------------------------
    function tampil_berita_desa($limit,$offset) {
		$berita = array('Berita Desa');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_desa() {
		$berita = array('Berita Desa');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Politik------------------------------------
    function tampil_berita_politik($limit,$offset) {
		$berita = array('Politik');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_politik() {
		$berita = array('Politik');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Kuliner------------------------------------
    function tampil_berita_kuliner($limit,$offset) {
		$berita = array('Kuliner');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_kuliner() {
		$berita = array('kuliner');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Olahraga------------------------------------
    function tampil_berita_olahraga($limit,$offset) {
		$berita = array('Olahraga');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_olahraga() {
		$berita = array('Olahraga');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Pendidikan------------------------------------
    function tampil_berita_pendidikan($limit,$offset) {
		$berita = array('Pendidikan');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_pendidikan() {
		$berita = array('Pendidikan');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Teknologi------------------------------------
    function tampil_berita_teknologi($limit,$offset) {
		$berita = array('Teknologi');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_teknologi() {
		$berita = array('Teknologi');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Gaya Hidup------------------------------------
    function tampil_berita_hidup($limit,$offset) {
		$berita = array('Gaya Hidup');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_hidup() {
		$berita = array('Gaya Hidup');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Berita Traveling------------------------------------
    function tampil_berita_traveling($limit,$offset) {
		$berita = array('Traveling');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->limit($limit, $offset);
		$query = $this->db->get('tb_berita');
        return $query;
	}

    function tampil_page_traveling() {
		$berita = array('Traveling');
		$this->db->where_in('tipe_berita', $berita);
		$this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get('tb_berita');
        return $query;
    }


//Read More Berita---------------------------------------
    function read_more($id) {
    	return $this->db->get_where('tb_berita', array('id_berita' => $id));
    }


//PAGE DATA PENDUDUK -----------------------------------------
    function tampil_penduduk($limit,$offset) {
		$this->db->where('deleted_at', NULL);
		$this->db->limit($limit, $offset);
		$query =  $this->db->query("SELECT * FROM tpenduduk GROUP BY id_penduduk")->num_rows();
        return $query;
	}

    function tampil_page_penduduk() {
		$this->db->where('deleted_at', NULL);
        $query = $this->db->get('tpenduduk');
        return $query;
    }

//PAGE DATA PENDIDIKAN -----------------------------------------
    function tampil_pendidikan($limit,$offset) {
    	$this->db->select('id_penduduk, pendidikan, COUNT(pendidikan) as total');
		$this->db->group_by('pendidikan'); 
		$this->db->where('deleted_at', NULL);
		$this->db->order_by('total', 'desc'); 
		$this->db->limit($limit, $offset);
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
	}

    function tampil_data_pendidikan() {
		$this->db->select('id_penduduk, pendidikan, COUNT(pendidikan) as total');
		$this->db->group_by('pendidikan'); 
		$this->db->where('deleted_at', NULL);
		$this->db->order_by('total', 'desc');
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
    }

//PAGE DATA PEKERJAAN -----------------------------------------
    function tampil_pekerjaan($limit,$offset) {
    	$this->db->select('id_penduduk, pekerjaan, COUNT(pekerjaan) as total');
		$this->db->group_by('pekerjaan'); 
		$this->db->where('deleted_at', NULL);
		$this->db->order_by('total', 'desc'); 
		$this->db->limit($limit, $offset);
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
	}

    function tampil_data_pekerjaan() {
		$this->db->select('id_penduduk, pekerjaan, COUNT(pekerjaan) as total');
		$this->db->group_by('pekerjaan'); 
		$this->db->where('deleted_at', NULL);
		$this->db->order_by('total', 'desc');
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
    }

//PAGE USIA-------------------------------------------------------
    function tampil_usia() {
		return $this->db->query('SELECT YEAR(tanggal_lahir) AS tahun,COUNT(YEAR(tanggal_lahir)) as usia FROM tpenduduk GROUP BY tahun ORDER BY tahun DESC');
	}


//PAGE KELAMIN----------------------------------------------------
	function tampil_kelamin() {
		$this->db->where('deleted_at', NULL);
		$this->db->select('id_penduduk, kelamin, COUNT(kelamin) as total');
		$this->db->group_by('kelamin'); 
		$this->db->order_by('total', 'desc'); 
		$hasil = $this->db->get('tpenduduk');
		return $hasil;
	}


//PAGE WAFAT-------------------------------------------------------
	function get_penduduk_wafat() {
	    $this->db->where('deleted_at !=', NULL);
		return $this->db->get('tpenduduk');
	}


//saran dan kritikan -------------------------------------------------------------------------------------
	function get_saran() {
		$this->db->order_by('id_saran', 'DESC');
		return $this->db->get('tb_saran');
	}

	public function tambah_saran($data) {
		$this->db->insert('tb_saran', $data);
	}

	public function hapus_saran($id) {
		$this->db->where('id_saran', $id);
		$this->db->delete('tb_saran');
	}
}
?>