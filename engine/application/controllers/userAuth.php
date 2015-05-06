<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserAuth extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
    echo $this->session->userdata('user_access');
    if($this->session->userdata('user_access') == null) {
      $this->user_login();
    }
    else if ($this->session->userdata('user_access') == 2) {
      redirect(base_url() . 'home2');
    }
 }

 public function user_login() {

    $this->load->model('user');
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if($username && $password){
      if($username == "admin" && $password="pk1-d4tm")
      {
        //redirect(base_url() . 'home');
        $this->load->view('admin-cert-list');
      }

      $ac = $this->user->login($username,$password);
      if ($ac != -1) {
        //echo $ac->user_access;
        //$userdata = array('id' => $id, 'user_access' => $ac->user_access);
        $userdata = array('id' => $id);
        $this->session->set_userdata($userdata);
        //$this->index();
        //redirect(base_url() . 'home2');
        $this->load->view('user-page');
       }
      else {

        echo 'login gagal';
        //$data = array ('alert_msg' => 'ID atau kata sandi salah');
        //$this->load->view('login_view', $data);
      }
    }
    else {
        $this->load->view('form_login');
    }

}

public function user_logout() {
    $this->session->unset_userdata('user_access');
    $this->session->unset_userdata('id');
    $this->user_login();
  }
}

?>