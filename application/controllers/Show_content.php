<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_content extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$data=array(
		'h' => $this->db->query("call show_content(1)"));
		$this->load->view('home/home',$data);
	}

	public function card($id)
	{
		$data=array(
		'h' => $this->db->query("call show_content('$id')"));
		$this->load->view('home/content',$data);
	}
}
