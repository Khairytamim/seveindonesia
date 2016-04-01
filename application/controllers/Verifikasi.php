<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Verifikasi extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->database();
    	}
    
    	public function index()
	{
		redirect('/not_found');
	}
	
	public function authentication_member($auth)
	{
		$status='';
		$hasil=$this->db->query("call verify_email_member('$auth')");
		foreach ($hasil->result() as $row)
				{
				   $status = $row->status;
				}
		#var_dump($status);
		if($status=='sukses')
		{
			$this->verifikasi_distro_berhasil();
		}else if($status=='gagal'){
			$this->verifikasi_gagal();
		}else {
			redirect('/not_found');
		}
	}

        public function authentication_toko($auth)
	{
		$status='';
		$hasil=$this->db->query("call verify_email_toko('$auth')");
		foreach ($hasil->result() as $row)
				{
				   $status = $row->status;
				}
		if($status=='sukses')
		{
			$this->verifikasi_berhasil();
		}else if($status=='gagal'){
			$this->verifikasi_gagal();
		}else {
			redirect('/not_found');
		}
	}
	
	public function verifikasi_berhasil()
	{
		$this->load->view('prelaunch/index');
	}

	public function verifikasi_distro_berhasil()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('home/home');
		$this->load->view('footer/footerbar');
	}


	public function verifikasi_gagal()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('account/verifikasi_email_gagal');
		$this->load->view('footer/footerbar');
	}
}