<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Hero extends CI_Model

{
    function get_all_hero()
    {
        $query = $this->db->query("SELECT * FROM hero ORDER BY id desc");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    function get_hero_by_id($hero_id)
    {   
        if(!$hero_id) {

           $hero_id = 1;
        }

        $query = $this->db->query("SELECT * FROM hero WHERE ID = ".$hero_id."");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    function get_skill_by_id($hero_id)
    {   
        if(!$hero_id) {

           $hero_id = 1;
        }

        $query = $this->db->query("SELECT * FROM skill WHERE SKILL_PARENT = ".$hero_id."");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }
}
