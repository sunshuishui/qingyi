<?php
class Login extends CI_Controller{
	function index(){
		$this->load->helper('captcha');
		$vals = array(
		'word' => rand(1000,9999),
		'img_path' => './captchas/',
		'img_url' => base_url().'captchas/',
		'img_width' => '100',
		'img_height' => 30,
		'expiration' => 3600
		);
		$cap = create_captcha($vals);
		$data['capimg']=$cap['image'];
		$_SESSION['capasd']=$cap['word'];
		$this->load->view('adminlogin',$data);
	}
	public function checklogin(){
		
		$this->load->model('Loginmodel');	
		
		$val=$this->Loginmodel->checklogin();
		
		//exit();
		if($val==1){
			echo '<script>alert("验证码不正确！");location.href="'.site_url('login/index').'"</script>';
			exit();
		}elseif($val==3){
			echo '<script>alert("用户名或密码不正确！");location.href="'.site_url('login/index').'"</script>';
			exit();
		}elseif($val==2){
			echo '<script>location.href="'.site_url('cadmin/index').'"</script>';
		}else{
			
			echo '<script>location.href="'.site_url('login/index').'"</script>';
			exit();
		}
	}
}