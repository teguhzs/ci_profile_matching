<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasil extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    private $_tbAlternatif = "tb_alternatif";
    private $_tbAspek = "tb_aspek";
    private $_tbSubKriteria = "tb_sub_kriteria";
    private $_tbPenilaian = "tb_penilaian";

    // public $id_penilaian;
    // public $id_alternatif;
    // public $id_sub_kriteria;
    // public $skor;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'id_alternatif[]',
    //         'label'=> 'Id Alternatif',
    //         'rules'=> 'required'],

    //         ['field' => 'id_sub_kriteria[]',
    //         'label'=> 'Id Sub Kriteria',
    //         'rules'=> 'required'],

    //         ['field' => 'skor[]',
    //         'label'=> 'Skor',
    //         'rules'=> 'required']

    //     ];
    // }

    public function emptyTable()
    {
       return $this->db->empty_table($this->_table);
    }
    
    
    public function getAllAspek()
    {
        return $this->db->get($this->_tb_aspek)->result();
    }
    
    public function getBobot($kode_sub_kriteria)
    {
        $this->db->select('kode_sub_kriteria, keterangan, bobot');
        $this->db->from($this->_tbSubKriteria);
        $this->db->where('kode_sub_kriteria', $kode_sub_kriteria);
        

        $query = $this->db->get();
        return $query->row();
    }

    public function getX($id_alternatif,$kode_sub_kriteria)
    {
        $this->db->select('tb_sub_kriteria.bobot as bobot, tb_sub_kriteria.nilai_sub_kriteria as nilai_sub_kriteria, tb_sub_kriteria.keterangan as keterangan, tb_penilaian.skor as skor,tb_alternatif.kode_alternatif as kode_alternatif, tb_aspek.nama_aspek as nama_aspek, tb_aspek.kode_aspek as kode_aspek,tb_sub_kriteria.kode_sub_kriteria as kode_sub_kriteria');
        $this->db->from($this->_tbPenilaian);
        $this->db->join($this->_tbAlternatif, 'tb_alternatif.id_alternatif = tb_penilaian.id_alternatif');
        $this->db->join($this->_tbSubKriteria, 'tb_sub_kriteria.id_sub_kriteria = tb_penilaian.id_sub_kriteria');
        $this->db->join($this->_tbAspek, 'tb_aspek.id_aspek = tb_sub_kriteria.id_aspek');
        $this->db->where('kode_alternatif', $id_alternatif);
        $this->db->where('kode_sub_kriteria', $kode_sub_kriteria);
        
        $this->db->order_by("kode_sub_kriteria", "asc");
        

        $query = $this->db->get();
        return $query->row();
    }

    public function getAllcon()
    {
        $query = $this->db->query(
                                "SELECT DISTINCT id_alternatif, 
                                GROUP_CONCAT(skor ORDER BY id_sub_kriteria) AS penilaian_list 
                                FROM tb_penilaian 
                                GROUP BY id_alternatif");
        return $query->result();
    }

    public function getAll($id_alternatif)
    {
        $this->db->select('tb_sub_kriteria.nama_sub_kriteria as nama_sub_kriteria, tb_sub_kriteria.bobot as bobot, tb_sub_kriteria.nilai_sub_kriteria as nilai_sub_kriteria, tb_sub_kriteria.keterangan as keterangan, tb_penilaian.skor as skor,tb_alternatif.kode_alternatif as kode_alternatif, tb_aspek.nama_aspek as nama_aspek, tb_aspek.kode_aspek as kode_aspek,tb_sub_kriteria.kode_sub_kriteria as kode_sub_kriteria');
        $this->db->from($this->_tbPenilaian);
        $this->db->join($this->_tbAlternatif, 'tb_alternatif.id_alternatif = tb_penilaian.id_alternatif');
        $this->db->join($this->_tbSubKriteria, 'tb_sub_kriteria.id_sub_kriteria = tb_penilaian.id_sub_kriteria');
        $this->db->join($this->_tbAspek, 'tb_aspek.id_aspek = tb_sub_kriteria.id_aspek');
        $this->db->where('kode_alternatif', $id_alternatif);
        
        $this->db->order_by("kode_aspek", "asc");
        

        $query = $this->db->get();
        return $query->result();
    }

    public function hitung($keterangan,$kode_aspek)
    {
        $this->db->select('tb_sub_kriteria.kode_sub_kriteria as kode_sub_kriteria, tb_aspek.kode_aspek as kode_aspek, tb_sub_kriteria.keterangan as keterangan');
        $this->db->from($this->_tbSubKriteria);
        $this->db->join($this->_tbAspek, 'tb_aspek.id_aspek = tb_sub_kriteria.id_aspek');
        $this->db->where('kode_aspek', $kode_aspek);
        $this->db->where('keterangan', $keterangan);
        
        $this->db->order_by("kode_sub_kriteria", "asc");
        

        $query = $this->db->get();
        return $query->num_rows();
    }



    public function getByIdAspek($id_aspek)
    {
        return $this->db->get_where($this->_tbSubKriteria, ["id_aspek" => $id_aspek])->row();
    }

    public function save()
    {
        $alternatif = $this->input->post('id_alternatif');
        $result = array();
        foreach ($alternatif as $key => $val) {
            $result_add = array(
                'id_penilaian' => uniqid(),
                'id_alternatif' => $_POST['id_alternatif'][$key],
                'id_sub_kriteria' => $_POST['id_sub_kriteria'][$key],
                'skor' => $_POST['skor'][$key]

            );
            array_push($result,$result_add);
        } 
        $this->db->insert_batch($this->_table, $result);
    }


    

}

/* End of file M_aspek.php */


/* End of file Modal_aspek.php */
 ?>