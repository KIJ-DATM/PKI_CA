<?php
class CertRequest extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  
  function getAllCertRequest()
  {
  	$query = $this->db->select('*')->from('cert_request')->get();
    return $query->result();
  }

  function insertCertRequest($data)
  {
    // Inserting in Table(cert_request) of Database(kijcert)
    $this->db->insert('cert_request', $data);
  }
}
?>