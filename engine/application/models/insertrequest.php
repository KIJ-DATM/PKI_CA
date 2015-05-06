<?php
class insert_request extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  
  function form_insert($data)
  {
    // Inserting in Table(cert_request) of Database(kijcert)
    $this->db->insert('cert_request', $data);
  }
}
?>