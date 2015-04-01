<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_logic extends CI_Model 
{
    public function __construct() 
        { 
            parent::__construct(); 
        }
        
        /*
        * Descripation:  select any table data in through controller class
        *
        */        
    public function db_select($table)
    {
     $query = $this->db->get($table);
     return $query->result();
    }
    //insert for any table any data 
    public function db_insert($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    //data select any table in where
    public function db_where($table, $field, $value)
    {
        $this->db->where($field, $value);
        $query = $this->db->get($table);
        return $query;
    }
    //select customer like
    public function db_like($table, $field, $like_value)
    {        
        $this->db->like($field, $like_value, 'after');
        $query = $this->db->get($table);
        return $query;
    }
}