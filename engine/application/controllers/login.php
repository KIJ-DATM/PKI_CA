<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	/*function __construct(){
		parent::__construct();
	    $this->load->library('session');
	    $session_data = $this->session->all_userdata();
	    $is_logged_out = empty($session_data['data_login']);
	    if($is_logged_out)
	    {
	      redirect(site_url('form_login'));
	    }
  	}

	public function index()
	{
		redirect(site_url('form_login'));
	}*/

	 function __construct()
	 {
	   parent::__construct();
	 }

	 function index()
	 {
	   $this->load->view('form_login');
	 }

}
