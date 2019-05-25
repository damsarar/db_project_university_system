<?php
class get_professor_list_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getAllGroups()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        $query = $this->db->query('SELECT Emp_ID FROM professor');


        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }




}
?>