<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


defined('BASEPATH') OR exit('No direct script access allowed');

class M_penilaian extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    private $_table = "tb_penilaian";

    public $id_penilaian;
    public $id_alternatif;
    public $id_sub_kriteria;
    public $skor;

    public function rules()
    {
        return [
            ['field' => 'id_alternatif[]',
            'label'=> 'Id Alternatif',
            'rules'=> 'required'],

            ['field' => 'id_sub_kriteria[]',
            'label'=> 'Id Sub Kriteria',
            'rules'=> 'required'],

            ['field' => 'skor[]',
            'label'=> 'Skor',
            'rules'=> 'required']

        ];
    }

    public function emptyTable()
    {
       return $this->db->empty_table($this->_table);
    }
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByIdAlternatif($id)
    {
        return $this->db->get_where($this->_table, ["id_alternatif" => $id])->result();
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