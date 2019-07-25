<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Skill extends CI_Model

{
    
    function get_skill_info_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM skill WHERE SKILL_PARENT =".$id);

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }
}
