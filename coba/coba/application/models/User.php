<?php
Class User extends CI_Model
{
  function __construct() {
    parent::__construct();
  }

 function login($username, $password)
 {
   $this -> db -> select('username, access');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $query = $this -> db -> get('user', 1);

   if ($query->num_rows() != 1)
      return -1;
    return $query->result_array();
 }

}

?>
