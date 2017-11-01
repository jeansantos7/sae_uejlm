<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Modelo_Login extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_userss($username,$password)
	{
		$this->db->where('usuario',$username);
		$this->db->where('Contra',$password);
		$query = $this->db->get('usuario');
                //echo $this->db->last_query();
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
			redirect(base_url().'login','refresh');
		}
	}
}