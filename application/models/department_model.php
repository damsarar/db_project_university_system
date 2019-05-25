<?php
class department_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function department_select()
    {

        $query = $this->db->get('department');
        return $query;
    }


    public function department_add($data)
    {
        $this->db->insert('department', $data);
        return $this->db->insert_id();
    }

    public function department_update($where, $data)
    {
        $this->db->update('department', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('Dept_code', $id);
        $this->db->delete('department');
    }
}
?>