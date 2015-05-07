<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();

class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->output->enable_profiler(TRUE);
    }
    protected function sign($days = 365, $section = 'generic_cert')
    {
            $SSLConfig=array( "config"              => "/var/www/html/coba/certificate/default.cnf",
                              "x509_extensions"     => $section,
                              "encrypt_key"         => FALSE);
            $csr = file_get_contents("/var/www/html/coba/certificate/temp.csr");
            var_dump($csr);
            $cert = file_get_contents("/var/www/html/coba/certificate/keys/ca/ca.crt");
            $priv = file_get_contents("/var/www/html/coba/certificate/keys/ca/ca.key.pem");
            $sig_res = openssl_csr_sign($csr, $cert, $priv, $days, $SSLConfig, 16384);
            $new_cert = "";
            openssl_x509_export($sig_res, $new_cert);
            
    }
}
?>
