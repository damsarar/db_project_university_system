<?php
class graduate_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function graduate_select()
    {

        $query = $this->db->get('gradute_student');
        return $query;
    }


    public function graduate_add($data)
    {
        $this->db->insert('gradute_student', $data);
        return $this->db->insert_id();
    }

    public function graduate_update($where, $data)
    {
        $this->db->update('gradute_student', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('SID', $id);
        $this->db->delete('gradute_student');
    }
}
?>