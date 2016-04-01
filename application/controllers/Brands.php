<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->model('Transaksi_model');
         $this->load->model('Home_model');
    }
	public function index()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Brands / cari dan buat gayamu';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('sidenav/sidenavbrand',$data);
		$this->load->view('home/brands', $data);
		$this->load->view('footer/footerbar', $data);
	}
	public function detail($id_produk)
	{
		$data['produk'] = $this->Transaksi_model->detail_produk($id_produk);
		$this->db->reconnect();
		$tipe = $this->Transaksi_model->get_ukuran($id_produk);
		$data['tipe']='';
		foreach ($tipe->result() as $row) {
			$data['tipe'] = $row->tipe;
		}
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Detail Brands / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('brands/detail', $data);
		$this->load->view('footer/footerbar', $data);
	}
	public function detail_brand($id_toko)
	{
		$data['produk'] = $this->Home_model->detail_produk_perbrand($id_toko);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Detail Brands / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('sidenav/sidenavbrand',$data);
		$this->load->view('brands/list_produk_brand', $data);
		$this->load->view('footer/footerbar', $data);
	}
	/*public function list_percategory($id_toko)
	{
		$data['produk'] = $this->Home_model->list_produk_percategory($id_toko);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Detail Brands / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu');
		$this->load->view('sidenav/index', $category);
		$this->load->view('brands/list_produk_brand', $data);
	}*/

        public function cek_ketersediaan_produk($id){
		$ukuran = $this->input->post('ukuran');
		$cek_ketersediaan_produk['cabang'] = $this->Transaksi_model->cek_ketersediaan_produk($id, $ukuran);
		$this->load->view('brands/ketersediaan_produk',$cek_ketersediaan_produk);
	}
	
	public function add_cart(){
		$id_produk = $this->input->post('id_produk');
                $hasil = $this->Transaksi_model->get_produk($id_produk);
                $nama_produk='';
                $harga='';
                foreach($hasil->result() as $row){
                       $nama_produk = $row->nama_produk;
                       $harga = $row->harga;
                }
                $nama_produk = 
		$id_toko = $this->input->post('id_toko');
		$jumlah = $this->input->post('ukuran');
		if(empty($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}
		$status = 1;
		array_push($_SESSION['cart'], $id_produk, $nama_produk, $harga, $id_toko, $jumlah, $status);
		$ukuran_array = sizeof($_SESSION['cart']);
                echo  $ukuran_array;
                $j=0;
		for ($i=0; $i < ($ukuran_array/6); $i++){
			echo $_SESSION['cart'][$j];
			echo $_SESSION['cart'][$j+1];
			echo $_SESSION['cart'][$j+2];
                        echo $_SESSION['cart'][$j+3];
                        echo $_SESSION['cart'][$j+4];
                        echo $_SESSION['cart'][$j+5];
                        $j=$j+6;
		}
	}

        public function show_cart(){
                $ukuran_array = sizeof($_SESSION['cart']);
                $j=0;
		for ($i=0; $i < ($ukuran_array/6); $i++){
			echo $_SESSION['cart'][$j];
			echo " | ";
			echo $_SESSION['cart'][$j+1];
			echo " | ";
			echo $_SESSION['cart'][$j+2];
			echo " | ";
                        echo $_SESSION['cart'][$j+3];
                        echo " | ";
                        echo $_SESSION['cart'][$j+4];
                        echo " | ";
                        echo $_SESSION['cart'][$j+5];
                        echo " | ";
                        $j=$j+6;
		}
        }
        
        public function remove_cart($j){
               $_SESSION['cart'][$j]=0;
               redirect('/cart');
        }
        
        public function remove_session(){
               session_destroy();
        }
}