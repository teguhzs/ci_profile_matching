<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * list method
 * ---------------
 * >> _construct
 * >> akun
 * >> login
 * >> registrasi
 * >> logout
 * >> cek_email
 */

class User extends CI_Controller {

    // ------------------------------------------------------------------------
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_user');
        // $this->output->enable_profiler(ENVIRONMENT == 'development');

    }
    
    // ------------------------------------------------------------------------

    public function akun()
    {
        $data = array();

        if ($this->session->userdata('telahLogin')) {
            $data['user'] = $this->M_user->getRows(array('id'=>$this->session->userdata('userId'))); 
            // load view akun 
            $this->load->view('admin/login/akun'); 
        }else {    
            redirect('user/login/');       
        }
    }

    // ------------------------------------------------------------------------

    public function login()
    {
        $data = array();

        // if ($this->session>userdata('success_msg')) {
        //     $data['success_msg'] = $this->session->userdata('success_msg');
        //     $this->session->unset_userdata('success_msg');
        // }

        // if ($this->session->userdata('error_msg')) {
        //     $data['error_msg'] = $this->session->userdata('error_msg');
        //     $this->session->unset_userdata('error_msg');
        // }

        if ($this->input->post('loginSubmit')) {
            $this->form_validation->set_rules(  
                                                'email', 
                                                'Email', 
                                                'required|valid_email');
            $this->form_validation->set_rules(  
                                                'password', 
                                                'Password', 
                                                'required');

            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(          
                    'email'     => $this->input->post('email'),
                    'password'     => md5($this->input->post('password')),
                    'status'    => '1'
                );

                $cekLogin = $this->M_user->getRows($con);
                if ($cekLogin) {
                    $this->session->set_userdata('telahLogin', True);
                    $this->session->set_userdata('userId',$cekLogin['id']);
                    
                    redirect('admin');
                    
                } else {
                    $data['error_msg'] = 'Email / Password yang anda masukkan salah, silahkan coba lagi.';
                }   
            }
        }


        // load view login.php
        $this->load->view('admin/login/login_form', $data);   
    }

    // ------------------------------------------------------------------------

    public function registrasi()
    {
        // variabel array data dan user data
        $data = array();
        $userData = array();

        if ($this->input->post('regisSubmit')) {

            //validasi form
            $this->form_validation->set_rules(
                                            'nama', 
                                            'Nama', 
                                            'required');

            $this->form_validation->set_rules(
                                            'email', 
                                            'Email', 
                                            'required|valid_email|callback_email_check');

            $this->form_validation->set_rules(
                                            'password', 
                                            'password', 
                                            'required');
            
            $this->form_validation->set_rules(
                                            'konf_password', 
                                            'Konfirmasi Password', 
                                            'required|matches[password]');
            
            // array input post dari form di view                                
            $userData = array(
                'nama'          => strip_tags($this->input->post('nama')),
                'email'         => strip_tags($this->input->post('email')),
                'password'      => strip_tags($this->input->post('password')),
                'jenis_kelamin' => strip_tags($this->input->post('jenis_kelamin')),
                'telepon'       => strip_tags($this->input->post('telepon'))
            );

            // proses input ke database
            if ($this->form_validation->run() == true) {
                $insert = $this->user->insert($userData);

                if ($insert) {
                    $this->session->userdata(
                                            'succes_msg'.
                                            'Registrasi anda telah berhasil. Silahkan login ke akun anda');
                                    redirect('user/login/');
                } else {
                    $data['error_msg'] = 'Terjadi kesalahan saat memasukkan data, silahkan coba lagi';
                } 
            }  
        }
        $data['user'] = $userData;

        // load view registrasi
        $this->load->view('admin/user/registrasi', $data);
    }

    // ------------------------------------------------------------------------

    public function logout()
    {
        
        $this->session->unset_userdata('telahLogin');
        
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        
        redirect('user/login/');
    }

    // ------------------------------------------------------------------------

    public function cek_email($str) 
    {
        $con['returnType'] = 'count';
        $con['conditions'] = array(
                                'email' => $str);
        $cekEmail = $this->M_user->getRows($con);
        if ($cekEmail) {
            $this->form_validation->set_message('cek_email','Email sudah terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
        
    }

    // public function form_login()
    // {
    //     $this->load->view('admin/login/login_form');
        
    // }

}

/* End of file User.php */
?>