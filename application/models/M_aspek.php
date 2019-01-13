<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


defined('BASEPATH') OR exit('No direct script access allowed');

class M_aspek extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    private $_table = "tb_aspek";

    public $id_aspek;
    public $kode_aspek;
    public $nama_aspek;
    public $bobot;

    public function rules()
    {
        return [
            ['field' => 'kode_aspek',
            'label'=> 'Kode_aspek',
            'rules'=> 'required'],
            
            ['field' => 'nama_aspek',
            'label' => 'Nama Aspek',
            'rules' => 'required'],

            ['field' => 'bobot',
            'label' => 'Bobot',
            'rules' => 'required']
        ];
    }
    
    public function getAll()
    {
        $this->db->from($this->_table);
        $this->db->order_by("id_aspek", "asc");
        $query = $this->db->get(); 
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_aspek" => $id])->row();
    }
    public function getByKode($id)
    {
        return $this->db->get_where($this->_table, ["kode_aspek" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_aspek = uniqid();
        $this->kode_aspek = $post['kode_aspek'];
        $this->nama_aspek = $post['nama_aspek'];
        $this->bobot = $post['bobot'];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_aspek = $post['id'];
        $this->kode_aspek = $post['kode_aspek'];
        $this->nama_aspek = $post['nama_aspek'];
        $this->bobot = $post['bobot'] ;
        $this->db->update($this->_table, $this, array('id_aspek' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_aspek" => $id));
    }


    

}

/* End of file M_aspek.php */


/* End of file Modal_aspek.php */
 ?>