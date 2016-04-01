<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
	        parent::__construct();
	        $this->load->model('Home_model');
    	}

	public function controlpanel()
	{
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('home/controlpanel');
		$this->load->view('footer/footerbar');
	}
	public function login()
	{
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/login');
		$this->load->view('footer/footerbar');
	}
}