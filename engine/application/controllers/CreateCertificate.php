<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
class CreateCertificate extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model();
 }

 function index()
 {
   /*if ($this->session->userdata('user_access') != 1) {
      redirect(base_url() . 'verifyLogin');
      return;
    }*/

    $this->load->view("home_view");
 }

function selfCertificate(){


	$dn = array(
	    "countryName" => "UK",
	    "stateOrProvinceName" => "Somerset",
	    "localityName" => "Glastonbury",
	    "organizationName" => "The Brain Room Limited",
	    "organizationalUnitName" => "PHP Documentation Team",
	    "commonName" => "Wez Furlong",
	    "emailAddress" => "wez@example.com"
	);

	$privkey = openssl_pkey_new();

	$csr = openssl_csr_new($dn, $privkey);

	$sscert = openssl_csr_sign($csr, null, $privkey, 365);

	openssl_csr_export($csr, $csrout) and var_dump($csrout);
	openssl_x509_export($sscert, $certout) and var_dump($certout);
	openssl_pkey_export($privkey, $pkeyout, "mypassword") and var_dump($pkeyout);

	while (($e = openssl_error_string()) !== false) {
	    echo $e . "\n";
	}

}

}
?>
