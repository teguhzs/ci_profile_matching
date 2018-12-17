
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_alternatif');
        $this->load->model('M_aspek');
        $this->load->model('M_sub_kriteria');
        $this->load->model('M_penilaian');
        $this->load->model('M_hasil');
        $this->load->library('form_validation');
        $this->load->helper('pm');

        if ($this->session->userdata('telahLogin') == 0) {
            
            redirect('user/login');
            
        }
        
        

        
        // ------------------------------------------------------------------------
        //debugging
        // $this->output->enable_profiler(ENVIRONMENT == 'development');

    }

    // ------------------------------------------------------------------------
    // index
    // ------------------------------------------------------------------------

    

    public function index()
    {
        $this->load->view('admin/index');
        
    }


    // ------------------------------------------------------------------------
    //modul alternatif
    // ------------------------------------------------------------------------


    public function alternatif()
    {
        $data["alternatif"] = $this->M_alternatif->getAll();
        $this->load->view('admin/tampil_alternatif', $data);       
    }

    public function add_alternatif()
    {
        $alternatif = $this->M_alternatif;
        $validation = $this->form_validation;
        $validation->set_rules($alternatif->rules());

        if($validation->run()){
            $alternatif->save();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }
        $this->load->view('admin/add_alternatif.php');
        
    }

    public function edit_alternatif($id=null)
    {
        if (!isset($id)) redirect('admin/tampil_alternatif');

        $alternatif = $this->M_alternatif;
        $validation = $this->form_validation;
        $validation->set_rules($alternatif->rules());

        if ($validation->run()) {
            $alternatif->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }

        $data['alternatif'] = $alternatif->getById($id);
        if (!$data['alternatif']) show_404();

        $this->load->view('admin/edit_alternatif', $data);
        
    }

    public function delete_alternatif($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->M_alternatif->delete($id)) {
            redirect(site_url('admin/alternatif'));
        }
    }

    // ------------------------------------------------------------------------
    // Modul Aspek
    // ------------------------------------------------------------------------
    

    public function aspek_penilaian()
    {
        $data["aspek_penilaian"] = $this->M_aspek->getAll();
        $this->load->view('admin/tampil_aspek', $data);  
    }

    public function add_aspek()
    {
        $aspek_penilaian = $this->M_aspek;
        $validation = $this->form_validation;
        $validation->set_rules($aspek_penilaian->rules());

        if($validation->run()){
            $aspek_penilaian->save();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }
        $this->load->view('admin/add_aspek.php');
    }

    public function edit_aspek($id=null)
    {
        if (!isset($id)) redirect('admin/tampil_aspek');

        $aspek_penilaian = $this->M_aspek;
        $validation = $this->form_validation;
        $validation->set_rules($aspek_penilaian->rules());

        if ($validation->run()) {
            $aspek_penilaian->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }

        $data['aspek_penilaian'] = $aspek_penilaian->getById($id);
        if (!$data['aspek_penilaian']) show_404();

        $this->load->view('admin/edit_aspek', $data);
    }

    public function delete_aspek($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->M_aspek->delete($id)) {
            redirect(site_url('admin/aspek_penilaian'));
        }
    }

    // ------------------------------------------------------------------------
    // Modul Sub Kriteria
    // ------------------------------------------------------------------------
    

    public function sub_kriteria()
    {
        $data["sub_kriteria"] = $this->M_sub_kriteria->getAll();
        $this->load->view('admin/tampil_sub_kriteria', $data);  
    }

    public function add_sub_kriteria()
    {
        $sub_kriteria = $this->M_sub_kriteria;
        $validation = $this->form_validation;
        $validation->set_rules($sub_kriteria->rules());

        if($validation->run()){
            $sub_kriteria->save();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }

        $data["aspek_penilaian"] = $this->M_aspek->getAll();
        $this->load->view('admin/add_sub_kriteria', $data);
    }

    public function edit_sub_kriteria($id=null)
    {
        if (!isset($id)) redirect('admin/tampil_sub_kriteria');

        $sub_kriteria = $this->M_sub_kriteria;
        $validation = $this->form_validation;
        $validation->set_rules($sub_kriteria->rules());

        if ($validation->run()) {
            $sub_kriteria->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }

        $data['aspek_penilaian'] = $this->M_aspek->getAll();
        $data['sub_kriteria'] = $sub_kriteria->getById($id);
        if (!$data['sub_kriteria']) show_404();

        $this->load->view('admin/edit_sub_kriteria', $data);
    }

    public function delete_sub_kriteria($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->M_sub_kriteria->delete($id)) {
            redirect(site_url('admin/sub_kriteria'));
        }
    }

    // ------------------------------------------------------------------------
    //Penilaian alternatif
    // ------------------------------------------------------------------------
    

    public function penilaian_alternatif()
    {
        


        $penilaian = $this->M_penilaian;
        $alternatif = $this->M_alternatif;
        $aspek_penilaian = $this->M_aspek;
        $sub_kriteria = $this->M_sub_kriteria;

        

        $validation = $this->form_validation;
        $validation->set_rules($penilaian->rules());
        if($validation->run()){
            $penilaian->emptyTable();
            $penilaian->save();
            $this->session->set_flashdata('success','Berhasil Disimpan');   
            redirect(site_url('admin/hasil'));  
        }

        $data['alternatif'] = $alternatif->getAll();
        $data['aspek_penilaian'] = $aspek_penilaian->getAll();
        $data['sub_kriteria'] = $sub_kriteria->getAll();
        if (!$data['alternatif']) show_404();

        $this->load->view('admin/penilaian_skor', $data);
    }

    public function hasil()
    {
        $aspek_penilaian = $this->M_aspek;
        $alternatif = $this->M_alternatif;
        $sub_kriteria = $this->M_sub_kriteria;
        $penilaian = $this->M_hasil;

        $data['aspek_penilaian'] = $aspek_penilaian->getAll();
        $data['alternatif'] = $alternatif->getAll();
        $data['sub_kriteria'] = $sub_kriteria->getAll();
        $data['penilaian_A1'] = $penilaian->getAll('A1');
        $data['penilaian_A2'] = $penilaian->getAll('A2');
        $data['penilaian_A3'] = $penilaian->getAll('A3');
        
        $data['hitung_jarak_cf1'] = $penilaian->hitung('CF','J');
        $data['x_aj'] = $penilaian->getX('A1','AJ'); 
        $data['x_aj2'] = $penilaian->getX('A2','AJ'); 
        $data['x_aj3'] = $penilaian->getX('A3','AJ'); 
        $data['x_ak'] = $penilaian->getX('A1','AK'); 
        $data['x_ak2'] = $penilaian->getX('A2','AK'); 
        $data['x_ak3'] = $penilaian->getX('A3','AK'); 
        $data['x_bmm'] = $penilaian->getX('A1','BMM'); 
        $data['x_bmm2'] = $penilaian->getX('A2','BMM'); 
        $data['x_bmm3'] = $penilaian->getX('A3','BMM'); 
        $data['x_bt'] = $penilaian->getX('A1','BT'); 
        $data['x_bt2'] = $penilaian->getX('A2','BT'); 
        $data['x_bt3'] = $penilaian->getX('A3','BT'); 
        $data['x_tp'] = $penilaian->getX('A1','TP'); 
        $data['x_tp2'] = $penilaian->getX('A2','TP'); 
        $data['x_tp3'] = $penilaian->getX('A3','TP'); 
        $data['x_kdjp'] = $penilaian->getX('A1','KDJP'); 
        $data['x_kdjp2'] = $penilaian->getX('A2','KDJP'); 
        $data['x_kdjp3'] = $penilaian->getX('A3','KDJP'); 
        $data['x_jl'] = $penilaian->getX('A1','JL'); 
        $data['x_jl2'] = $penilaian->getX('A2','JL'); 
        $data['x_jl3'] = $penilaian->getX('A3','JL'); 
        $data['x_jt'] = $penilaian->getX('A1','JT'); 
        $data['x_jt2'] = $penilaian->getX('A2','JT'); 
        $data['x_jt3'] = $penilaian->getX('A3','JT'); 
        $data['bobot_aj'] = $penilaian->getBobot('AJ');
        $data['bobot_ak'] = $penilaian->getBobot('AK');
        $data['bobot_bmm'] = $penilaian->getBobot('BMM');
        $data['bobot_bt'] = $penilaian->getBobot('BT');
        $data['bobot_jl'] = $penilaian->getBobot('JL');
        $data['bobot_jt'] = $penilaian->getBobot('JT');
        $data['bobot_kdjp'] = $penilaian->getBobot('KDJP');
        $data['bobot_tp'] = $penilaian->getBobot('TP');

        $data['bobot_l'] = $aspek_penilaian->getByKode('L');
        $data['bobot_t'] = $aspek_penilaian->getByKode('T');
        $data['bobot_i'] = $aspek_penilaian->getByKode('I');
        $data['bobot_j'] = $aspek_penilaian->getByKode('J');






        

        $this->load->view('admin/hasil', $data);
    }
    

    // ------------------------------------------------------------------------
    //User modul
    // ------------------------------------------------------------------------

    public function tampil_user()
    {
        $data["user"] = $this->M_user->getAll();
        $this->load->view('admin/tampil_user', $data);       
    }

    public function add_user()
    {
        $user = $this->M_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if($validation->run()){
            $user->save();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }
        $this->load->view('admin/add_user.php');
        
    }

    public function edit_user($id=null)
    {
        if (!isset($id)) redirect('admin/tampil_user');

        $user = $this->M_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
        }

        $data['user'] = $user->getById($id);
        if (!$data['user']) show_404();

        $this->load->view('admin/edit_user', $data);
        
    }

    public function delete_user($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->M_user->delete($id)) {
            redirect(site_url('admin/tampil_user'));
        }
    }


    // ------------------------------------------------------------------------
    // ------------------------------------------------------------------------


}

/* End of file Controlle.php */
