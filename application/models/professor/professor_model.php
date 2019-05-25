<?php
class professor_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function professor_select($id)
    {

//        $query = $this->db->get('undergradute');
//        return $query;

        $query = $this->db->query("SELECT * FROM professor where Emp_ID='$id'");
        return $query->result();
    }




//    public function graduate_update($where, $data)
//    {
//        $this->db->update('gradute_student', $data, $where);
//        return $this->db->affected_rows();
//    }


}
?>