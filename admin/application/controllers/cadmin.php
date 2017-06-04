<?php
class Cadmin extends MY_Controller{
	public function index(){
		$this->load->view('index');
	}
	public function admintop(){
		$this->load->view('admin_top');	
	}
	public function left(){
		$this->load->view('left');
	}
	public function right(){
		$this->load->view('right');
	}
	public function logout(){
		unset($_SESSION['adminuser']);
		redirect('login/index');
	}
}
