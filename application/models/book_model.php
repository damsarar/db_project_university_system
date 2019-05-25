<?php
class book_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }

    public function book_select()
    {

        $query = $this->db->get('book');
        return $query;
    }


    public function book_add($data)
    {
        $this->db->insert('book', $data);
        return $this->db->insert_id();
    }

    public function book_update($where, $data)
    {
        $this->db->update('book', $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('ISBN', $id);
        $this->db->delete('book');
    }
}
?>