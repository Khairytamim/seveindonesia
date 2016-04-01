<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->model('Home_model');
    }
	public function index()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$title['title']='séve / cari dan buat gayamu';
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('home/home', $data);
		$this->load->view('footer/footerbar', $data);
	}
	
	public function antrian($id_ = null,$status = null) {
	     $this->db->reconnect();
	     if (!empty($id_)) {
	     	if($status==0){
		        $data['produk_terbaru'] = $this->Home_model->list_produk();
			$title['title']='séve / cari dan buat gayamu';
			$this->db->reconnect();
	         	$data['brand'] = $this->Home_model->show_brand();
	         	$this->db->reconnect();
	         	$data['status'] = $this->Home_model->tampil_home($id_);
			$this->load->view('header/header_1', $title);;
			$this->load->view('user/queue', $data);
			}
		if($status==1){
		        $data['produk_terbaru'] = $this->Home_model->list_produk();
			$title['title']='séve / cari dan buat gayamu';
			$this->db->reconnect();
	         	$data['brand'] = $this->Home_model->show_brand();
	         	$this->db->reconnect();
	         	$data['status'] = $this->Home_model->gaktampil_home($id_);
			$this->load->view('header/header_1', $title);;
			$this->load->view('user/queue', $data);
			}
		redirect("/home/antrian");
	     } else {
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$title['title']='séve / cari dan buat gayamu';
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);;
		$this->load->view('user/queue', $data);
		}
	}
	/*
	public function antrian()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$title['title']='séve / cari dan buat gayamu';
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);;
		$this->load->view('user/queue', $data);
	}*/
	  	
	public function loginantrian()
	{
		$title['title']='séve / cari dan buat gayamu';
		$this->load->view('header/header_1', $title);
		$this->load->view('user/loginantrian');
	}
	public function men()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$title['title']='MEN / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu');
		$this->load->view('home/home', $data);
		$this->load->view('footer/footerbar', $data);
	}
	public function women()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$title['title']='WOMEN / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu');
		$this->load->view('home/home', $data);
		$this->load->view('footer/footerbar', $data);
	}
	public function verifikasi_login_user(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->men();
		}else{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$result=$this->Home_model->login($email,$password);
			if($result) redirect('/home');
			else redirect('/salahcuyloginnya');
		}	
	}
}