<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sub_kriteria extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    private $_table = "tb_sub_kriteria";
    private $_table_join = "tb_aspek";


    public $id_sub_kriteria;
    public $id_aspek;
    public $kode_sub_kriteria;
    public $nama_sub_kriteria;
    public $nilai_sub_kriteria;
    public $bobot;
    public $keterangan;

    public function rules()
    {
        return [

            ['field' => 'id_aspek',
            'label'=> 'Id aspek',
            'rules'=> 'required'],

            ['field' => 'kode_sub_kriteria',
            'label'=> 'Kode Sub Kriteria',
            'rules'=> 'required'],
            
            ['field' => 'nama_sub_kriteria',
            'label' => 'Nama Sub Kriteria',
            'rules' => 'required'],

            ['field' => 'nilai_sub_kriteria',
            'label' => 'Nilai Sub Kriteria',
            'rules' => 'required'],

            ['field' => 'bobot',
            'label' => 'Bobot',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }
    
    public function getAll()
    {
        $this->db->select('*, tb_sub_kriteria.nilai_sub_kriteria as nilai_sub_kriteria, tb_sub_kriteria.keterangan as keterangan, tb_aspek.nama_aspek as nama_aspek, tb_aspek.kode_aspek as kode_aspek, tb_sub_kriteria.bobot as bobot');
        $this->db->from($this->_table);
        $this->db->join($this->_table_join, 'tb_aspek.id_aspek = tb_sub_kriteria.id_aspek');
        $this->db->order_by('tb_aspek.id_aspek, tb_sub_kriteria.keterangan', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_sub_kriteria" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_sub_kriteria = uniqid();
        $this->id_aspek = $post['id_aspek'];
        $this->kode_sub_kriteria = $post['kode_sub_kriteria'];
        $this->nama_sub_kriteria = $post['nama_sub_kriteria'];
        $this->nilai_sub_kriteria = $post['nilai_sub_kriteria'];
        $this->bobot = $post['bobot'];
        $this->keterangan = $post['keterangan'];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_sub_kriteria = $post['id'];
        $this->id_aspek = $post['id_aspek'];
        $this->kode_sub_kriteria = $post['kode_sub_kriteria'];
        $this->nama_sub_kriteria = $post['nama_sub_kriteria'];
        $this->nilai_sub_kriteria = $post['nilai_sub_kriteria'];
        $this->bobot = $post['bobot'];
        $this->keterangan = $post['keterangan'];
        $this->db->update($this->_table, $this, array('id_sub_kriteria' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_sub_kriteria" => $id));
    }


    

}

/* End of file M_aspek.php */


/* End of file Modal_aspek.php */
 ?>