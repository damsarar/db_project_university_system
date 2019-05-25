<?php
class lab_session_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function lab_session_select()
    {

        $query = $this->db->get('lab_session');
        return $query;
    }


    public function lab_session_add($data)
    {
        $this->db->insert('lab_session', $data);
        return $this->db->insert_id();
    }

    public function lab_session_update($where, $data)
    {
        $this->db->update('lab_session', $data, $where);
        return $this->db->affected_rows();
    }

//    public function delete_by_id($id)
//    {
//        $this->db->where('Emp_ID', $id);
//        $this->db->delete('lab_session');
//    }
}
?>