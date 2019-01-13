<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


defined('BASEPATH') OR exit('No direct script access allowed');

class M_grafik extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    private $_tbHasil = "tb_hasil";
    private $_tbAlternatif = "tb_alternatif";

    // public $id_alternatif;
    // public $kode_alternatif;
    // public $nama_alternatif;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'kode_alternatif',
    //         'label'=> 'Kode Alternatif',
    //         'rules'=> 'required'],
            
    //         ['field' => 'nama_alternatif',
    //         'label' => 'Nama Alternatif',
    //         'rules' => 'required'],

    //     ];
    // }
    
    public function getAll()
    {
        $this->db->select('tb_hasil.id_hasil as id_hasil, tb_alternatif.kode_alternatif as kode_alternatif, tb_hasil.hasil as hasil');
        $this->db->from($this->_tbHasil);
        $this->db->join($this->_tbAlternatif, 'tb_alternatif.id_alternatif = tb_hasil.id_alternatif');
        $this->db->order_by("hasil", "desc");
        

        $query = $this->db->get();
        return $query->result();
    }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["id_alternatif" => $id])->row();
    // }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->id_alternatif = uniqid();
    //     $this->kode_alternatif = $post['kode_alternatif'];
    //     $this->nama_alternatif = $post['nama_alternatif'];
    //     $this->db->insert($this->_table, $this);
    // }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->id_alternatif = $post['id'];
    //     $this->kode_alternatif = $post['kode_alternatif'];
    //     $this->nama_alternatif = $post['nama_alternatif'];
    //     $this->db->update($this->_table, $this, array('id_alternatif' => $post['id']));
    // }

    // public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("id_alternatif" => $id));
    // }


    

}

/* End of file M_aspek.php */


/* End of file Modal_aspek.php */
 ?>