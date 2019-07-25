<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Builder extends BP_Controller

{
    public

    function __construct()
    {
        parent::__construct();
        $this->title = "MOBILE LEGENDS TOOL";
        $this->description = "Mobile Legends Champ..";
        $this->GFont = array("Karla");
        $this->load->model('Hero');
        $this->load->model('Item');
        $this->load->model('Emblem');
        $this->load->model('Talent');
        $this->load->model('Skill');
        $this->load->model('Mlapi');
        $this->load->helper('misc');
    }

    public

    function index()
    {
        $data['hero_column'] = $this->hero_column();
        $data['hero'] = $this->Hero->get_all_hero();
        $data['item'] = $this->Item->get_item_name();
        $data['potion'] = $this->Item->get_all_potion();
        $data['emblem'] = $this->Emblem->get_emblem_id_name_photo();
        $data['talent_tier_1'] =  $this->Talent->get_talent_info_by_tier(1);
        $data['talent_tier_2'] =  $this->Talent->get_talent_info_by_tier(2);

        $this->build_content($data);
        $this->render_page();
    }


    function get_hero_base_stats($id,$api_id,$item1 = 0,$item2 = 0,$item3 = 0,$item4 = 0,$item5 = 0,$item6 = 0) 
    {   
        $data['enemy'] = $this->Hero-> get_hero_by_id(39); //DEFAULT ENEMY 
        $data['hero'] = $this->Hero-> get_hero_by_id($id);     
        $data['skill'] = $this->Hero-> get_skill_by_id($id);     
        $data['item'] = $this->Item->get_all_item_info();
        $data['emblem'] = $this->Emblem->get_emblem_id_name_photo();
        $data['talent_tier_1'] =  $this->Talent->get_talent_info_by_tier(1);
        $data['talent_tier_2'] =  $this->Talent->get_talent_info_by_tier(2);
        $data['API'] = $this->Mlapi->get_all_hero_info_by_id($api_id);
        $data['RANK_API'] = $this->Mlapi->get_hero_ranking_all($api_id);
        $data['API_HERO_ID'] = $api_id;

        $this->build_content($data);
        $this->render_page();
    }

    function debug($api_id) {
        print("<pre>");
        // print_r($this->Mlapi->get_all_hero_info_by_id($api_id));
        print_r($this->Mlapi->get_hero_ranking_all($api_id));
    }

    function get_item_base_stats($id) 
    {   
        $item_stats = $this->Item-> get_all_item_by_id($id);
        echo $JSON = json_encode($item_stats);
    }

    function get_emblem_stats($id) 
    {   
        $emblem_info = $this->Emblem->get_emblem_info_by_id($id);
        echo $JSON = json_encode($emblem_info);
    }

    function get_talent_info($id)
    {
        $talent = $this->Talent->get_talent_info_by_id($id);
        echo $JSON = json_encode($talent);
    }

    function get_skill_info($id)
    {
        $skill = $this->Skill->get_skill_info_by_id($id);
        echo $JSON = json_encode($skill);
    }

    
    function hero_column() 
    {

        return $hero_column = ['HERO_PHOTO','HERO_MOVE_SPEED','HERO_PHYSICAL_ATK','HERO_ARMOR','HERO_MAGIC_ARMOR','HERO_HP','HERO_MANA','HERO_ATK_SPEED','HERO_HP_REGEN','HERO_MANA_REGEN'];
    }

}

/*End of file hero.php*/
/*Location .application/controllers/example.php*/
