<?php
class professor_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function professor_select()
    {

        $query = $this->db->get('professor');
        return $query;
    }


    public function professor_add($data)
    {
        $this->db->insert('professor', $data);
        return $this->db->insert_id();
    }

    public function professor_update($where, $data)
    {
        $this->db->update('professor', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('Emp_ID', $id);
        $this->db->delete('professor');
    }
}
?>