<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends MY_Controller {

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
    else if ($this->session->userdata('user_access') == 1) {
      redirect(base_url() . 'home');
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
      $ac = $this->user->login($username,$password);
      if ($ac != -1) {
        echo $ac->user_access;
        $userdata = array('id' => $id, 'user_access' => $ac->user_access);
        $this->session->set_userdata($userdata);
        $this->index();
       }
      else {
        $data = array ('alert_msg' => 'ID atau kata sandi salah');
        $this->load->view('login_view', $data);
      }
    }
    else {
        $this->load->view('login_view');
    }

}

public function user_logout() {
    $this->session->unset_userdata('user_access');
    $this->session->unset_userdata('id');
    $this->user_login();
  }
}

?>
