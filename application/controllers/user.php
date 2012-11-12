<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('User_Model');
	}

	public function index()	{
		$this->load->view('home');
	}

	public function userNameChekAjax(){
		if($this->input->is_ajax_request()){
			$username = $this->input->post('usuario');
			if($this->User_Model->userNameCheck($username)){
				echo "TRUE";
			} else {
				echo "FALSE";
			}
		} else {
			echo "acceso denegado";
		}
	}

	function _usernameCheck($username){
		return $this->User_Model->userNameCheck($username);
	}

	public function checkLogin(){
		$this->form_validation->set_rules('usuario', 'usuario', 'trim|required|valid_email|callback__userNameCheck');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_message('required', 'El campo %s es necesario');
		$this->form_validation->set_message('valid_email', 'El campo %s no es un correo  valido');
		$this->form_validation->set_message('_usernameCheck', 'El %s no existe');

		$username = $this->input->post('username');
		//$password = md5($this->input->post('password'));
		$password = $this->input->post('password');

		$login = $this->User_Model->verifyLogin($username, $password);
		if($login){
			$data = array(
					'isLogedIn' => TRUE,
					'usuario'   => $login[0]->correo,
					'nivel'     => $login[0]->nivel,
					'id'        => $login[0]->iduser
				);
			$this->session->set_userdata($data);
			redirect('dashboard');
		} else {
			redirect('user');
		}
	}


}
