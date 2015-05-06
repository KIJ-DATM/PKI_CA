<?php
$SSLConfig=array( "config"              => "./certificate/default.cnf",
                  "x509_extensions"     => "dv_cert"
                  "encrypt_key"         => false);
$csr = $_POST["csr"];
$cert = file_get_contents("./certificate/keys/ca/ca.crt") or die("Error read cert file");
$priv = file_get_contents("./certificate/keys/ca/ca.key.pem") or die("Error read private key");
$sig_res = openssl_csr_sign($csr, $cert, $priv, 365, $SSLConfig, 16384) or die("Error create cert file");
$new_cert = "";
openssl_x509_export($sig_res, $new_cert);
var_dump($new_cert);
?>
