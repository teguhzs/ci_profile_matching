<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->userTbl = 'tb_user';
    }

    // ------------------------------------------------------------------------

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from($this->userTbl);

        // mengumpuklkan data dengan kondisi
        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        if (array_key_exists("id", $params)) {
            foreach ($params['id'] as $params['id']) {
                $this->db->where('id', $params['id']);
                $query = $this->db->get();
                $result = $query->row_array();
            }
        } else {
            //set start and limit
            if (array_key_exists('start', $params) && array_key_exists('limit', $params)) {
                $this->db->limit($params['limit'], $params['start']);
            }elseif (!array_key_exists('start', $params) && array_key_exists('limit', $params)) {
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();

            if (array_key_exists('returnType', $params) && $params['returnType'] == 'count') {
                $result = $query->num_rows();
            }elseif (array_key_exists('returnType', $params) && $params['returnType'] == 'single') {
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else {
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }  
        }

        //return fetch data
        return $result;
    }

    public function insert($data = array())
    {
        //add creates and modified data if not included
        if (!array_key_exists('tgl_dibuat', $data)) {
            $data['tgl_dibuat'] = date("Y-m-d H:i:s");
        }
        if (!array_key_exists('tgl_diubah', $data)) {
            $data['tgl_diubah'] = date("Y-m-d H:i:s");
        }

        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }    
    }
    

}

/* End of file M_user.php */
 ?>