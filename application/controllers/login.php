<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Modelo_Login');
    }

    public function index() {

        switch ($this->session->userdata('perfil')) {
            case '':
                $data['token'] = $this->token();
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('login_vista', $data);
                break;

            case 'administracion':

                redirect(base_url() . 'Directivo');
                break;
            case 'Profesor':
                redirect(base_url() . 'Docente');
                break;
            case 'Secretario':
                redirect(base_url() . 'Secretaria');
            case 'Estudiante':
                redirect(base_url() . 'Estudiante');
                break;
            default:
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('login_vista', $data);
                break;
        }
    }

    public function login_user() {
        $username = $this->input->post('usuario');
        $password = $this->input->post('contra');
        //print_r($_POST);

        $check_user = $this->Modelo_Login->login_userss($username, $password);
        if ($check_user == TRUE) {
            $data = array(
                'is_logued_in' => TRUE,
                'id_cedula' => $check_user->cedula,
                'id_usuario' => $check_user->id,
                'perfil' => $check_user->tipo,
                'username' => $check_user->usuario
            );
            $this->session->set_userdata($data);
            print_r($data);
            $this->index();
        }
    }

    public function token() {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }

    public function logout_ci() {
        $this->session->sess_destroy();
        $this->index();
        
    }

}
