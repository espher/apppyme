<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()	{
		$this->load->view('home');
	}

	public function userNameChekAjax(){
		if($this->input->is_ajax_request()){
			$username = $this->input->post('nombreUsuario');
			if($this->Users_Model->userNameCheck($username)){
				echo "TRUE";
			} else {
				echo "FALSE";
			}
		} else {
			echo "acceso denegado";
		}
	}


}
