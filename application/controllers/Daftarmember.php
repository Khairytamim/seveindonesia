<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftarmember extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->view('header/header_admin_distro');
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('adminaccount/index');
		$this->load->view('footer/footerbar_login');
	}

	
	public function verifikasi_email()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('member/verifikasi_email');
	}
	
	public function registration(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email|callback_email_sudah_terpakai');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$this->user_model->add_member();
			$this->verifikasi_email();
		}
	}
	

	
	public function verifikasi_login(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailtoko', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$emailtoko=$this->input->post('emailtoko');
			$password=$this->input->post('password');

			$result=$this->Admindistro_model->login($emailtoko,$password);
			if($result) redirect('/AdminDistro');
			else {redirect('/daftaradmin');}
		}	
	}
	
	public function verifikasi_login_cabang(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailtoko', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$emailtoko=$this->input->post('emailtoko');
			$password=$this->input->post('password');

			$result=$this->Admincabang_model->login($emailtoko,$password);
			if($result) redirect('/AdminCabang');
			else redirect('/daftaradmin');
		}	
	}
	
	
	public function logout()
	{
		$newdata = array(
		'email_user' => '',
		'nama_user' => '',
		'password_user'=>'',
		'type_user'=>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('/home');
	}
	
	public function email_sudah_terpakai()
	{
		$emailtoko=$this->input->post('emailtoko');
        	$result=$this->user_model->check_email_exist_toko($emailtoko);
        	if($result){
			$this->form_validation->set_message('email_checking', 'Email already exist.');
			return false;
		}else{
			return true;
		}
	}
}