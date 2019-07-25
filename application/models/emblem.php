<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Emblem extends CI_Model

{
    function get_emblem_id_name_photo()
    {
        $query = $this->db->query("SELECT ID,EMBLEM_NAME,EMBLEM_PHOTO FROM emblem ");
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    function get_emblem_info_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM emblem WHERE ID = " . $id );
        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

}
