<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home2 extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   if ($this->session->userdata('user_access') != 1) {
      redirect(base_url() . 'verifyLogin');
      return;
    }

    $this->load->view("home_view2");
 }


}

?>