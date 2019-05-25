<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//This is the Book Model for CodeIgniter CRUD using Ajax Application.
class Mobile extends CI_Model
{
    var $table = 'mobiles';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_mobiles()
    {
        $this->db->from('mobiles');
        $query=$this->db->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();

        return $query->row();
    }

    public function mobile_add($data)
    {   //print_r($data);
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function mobile_update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}