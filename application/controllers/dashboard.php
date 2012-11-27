<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index()	{
		$data['title'] = 'App Pymes';
		$data['mainContent'] = 'dashboard/home';
		$this->load->view('include/template',$data);
	}


}
