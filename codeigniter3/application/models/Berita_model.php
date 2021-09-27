<?php
class Berita_model extends CI_Model
{
    public $table = 'news';
    public $id = 'id';

    function data_berita()
    {
        return $this->db->get($this->table)->result();

        //return $this->db->query('select * from news')->result();
    }
}
