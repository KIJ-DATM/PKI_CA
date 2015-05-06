<?php
$myfile = fopen("certificate/keys/ca/ca.crt","r") or die("Can't Read!");
$x509  = fread($myfile,filesize("certificate/keys/ca/ca.crt"));
fclose($myfile);
//var_dump($x509);
$hasil = openssl_x509_parse($x509,false);
var_dump($hasil);
?>
