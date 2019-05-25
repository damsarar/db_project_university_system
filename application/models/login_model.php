<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function checkUser($data){
        $query = "select * from user_login where user_name  = $data";
        return $query->result();
    }
}