<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();

class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->output->enable_profiler(TRUE);
    }
}
?>
