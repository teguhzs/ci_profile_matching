<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }
    
    private $_table = "tb_user";

    public $id_user;
    public $nama_user;
    public $email;
    public $sandi;

    public function rules()
    {
        return [
            ['field' => 'nama_user',
            'label'=> 'Nama User',
            'rules'=> 'required'],
            
            ['field' => 'sandi',
            'label' => 'Sandi',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']
        ];
    }
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->nama_user = $post['nama_user'];
        $this->email = $post['email'];
        $this->sandi = $post['sandi'];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post['id'];
        $this->nama_user = $post['nama_user'];
        $this->email = $post['email'];
        $this->sandi = $post['sandi'] ;
        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }


    

}

/* End of file M_user.php */


/* End of file Modal_user.php */
 ?>