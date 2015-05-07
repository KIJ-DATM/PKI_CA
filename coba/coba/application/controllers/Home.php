<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$user_access=$this->session->userdata('user_access');
		$this->load->view('home_view',array('user_access' => $user_access));
	}
	public function login() {

	    $this->load->model('user');
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
		if($username=='logout'){
			$userdata = array('id' => 0, 'user_access' => 0);
			$this->session->set_userdata($userdata);
		        $this->index();
		}
	    elseif($username && $password){
	      $ac = $this->user->login($username,$password);
	      if ($ac != -1) {
	        //var_dump($ac);
	        $userdata = array('user_access' => (string)$ac[0]['access']);
	        $this->session->set_userdata($userdata);
	        redirect('home');
	       }
	      else {
	        $data = array ('alert_msg' => 'ID atau kata sandi salah');
	        $this->load->view('login', $data);
	      }
	    }
	    else {
	        $this->load->view('login');
	    }

	}
	public function csr(){
		$user_access=$this->session->userdata('user_access');
		$this->load->view('csr_view',array('user_access' => $user_access));
	}
}
