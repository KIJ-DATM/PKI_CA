<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class csres extends CI_Controller {

	public function index()
	{
		$this->load->view('csr_view');
	}
	public function sign()
	{
		$SSLConfig=array( "config"              => "/var/www/html/coba/certificate/default.cnf",
		                  "x509_extensions"     => 'dv_cert',
		                  "encrypt_key"         => FALSE);
		$csr = file_get_contents("/var/www/html/coba/certificate/k.csr");
		var_dump($csr);
		$cert = file_get_contents("/var/www/html/coba/certificate/keys/ca/ca.crt");
		$priv = file_get_contents("/var/www/html/coba/certificate/keys/ca/ca.key.pem");
		$sig_res = openssl_csr_sign($csr, $cert, $priv, 365, $SSLConfig, 16384);
		$new_cert = "";
		openssl_x509_export($sig_res, $new_cert);

		$this->load->view('sign_view',array('sign' => $new_cert));
	}
}
