<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Talent extends CI_Model

{
    
    function get_talent_info_by_tier($id)
    {
        $query = $this->db->query("SELECT A.ID,A.TALENT_NAME,B.EMBLEM_PHOTO FROM talent A
            INNER JOIN emblem B
            ON A.TALENT_PARENT = B.ID
            WHERE A.TALENT_TIER =".$id);

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    function get_talent_info_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM talent WHERE ID =".$id);

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

}
