<?php
/**
 * Created by PhpStorm.
 * User: marvi_zz4yoes
 * Date: 1/10/2017
 * Time: 08:38
 */

class Empleado extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('usuarioCorreo')=="") {
            redirect('login');
        }
        //$this->load->helper('text');
    }
    public function index() {
        //$data['username'] = $this->session->userdata('username');

        $data = array();
        $data['contenido'] = 'home/empleado';
        $data['title'] ="Inicio|PetCare";

        $this->load->view('homeContent',$data);
        // $this->load->view('member/index', $data);
    }

    public function logout() {
        $this->session->unset_userdata('usuarioCorreo');
        $this->session->unset_userdata('usuarioTipo');
        session_destroy();
        redirect('login');
    }

}