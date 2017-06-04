<?php
class MY_Controller extends CI_controller{
	public function  __construct(){
		parent::__construct();

		if(!$_SESSION['adminuser']){
			redirect('login/index');	
			exit();
		}

	}	
}