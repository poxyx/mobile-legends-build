<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Champ extends BP_Controller

{
    public

    function __construct()
    {
        parent::__construct();
        $this->title = "MOBILE LEGENDS TOOL";
        $this->description = "Mobile Legends Champ..";
        $this->GFont = array("Karla");
        $this->load->model('Hero');
    }

    public

    function index()
    {
        $data['hero_column'] = $this->hero_column();
        $data['hero'] = $this->Hero->get_all_hero();
        $this->build_content($data);
        $this->render_page();
    }

    
    function hero_column() {

        return $hero_column = ['HERO_PHOTO','HERO_MOVE_SPEED','HERO_PHYSICAL_ATK','HERO_ARMOR','HERO_MAGIC_ARMOR','HERO_HP','HERO_MANA','HERO_ATK_SPEED','HERO_HP_REGEN','HERO_MANA_REGEN'];
    }

}

/*End of file hero.php*/
/*Location .application/controllers/example.php*/
