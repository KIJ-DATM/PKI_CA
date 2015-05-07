<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$user_access=1;
		$this->load->view('home_view',array('user_access' => $user_access));
	}
}
