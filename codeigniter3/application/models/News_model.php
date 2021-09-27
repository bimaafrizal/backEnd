<?php
class News_model extends CI_Model
{
    public $table = 'news';
    public $id = 'id';
    public $order_ASC = 'ASC';

    public function insert_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order_ASC);
        return $this->db->get($this->table)->result();
    }

    // Get by ID

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function update_data($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
