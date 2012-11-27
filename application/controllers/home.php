<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Usuario_Model');
		$this->load->library('form_validation');
	}

	public function index()	{
		$data['title'] = 'Bienvenido';
		$this->load->view('home',$data);
	}

	public function login(){
		$this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email|callback__verificaUsuario');
		$this->form_validation->set_rules('contrasena', 'Contraseña', 'trim|required');

		$this->form_validation->set_message('required', 'El campo %s es necesario');
		$this->form_validation->set_message('valid_email', 'El campo %s no es un correo  valido');
		$this->form_validation->set_message('_verificaUsuario', 'El %s no existe');
		$this->form_validation->set_message('valid_email', 'El campo %s no es un correo  valido');

		if ($this->form_validation->run() == FALSE){
			$this->index();
		} else {
			$this->_verificaLogin();
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home/index');
	}

	public function registro(){

	}

	public function recordarContrasena(){

	}

	public function crearCuenta(){

	}

	function _verificaUsuario($username){
		return $this->Usuario_Model->verificaUsuario($username);
	}

	function _verificaLogin(){
		$username = $this->input->post('correo');
		$password = $this->input->post('contrasena');
		$login = $this->Usuario_Model->verificaLogin($username, $password);
		if($login){
			$data = array(
					'isLogedIn' 	=> TRUE,
					'correo' 		=> $login[0]->correo,
					'usuario' 		=> $login[0]->usuario,
					'nivel' 		=> $login[0]->nivel,
					'idusuario'		=> $login[0]->idusuario
				);
			$this->session->set_userdata($data);
			redirect('index.php/dashboard');
		} else {
			$this->index();
		}
	}


}
