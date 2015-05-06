<?php
class CertRequest extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  
  function getAllCertRequest()
  {
  	$query = $this->db->get('cert_request');
    return $query->result();
  }
}
?>