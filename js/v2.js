
var hero_url          = "http://localhost:8080/older_builder/simulations/get_hero_base_stats/"
var item_url          = "http://localhost:8080/older_builder/simulations/get_item_base_stats/"
var potion_url        = "http://localhost:8080/older_builder/simulations/get_item_base_stats/"
var emblem_url        = "http://localhost:8080/older_builder/simulations/get_emblem_stats/"
var talent_tier_1_url = "http://localhost:8080/older_builder/simulations/get_talent_info/"
var talent_tier_2_url = "http://localhost:8080/older_builder/simulations/get_talent_info/"
var skill_url         = "http://localhost:8080/older_builder/simulations/get_skill_info/"

var passive_dmg_ratio_mgc = [0,0,0,0]
var passive_dmg_ratio_phy = [0,0,0,0]
var r = /\d+/
var skill_mod_flag = [false,false,false,false];
var passive_flag = [false,false,false,false,false,false,false,false,false,false];

var global_enemy_hp = 0
var global_enemy_armor = 0
var global_enemy_magic_res = 0;
var global_enemy_base_hp = 0;

var global_hero_mgc_pen_fix = 0
var global_hero_mgc_pen_per = 0
var global_hero_phy_pen_per = 0
var global_hero_phy_pen_fix = 0

var global_hero_level = 0;
var affliction = 0

function f(string){
	return parseFloat(string)
}

function renderInfo(id,data){

	// console.log(id)
	// console.log(data)
	$('#' + id).html(data)
}

function calculateFinalDamage(added_dmg,base_dmg,target_armor,flat_pen,per_pen){

	var base_total_damage = f(added_dmg + base_dmg);

	var armor           = f(f(target_armor) - f(flat_pen))
	var reduction       = f(f(armor) * f(f(per_pen) / f(100)))
	var nd_reduction    = f(f(armor) - f(reduction))
	var final_reduction = f(120)/f(f(120) + f(nd_reduction))			
	var final_damage    = f(f(base_total_damage)  * f(f(final_reduction) /f(100)) * f(100))

	if(parseInt(flat_pen) > target_armor) {	

		return fd(f(added_dmg) + f(base_dmg))

	} else {

		return final_damage;
	}

}

function calculateFinalReduction(target_armor,flat_pen,per_pen){

	var armor           = f(f(target_armor) - f(flat_pen))
	var reduction       = f(f(armor) * f(f(per_pen) / f(100)))
	var nd_reduction    = f(f(armor) - f(reduction))
	var final_reduction = f(120)/f(f(120) + f(nd_reduction))			

	var ehp = f(f(global_enemy_hp) * f(f(1) - f(final_reduction))).toFixed(2)

	$('#final_enemy_armor').html(fd(nd_reduction))
	$('#final_damage_increase').html(fd(f(final_reduction) * f(100)))
	$('#final_damage_reduction').html(fd(f(100) - f(final_reduction) * f(100)))
	$('#ehp').html(f(ehp))


}

function calculateDps(AS,AD,CC,CD) {

	if(CC == 0 ) {

		CC = 1
	} 

	var final_dps = f(1-f(CC) * f(AS)*f(AD)+f(AS)*f(CC)*f(CD)*f(AD))

	return final_dps
	

}


function fd(int){

	return Math.ceil(parseFloat(int)* 100) / 100
}

function get_hero_data(url,id) {
	var result = ""
	$.ajax({
	  url: url + id,
	  async: false,  
	  success:function(data) {
		 result = JSON.parse(data);
	  }
   })
   return result

}

function snackBar() {
	var x = document.getElementById("snackbar")
	x.className = "show"
	setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)

}

function log(string) {
	return console.log(string)
}

function get_skill_dmg_info_multiple(span_dmg,span_id,id,key,flag_key)
{	
	var dmg_mod = span_dmg[key].match(r)

	if(skill_mod_flag[flag_key] == true ) {

		$('#' + id + " > p > span." + span_id[key] + " > span.total_mod").remove()
	}

	if(dmg_mod['input'].indexOf("Total") != -1) {

		if(dmg_mod['input'].indexOf("Magic") != -1)
		{	

			$('#' + id + " > p > span." + span_id[key])
				.append(" <span class='total_mod'> ( + " +  f(f(hero.getTotal_magic_power()) * f(dmg_mod/100)).toFixed(2) + " ) </span> ");

			skill_mod_flag[flag_key] = true

		} else {

			$('#' + id + " > p > span." + span_id[key])
				.append(" <span class='total_mod'> ( +  " +  f(f(hero.getTotal_physical_attack()) * f(dmg_mod/100)).toFixed(2) + " ) </span> ");

			skill_mod_flag[flag_key] = true
		}


	} 


	if(dmg_mod['input'].indexOf("Extra") != -1) {

		if(dmg_mod['input'].indexOf("Magic") != -1)
		{	

			$('#' + id + " > p > span." + span_id[key])
				.append(" <span class='total_mod'> ( +  " +  f(f(hero.getTotal_extra_magic_power()) * f(dmg_mod/100)).toFixed(2) + " ) </span> ");

			skill_mod_flag[flag_key] = true

		} else {

			$('#' + id + " > p > span." + span_id[key])
				.append(" <span class='total_mod'> ( +  " +  f(f(hero.getTotal_extra_physical_attack()) * f(dmg_mod/100)).toFixed(2) + " ) </span> ");

			skill_mod_flag[flag_key] = true
		}
	}

}

function render_skill_dmg_info(id,flag_key) 
{

	var spans = document.getElementById(id).getElementsByTagName('span')
	var exclude = ["red","skill","blue","true","green"]
	var arr = Array.prototype.slice.call( spans )
	var span_id = []
	var span_dmg = []

	var x = 0

	while(x <= arr.length - 1) {

		if(jQuery.inArray(arr[x].className, exclude ) == -1 ) {

			span_id.push(arr[x].className)
			span_dmg.push(arr[x].innerText)
		}

		x++
	}

	if(span_id.length == 1) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
	}	

	if(span_id.length == 2) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
	}	

	if(span_id.length == 3) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,2,flag_key)
	}	

	
	if(span_id.length == 4) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,2,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,3,flag_key)

	}	

	if(span_id.length == 5) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,2,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,3,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,4,flag_key)

	}	


	if(span_id.length == 6) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,2,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,3,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,4,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,5,flag_key)

	}	


	if(span_id.length == 7) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,2,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,3,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,4,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,5,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,6,flag_key)

	}	


	if(span_id.length == 8) {

		get_skill_dmg_info_multiple(span_dmg,span_id,id,0,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,1,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,2,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,3,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,4,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,5,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,6,flag_key)
		get_skill_dmg_info_multiple(span_dmg,span_id,id,7,flag_key)

	}	

}

function updateStatus(hero) {

	affliction = 0

	render_skill_dmg_info("skill_desc_1",0);
	render_skill_dmg_info("skill_desc_2",1);
	render_skill_dmg_info("skill_desc_3",2);
	render_skill_dmg_info("skill_desc_4",3);
	

	$('#hp_mod').html("<span class='label label-default'><b>NIRVANA [INACTIVE]</b></span> ")
	$('#magic_power_mod').html("<span class='label label-default'><b>MYSTERY [INACTIVE]</b></span> ")
	$('#spellbreak_mod').html("<span class='label label-default'><b>SPELLBREAK [INACTIVE]</b></span> ")
	$('.bravery_mod').html("<span class='label label-default'><b>BRAVERY [INACTIVE]</b></span> ")

	if(hero.getMod_bravery() > 0) {
		$('.bravery_mod').html("<span class='label label-success'><b>BRAVERY [ACTIVE]</b></span> ")
	} 

	$('#total_attack').html(fd(hero.getTotal_physical_attack()))
	$('#added_attack').html(fd(hero.getTotal_extra_physical_attack()))
	$('#level_attack').html(fd(hero.getTotal_level_physical_attack()))

	$('#total_hp').html(fd(hero.getTotal_hp()))
	$('#added_hp').html(fd(hero.getTotal_extra_hp()))
	$('#level_hp').html(fd(hero.getTotal_level_hp()))

	if(hero.getMod_nirvana() > 0) {
		$('#hp_mod').html("<span class='label label-success'><b>NIRVANA [ACTIVE]</b></span> ")
	} 

	$('#total_mana').html(fd(hero.getTotal_mana()))
	$('#added_mana').html(fd(hero.getTotal_extra_mana()))
	$('#level_mana').html(fd(hero.getTotal_level_mana()))

	$('#total_armor').html(fd(hero.getTotal_armor()))
	$('#added_armor').html(fd(hero.getTotal_extra_armor()))
	$('#level_armor').html(fd(hero.getTotal_level_armor()))

	$('#total_magic_armor').html(fd(hero.getTotal_magic_armor()))
	$('#added_magic_armor').html(fd(hero.getTotal_extra_magic_armor()))
	$('#level_magic_armor').html(fd(hero.getTotal_level_magic_armor()))

	$('#total_hp_regen').html(fd(hero.getTotal_hp_regen()))
	$('#added_hp_regen').html(fd(hero.getTotal_extra_hp_regen()))
	$('#level_hp_regen').html(fd(hero.getTotal_level_hp_regen()))

	$('#total_mana_regen').html(fd(hero.getTotal_mana_regen()))
	$('#added_mana_regen').html(fd(hero.getTotal_extra_mana_regen()))
	$('#level_mana_regen').html(fd(hero.getTotal_level_mana_regen()))

	if(hero.getTotal_attack_speed() >= 2.5) {

		$('#total_attack_speed').html("2.50 <span class='label label-danger'>MAX</span>")

	} else {

		$('#total_attack_speed').html(fd(hero.getTotal_attack_speed()))

	}

	$('#added_attack_speed').html(fd(hero.getTotal_extra_attack_speed()))
	$('#level_attack_speed').html(fd(hero.getTotal_level_attack_speed()))

	$('#total_lifesteal').html(fd(hero.getTotal_lifesteal()))
	$('#added_lifesteal').html(fd(hero.getTotal_extra_lifesteal()))
	$('#level_lifesteal').html(fd(hero.getTotal_level_lifesteal()))

	$('#total_magic_power').html(fd(hero.getTotal_magic_power()))
	$('#added_magic_power').html(fd(hero.getTotal_extra_magic_power()))
	$('#level_magic_power').html(fd(hero.getTotal_level_magic_power()))

	if(hero.getMod_mystery() > 0) {
		$('#magic_power_mod').html("<span class='label label-success'><b>MYSTERY [ACTIVE]</b></span> ")
	} 

	$('#total_spell_vamp').html(fd(hero.getTotal_spell_vamp()))
	$('#added_spell_vamp').html(fd(hero.getTotal_extra_spell_vamp()))
	$('#level_spell_vamp').html(fd(hero.getTotal_level_spell_vamp()))

	$('#total_magic_pen_fix').html(fd(hero.getTotal_magic_pen_fix()))
	$('#added_magic_pen_fix').html(fd(hero.getTotal_extra_magic_pen_fix()))
	$('#level_magic_pen_fix').html(fd(hero.getTotal_level_magic_pen_fix()))

	$('#total_move_speed').html(fd(hero.getTotal_move_speed()))
	$('#added_move_speed').html(fd(hero.getTotal_extra_move_speed()))
	$('#level_move_speed').html(fd(hero.getTotal_level_move_speed()))

	if(hero.getTotal_cd_reduction() >= 40 ) {

		$('#total_cd_reduction').html("40 <span class='label label-danger'>MAX</span>")

	} else {

		$('#total_cd_reduction').html(fd(hero.getTotal_cd_reduction()))
	}

	$('#added_cd_reduction').html(fd(hero.getTotal_extra_cd_reduction()))
	$('#level_cd_reduction').html(fd(hero.getTotal_level_cd_reduction()))

	$('#total_crit_chance').html(fd(hero.getTotal_crit_chance()))
	$('#added_crit_chance').html(fd(hero.getTotal_extra_crit_chance()))
	$('#level_crit_chance').html(fd(hero.getTotal_level_crit_chance()))

	$('#added_crit_reduction').html(fd(hero.getTotal_extra_crit_reduction()))
	$('#total_crit_reduction').html(fd(hero.getTotal_extra_crit_reduction()))

	$('#added_resilience').html(fd(hero.getTotal_extra_resilience()))
	$('#total_resilience').html(fd(hero.getTotal_extra_resilience()))

	$('#added_phy_pen_fix').html(fd(hero.getTotal_extra_physical_pen()))
	$('#total_phy_pen_fix').html(fd(hero.getTotal_extra_physical_pen()))

	$('#dmg_monster').html(fd(hero.getTotal_dmg_to_monster()))

	$('#battle_spell').html(fd(hero.getTotal_battle_spell_cd()))

	$('#healing_effect').html(fd(hero.getTotal_healing_effects()))

	$('#crit_dmg').html(fd(hero.getTotal_crit_damage()))

	$('#phy_pen_per').html(fd(hero.getTotal_physical_pen_per()))

	$('#mgc_pen_per').html(fd(hero.getTotal_magic_pen_per()))

	if(hero.getMod_spellbreaker() > 0) {
		$('#spellbreak_mod').html("<span class='label label-success'><b>SPELLBREAK [ACTIVE]</b></span> ")
	} 


	//BASE PHYSICAL ATTACK DAMAGE

	basic_atk_dmg = fd(calculateFinalDamage(0,hero.getTotal_physical_attack(),global_enemy_armor,hero.getTotal_physical_pen(),hero.getTotal_physical_pen_per()))
	dps = calculateDps(hero.getTotal_attack_speed(),fd(hero.getTotal_physical_attack()),0.1,0.1)

	$('#basic_atk_dmg').html(basic_atk_dmg)
	$('#basic_atk_lifesteal').html(fd(f(basic_atk_dmg) * f(f(hero.getTotal_lifesteal()/100))))
	$('#basic_atk_crit').html(fd(f(basic_atk_dmg) * f(2)))
	$('#basic_atk_crit_doom').html(fd(f(basic_atk_dmg) * f(2.4)))
	$('#basic_atk_dps').html(0)
	$('#basic_atk_defeat').html(fd(f(global_enemy_hp) / f(basic_atk_dmg)) + " HITS")


	// END 

	//UNIQUE PASSIVE

	burning_1 = calculateFinalDamage(0,fd(f(hero.getTotal_hp()) * f(0.015)),f(f(global_enemy_magic_res) - hero.getTotal_magic_pen_fix()),0,hero.getTotal_magic_pen_per())
	burning_2 = calculateFinalDamage(0,fd(f(global_enemy_hp) * f(0.015)),f(f(global_enemy_magic_res) - hero.getTotal_magic_pen_fix()),0,hero.getTotal_magic_pen_per())


	$('#burning_soul_enemy').html(fd(burning_1))
	$('#burning_soul_hero').html(fd(burning_2))

	devor_1 = calculateFinalDamage(0,fd(f(global_enemy_base_hp) * f(0.09)),global_enemy_armor,0,hero.getTotal_physical_pen_per())

	$('#devour_1').html(f(devor_1).toFixed(2))
	$('#devour_2').html(fd(hero.getTotal_lifesteal()) + "  +  20 ")

	affliction = calculateFinalDamage(0,fd(f(hero.getTotal_magic_power()) * f(0.40)),f(f(global_enemy_magic_res) - hero.getTotal_magic_pen_fix()),0,hero.getTotal_magic_pen_per())

	$('#affliction').html(f(affliction).toFixed(2))
	
	$('#recharge').html(fd(f(hero.getTotal_hp()) * f(0.10)))

	$('#calamity').html(fd(f(hero.getTotal_magic_power()) * f(1.2)))

	$('#counterstrike').html(fd(f(hero.getTotal_physical_attack()) * f(0.25)))

	$('#thunderbolt').html(fd(f(hero.getTotal_hp()) * f(0.02)))

	$('#resonate').html(fd(f(hero.getTotal_mana()) * f(f(0.01) * hero.level)))

	$('#greed_1').html(fd(f(hero.getTotal_hp()) * f(0.04)))
	$('#greed_2').html(fd(f(hero.getTotal_mana()) * f(0.10)))

	recharge_1 = calculateFinalDamage(0,fd(f(global_enemy_hp) * f(0.02)),f(f(global_enemy_magic_res) - hero.getTotal_magic_pen_fix()),0,hero.getTotal_magic_pen_per())
	recharge_2 = calculateFinalDamage(0,fd(f(global_enemy_hp) * f(0.03)),f(f(global_enemy_magic_res) - hero.getTotal_magic_pen_fix()),0,hero.getTotal_magic_pen_per())
	recharge_3 = calculateFinalDamage(0,fd(f(global_enemy_hp) * f(0.04)),f(f(global_enemy_magic_res) - hero.getTotal_magic_pen_fix()),0,hero.getTotal_magic_pen_per())

	// log(global_enemy_magic_res)

	$('#recharge_2').html(f(recharge_1).toFixed(2))
	$('#recharge_3').html(f(recharge_2).toFixed(2))
	$('#recharge_4').html(f(recharge_3).toFixed(2))

	$('#divine_justice').html(fd(f(hero.getTotal_physical_attack()) * f(0.85)))

	$('#lifeline').html(fd(f(510) + f(60 * hero.level)))

}

function up() {
          
	$.when( calculateAll() ).done(function( x ) {
	   $('body').loading('stop');
  });
}

function calculateAll() {

	var deferred = new $.Deferred()

	// ITEM SECTION 

	var item_1 			= $('input[name=slot1]').val()
	var item_2 			= $('input[name=slot2]').val()
	var item_3 			= $('input[name=slot3]').val()
	var item_4 			= $('input[name=slot4]').val()
	var item_5 			= $('input[name=slot5]').val()
	var item_6 			= $('input[name=slot6]').val()
	var talent1_id 		= $('input[name=talent1]').val()
	var talent2_id		= $('input[name=talent2]').val()
	var talent1_lvl 	= $('#talent1_level').val()
	var talent2_lvl		= $('#talent2_level').val()
	level 	   			= $('#hero_level').val();
	s1_lvl 	   			= $('#skill_1_level').val();
	s2_lvl 	   			= $('#skill_2_level').val();
	s3_lvl 	   			= $('#skill_3_level').val();
	s4_lvl 	   			= $('#skill_4_level').val();
	s5_lvl 	   			= $('#skill_5_level').val();
	s6_lvl 	   			= $('#skill_6_level').val();
	  
	var item_slot_1 	= get_hero_data(item_url,item_1) 			
	var item_slot_2 	= get_hero_data(item_url,item_2)			
	var item_slot_3 	= get_hero_data(item_url,item_3)			
	var item_slot_4 	= get_hero_data(item_url,item_4)			
	var item_slot_5 	= get_hero_data(item_url,item_5)			
	var item_slot_6 	= get_hero_data(item_url,item_6)			
	var items    		= [item_slot_1,item_slot_2,item_slot_3,item_slot_4,item_slot_5,item_slot_6];
	hero.add_item(items)
	hero.add_level(data,level)
	

	//ENEMY SECTION

	
	var item_11 		= $('input[name=slot11]').val()
	var item_22 		= $('input[name=slot22]').val()
	var item_33 		= $('input[name=slot33]').val()
	var item_44			= $('input[name=slot44]').val()
	var item_55 		= $('input[name=slot55]').val()
	var item_66 		= $('input[name=slot66]').val()

	enemy_level 	   	= $('#enemy_level').val();
	  
	var item_slot_11 	= get_hero_data(item_url,item_11) 			
	var item_slot_22 	= get_hero_data(item_url,item_22)			
	var item_slot_33 	= get_hero_data(item_url,item_33)			
	var item_slot_44 	= get_hero_data(item_url,item_44)			
	var item_slot_55 	= get_hero_data(item_url,item_55)			
	var item_slot_66 	= get_hero_data(item_url,item_66)			
	var enemy_items    	= [item_slot_11,item_slot_22,item_slot_33,item_slot_44,item_slot_55,item_slot_66];


	enemy.add_item(enemy_items)
	enemy.add_level(enemy_data,enemy_level)

	// log(enemy_data)

	// EMBLEM SECTION 

	var emblem_id 		= $('input[name=emblem]').val()
	var emblem_level    = $('#emblem_level').val()
	var emblem          = get_hero_data(emblem_url,emblem_id)		
	var talent1         = get_hero_data(talent_tier_1_url,talent1_id)	
	var talent2         = get_hero_data(talent_tier_2_url,talent2_id)	

	hero.add_emblem(emblem,emblem_level)
	hero.skill_passive(skill)
	hero.skill_level_1(skill,s1_lvl)
	hero.skill_level_2(skill,s2_lvl)
	hero.skill_level_ultimate(skill,s3_lvl)
	hero.add_talent_tier_1(talent1,talent1_lvl)
	hero.add_talent_tier_2(talent2,talent2_lvl)

	if(s7 ==  true) {
		hero.extra_skill_level_1(skill,s4_lvl)
		hero.extra_skill_level_2(skill,s5_lvl)
		hero.extra_skill_level_ultimate(skill,s6_lvl)
	}

	if(s5 ==  true) {
		hero.extra_skill_level_1(skill,s4_lvl)
	}
	
	// END EMBLEM SECTION		

	enemy.final_enemy_status()
	hero.final_champion_status()

	updateStatus(hero)

	//END ITEM SECTION	

	snackBar()
}


function champion(data) {	

			skill_mod_flag = [false,false,false,false];

			this.id					            = data["0"].ID
			this.base_name  					= data["0"].HERO_NAME
			this.base_category 					= data["0"].HERO_ROLE
			this.base_hp 						= data["0"].HERO_HP
			this.base_mana 						= data["0"].HERO_MANA
			this.base_physical_attack 			= data["0"].HERO_PHYSICAL_ATK
			this.base_armor 					= data["0"].HERO_ARMOR
			this.base_physical_pen_per 			= data["0"].HERO_MAGIC_ARMOR
			this.base_physical_pen_fix 			= 0
			this.base_lifesteal 				= 0
			this.base_hp_regen 					= data["0"].HERO_HP_REGEN
			this.base_mana_regen 				= data["0"].HERO_MANA_REGEN
			this.base_magic_power 				= 0
			this.base_magic_res 				= data["0"].HERO_MAGIC_ARMOR
			this.base_magic_pen_per				= 0
			this.base_magic_pen_fix				= 0
			this.base_spell_vamp				= 0
			this.base_move_speed				= data["0"].HERO_MOVE_SPEED
			this.base_cd_reduction				= 0
			this.base_attack_speed				= data["0"].HERO_ATK_SPEED
			this.base_crit_chance				= 0
			


			// TOTAL STATUS
			this.total_extra_physical_attack 	= null;
			this.total_physical_attack 			= null;
			this.total_level_physical_attack 	= null;
			this.total_extra_hp 				= null;
			this.total_level_hp 				= null;
			this.total_hp 						= null;
			this.total_extra_mana 				= null;
			this.total_level_mana 				= null;
			this.total_mana 					= null;
			this.total_extra_armor 				= null;
			this.total_level_armor 				= null;
			this.total_armor 					= null;
			this.total_extra_magic_armor 		= null;
			this.total_level_magic_armor 		= null;
			this.total_magic_armor 				= null;
			this.total_extra_hp_regen 			= null;
			this.total_level_hp_regen 			= null;
			this.total_hp_regen 				= null;
			this.total_extra_mana_regen 		= null;
			this.total_level_mana_regen 		= null;
			this.total_mana_regen 				= null;
			this.total_extra_attack_speed 		= null;
			this.total_level_attack_speed 		= null;
			this.total_attack_speed 			= null;
			this.total_extra_lifesteal 			= null;
			this.total_level_lifesteal  		= null;
			this.total_lifesteal 				= null;
			this.total_extra_magic_power 		= null;
			this.total_level_magic_power 		= null;
			this.total_magic_power 				= null;
			this.total_extra_physical_pen 		= null;
			this.total_level_physical_pen 		= null;
			this.total_physical_pen 			= 0;
			this.total_extra_spell_vamp 		= null;
			this.total_level_spell_vamp 		= null;
			this.total_spell_vamp 				= null;
			this.total_extra_magic_pen_fix 		= null;
			this.total_level_magic_pen_fix 		= null;
			this.total_magic_pen_fix 			= null;
			this.total_extra_move_speed 		= null;
			this.total_level_move_speed         = null;
			this.total_move_speed 				= null;
			this.total_extra_cd_reduction 		= null;
			this.total_level_cd_reduction 		= null;
			this.total_cd_reduction 			= null;
			this.total_extra_crit_chance 		= null;
			this.total_level_crit_chance 		= null;
			this.total_crit_chance 				= null;
			this.total_extra_crit_reduction 	= null;
			this.total_level_crit_reduction 	= null;
			this.total_crit_reduction 			= null;
			this.total_extra_resilience 		= null;
			this.total_level_resilience 		= null;
			this.total_resilience 				= null;
			this.total_dmg_to_monster 			= null;
			this.total_battle_spell_cd 			= null;
			this.total_healing_effects          = null;
			this.total_crit_damage 				= null;
			this.total_physical_pen_per 		= null;
			this.total_magic_pen_per 			= null;
			this.hero_damage_type 				= data["0"].HERO_DMG_TYPE;

			//ITEM MODIFIER
			this.mod_nirvana = 0;
			this.mod_mystery = 0;
			this.mod_mystery_stack = 0;
			this.mod_spellbreaker = 0;
			this.mod_bravery = 0;



			// SETTER/GETTER
			this.setTotal_extra_physical_attack = function(total_extra_physical_attack) { this.total_extra_physical_attack = total_extra_physical_attack; } 
			this.getTotal_extra_physical_attack = function() { return this.total_extra_physical_attack; } 
			this.setTotal_physical_attack 		= function(total_physical_attack) { this.total_physical_attack = total_physical_attack; } 
			this.getTotal_physical_attack 		= function() { return this.total_physical_attack; } 
			this.setTotal_level_physical_attack = function(total_level_physical_attack) { this.total_level_physical_attack = total_level_physical_attack; } 
			this.getTotal_level_physical_attack = function() { return this.total_level_physical_attack; } 
			this.setTotal_extra_hp 				= function(total_extra_hp) { this.total_extra_hp = total_extra_hp; } 
			this.getTotal_extra_hp 				= function() { return this.total_extra_hp; } 
			this.setTotal_level_hp 				= function(total_level_hp) { this.total_level_hp = total_level_hp; } 
			this.getTotal_level_hp 				= function() { return this.total_level_hp; } 
			this.setTotal_hp 					= function(total_hp) { this.total_hp = total_hp; } 
			this.getTotal_hp 					= function() { return this.total_hp; } 
			this.setTotal_extra_mana 			= function(total_extra_mana) { this.total_extra_mana = total_extra_mana; } 
			this.getTotal_extra_mana 			= function() { return this.total_extra_mana; } 
			this.setTotal_level_mana 			= function(total_level_mana) { this.total_level_mana = total_level_mana; } 
			this.getTotal_level_mana 			= function() { return this.total_level_mana; } 
			this.setTotal_mana 					= function(total_mana) { this.total_mana = total_mana; } 
			this.getTotal_mana 					= function() { return this.total_mana; } 
			this.setTotal_extra_armor 			= function(total_extra_armor) { this.total_extra_armor = total_extra_armor; } 
			this.getTotal_extra_armor 			= function() { return this.total_extra_armor; } 
			this.setTotal_level_armor 			= function(total_level_armor) { this.total_level_armor = total_level_armor; } 
			this.getTotal_level_armor 			= function() { return this.total_level_armor; } 
			this.setTotal_armor 				= function(total_armor) { this.total_armor = total_armor; } 
			this.getTotal_armor 				= function() { return this.total_armor; } 
			this.setTotal_extra_magic_armor 	= function(total_extra_magic_armor) { this.total_extra_magic_armor = total_extra_magic_armor; } 
			this.getTotal_extra_magic_armor 	= function() { return this.total_extra_magic_armor; } 
			this.setTotal_level_magic_armor 	= function(total_level_magic_armor) { this.total_level_magic_armor = total_level_magic_armor; } 
			this.getTotal_level_magic_armor 	= function() { return this.total_level_magic_armor; } 
			this.setTotal_magic_armor 			= function(total_magic_armor) { this.total_magic_armor = total_magic_armor; } 
			this.getTotal_magic_armor 			= function() { return this.total_magic_armor; } 
			this.setTotal_extra_hp_regen 		= function(total_extra_hp_regen) { this.total_extra_hp_regen = total_extra_hp_regen; } 
			this.getTotal_extra_hp_regen 		= function() { return this.total_extra_hp_regen; } 
			this.setTotal_level_hp_regen 		= function(total_level_hp_regen) { this.total_level_hp_regen = total_level_hp_regen; } 
			this.getTotal_level_hp_regen 		= function() { return this.total_level_hp_regen; } 
			this.setTotal_hp_regen 				= function(total_hp_regen) { this.total_hp_regen = total_hp_regen; } 
			this.getTotal_hp_regen 				= function() { return this.total_hp_regen; } 
			this.setTotal_extra_mana_regen 		= function(total_extra_mana_regen) { this.total_extra_mana_regen = total_extra_mana_regen; } 
			this.getTotal_extra_mana_regen 		= function() { return this.total_extra_mana_regen; } 
			this.setTotal_level_mana_regen 		= function(total_level_mana_regen) { this.total_level_mana_regen = total_level_mana_regen; } 
			this.getTotal_level_mana_regen 		= function() { return this.total_level_mana_regen; } 
			this.setTotal_mana_regen 			= function(total_mana_regen) { this.total_mana_regen = total_mana_regen; } 
			this.getTotal_mana_regen 			= function() { return this.total_mana_regen; } 
			this.setTotal_extra_attack_speed 	= function(total_extra_attack_speed) { this.total_extra_attack_speed = total_extra_attack_speed; } 
			this.getTotal_extra_attack_speed 	= function() { return this.total_extra_attack_speed; } 
			this.setTotal_level_attack_speed 	= function(total_level_attack_speed) { this.total_level_attack_speed = total_level_attack_speed; } 
			this.getTotal_level_attack_speed 	= function() { return this.total_level_attack_speed; } 
			this.setTotal_attack_speed 			= function(total_attack_speed) { this.total_attack_speed = total_attack_speed; } 
			this.getTotal_attack_speed 			= function() { return this.total_attack_speed; } 
			this.setTotal_extra_lifesteal 		= function(total_extra_lifesteal) { this.total_extra_lifesteal = total_extra_lifesteal; } 
			this.getTotal_extra_lifesteal 		= function() { return this.total_extra_lifesteal; } 
			this.setTotal_level_lifesteal 		= function(total_level_lifesteal) { this.total_level_lifesteal = total_level_lifesteal; } 
			this.getTotal_level_lifesteal 		= function() { return this.total_level_lifesteal; } 
			this.setTotal_lifesteal 			= function(total_lifesteal) { this.total_lifesteal = total_lifesteal; } 
			this.getTotal_lifesteal 			= function() { return this.total_lifesteal; } 
			this.setTotal_extra_magic_power 	= function(total_extra_magic_power) { this.total_extra_magic_power = total_extra_magic_power; } 
			this.getTotal_extra_magic_power 	= function() { return this.total_extra_magic_power; } 
			this.setTotal_level_magic_power 	= function(total_level_magic_power) { this.total_level_magic_power = total_level_magic_power; } 
			this.getTotal_level_magic_power 	= function() { return this.total_level_magic_power; } 
			this.setTotal_magic_power 			= function(total_magic_power) { this.total_magic_power = total_magic_power; } 
			this.getTotal_magic_power 			= function() { return this.total_magic_power; } 
			this.setTotal_extra_physical_pen 	= function(total_extra_physical_pen) { this.total_extra_physical_pen = total_extra_physical_pen; } 
			this.getTotal_extra_physical_pen 	= function() { return this.total_extra_physical_pen; } 
			this.setTotal_level_physical_pen 	= function(total_level_physical_pen) { this.total_level_physical_pen = total_level_physical_pen; } 
			this.getTotal_level_physical_pen 	= function() { return this.total_level_physical_pen; } 
			this.setTotal_physical_pen 			= function(total_physical_pen) { this.total_physical_pen = total_physical_pen; } 
			this.getTotal_physical_pen 			= function() { return this.total_physical_pen; } 
			this.setTotal_extra_spell_vamp 		= function(total_extra_spell_vamp) { this.total_extra_spell_vamp = total_extra_spell_vamp; } 
			this.getTotal_extra_spell_vamp 		= function() { return this.total_extra_spell_vamp; } 
			this.setTotal_level_spell_vamp 		= function(total_level_spell_vamp) { this.total_level_spell_vamp = total_level_spell_vamp; } 
			this.getTotal_level_spell_vamp 		= function() { return this.total_level_spell_vamp; } 
			this.setTotal_spell_vamp 			= function(total_spell_vamp) { this.total_spell_vamp = total_spell_vamp; } 
			this.getTotal_spell_vamp 			= function() { return this.total_spell_vamp; } 
			this.setTotal_extra_magic_pen_fix 	= function(total_extra_magic_pen_fix) { this.total_extra_magic_pen_fix = total_extra_magic_pen_fix; } 
			this.getTotal_extra_magic_pen_fix 	= function() { return this.total_extra_magic_pen_fix; } 
			this.setTotal_level_magic_pen_fix 	= function(total_level_magic_pen_fix) { this.total_level_magic_pen_fix = total_level_magic_pen_fix; } 
			this.getTotal_level_magic_pen_fix 	= function() { return this.total_level_magic_pen_fix; } 
			this.setTotal_magic_pen_fix 		= function(total_magic_pen_fix) { this.total_magic_pen_fix = total_magic_pen_fix; } 
			this.getTotal_magic_pen_fix 		= function() { return this.total_magic_pen_fix; } 
			this.setTotal_extra_move_speed 		= function(total_extra_move_speed) { this.total_extra_move_speed = total_extra_move_speed; } 
			this.getTotal_extra_move_speed 		= function() { return this.total_extra_move_speed; } 
			this.setTotal_level_move_speed 		= function(total_level_move_speed) { this.total_level_move_speed = total_level_move_speed; } 
			this.getTotal_level_move_speed 		= function() { return this.total_level_move_speed; } 
			this.setTotal_move_speed 			= function(total_move_speed) { this.total_move_speed = total_move_speed; } 
			this.getTotal_move_speed 			= function() { return this.total_move_speed; } 
			this.setTotal_extra_cd_reduction 	= function(total_extra_cd_reduction) { this.total_extra_cd_reduction = total_extra_cd_reduction; } 
			this.getTotal_extra_cd_reduction 	= function() { return this.total_extra_cd_reduction; } 
			this.setTotal_level_cd_reduction 	= function(total_level_cd_reduction) { this.total_level_cd_reduction = total_level_cd_reduction; } 
			this.getTotal_level_cd_reduction 	= function() { return this.total_level_cd_reduction; } 
			this.setTotal_cd_reduction 			= function(total_cd_reduction) { this.total_cd_reduction = total_cd_reduction; } 
			this.getTotal_cd_reduction 			= function() { return this.total_cd_reduction; } 
			this.setTotal_extra_crit_chance 	= function(total_extra_crit_chance) { this.total_extra_crit_chance = total_extra_crit_chance; } 
			this.getTotal_extra_crit_chance 	= function() { return this.total_extra_crit_chance; } 
			this.setTotal_level_crit_chance 	= function(total_level_crit_chance) { this.total_level_crit_chance = total_level_crit_chance; } 
			this.getTotal_level_crit_chance 	= function() { return this.total_level_crit_chance; } 
			this.setTotal_crit_chance 			= function(total_crit_chance) { this.total_crit_chance = total_crit_chance; } 
			this.getTotal_crit_chance 			= function() { return this.total_crit_chance; } 
			this.setTotal_extra_crit_reduction 	= function(total_extra_crit_reduction) { this.total_extra_crit_reduction = total_extra_crit_reduction; } 
			this.getTotal_extra_crit_reduction 	= function() { return this.total_extra_crit_reduction; } 
			this.setTotal_level_crit_reduction 	= function(total_level_crit_reduction) { this.total_level_crit_reduction = total_level_crit_reduction; } 
			this.getTotal_level_crit_reduction 	= function() { return this.total_level_crit_reduction; } 
			this.setTotal_crit_reduction 		= function(total_crit_reduction) { this.total_crit_reduction = total_crit_reduction; } 
			this.getTotal_crit_reduction 		= function() { return this.total_crit_reduction; } 
			this.setTotal_extra_resilience 		= function(total_extra_resilience) { this.total_extra_resilience = total_extra_resilience; } 
			this.getTotal_extra_resilience 		= function() { return this.total_extra_resilience; } 
			this.setTotal_level_resilience 		= function(total_level_resilience) { this.total_level_resilience = total_level_resilience; } 
			this.getTotal_level_resilience 		= function() { return this.total_level_resilience; } 
			this.setTotal_resilience 			= function(total_resilience) { this.total_resilience = total_resilience; } 
			this.getTotal_resilience 			= function() { return this.total_resilience; } 
			this.setTotal_dmg_to_monster 		= function(total_dmg_to_monster) { this.total_dmg_to_monster = total_dmg_to_monster; } 
			this.getTotal_dmg_to_monster 		= function() { return this.total_dmg_to_monster; } 
			this.setTotal_battle_spell_cd 		= function(total_battle_spell_cd) { this.total_battle_spell_cd = total_battle_spell_cd; } 
			this.getTotal_battle_spell_cd 		= function() { return this.total_battle_spell_cd; } 
			this.setTotal_healing_effects 		= function(total_healing_effects) { this.total_healing_effects = total_healing_effects; } 
			this.getTotal_healing_effects 		= function() { return this.total_healing_effects; } 
			this.setTotal_crit_damage 			= function(total_crit_damage) { this.total_crit_damage = total_crit_damage; } 
			this.getTotal_crit_damage 			= function() { return this.total_crit_damage; } 
			this.setTotal_physical_pen_per 		= function(total_physical_pen_per) { this.total_physical_pen_per = total_physical_pen_per; } 
			this.getTotal_physical_pen_per 		= function() { return this.total_physical_pen_per; } 
			this.setTotal_magic_pen_per 		= function(total_magic_pen_per) { this.total_magic_pen_per = total_magic_pen_per; } 
			this.getTotal_magic_pen_per 		= function() { return this.total_magic_pen_per; } 
			this.setMod_nirvana 				= function(mod_nirvana) { this.mod_nirvana = mod_nirvana; } 
			this.getMod_nirvana 				= function() { return this.mod_nirvana; } 
			this.setMod_mystery 				= function(mod_mystery) { this.mod_mystery = mod_mystery; } 
			this.getMod_mystery 				= function() { return this.mod_mystery; } 
			this.setMod_mystery_stack 			= function(mod_mystery_stack) { this.mod_mystery_stack = mod_mystery_stack; } 
			this.getMod_mystery_stack 			= function() { return this.mod_mystery_stack; } 
			this.setMod_spellbreaker 			= function(mod_spellbreaker) { this.mod_spellbreaker = mod_spellbreaker; } 
			this.getMod_spellbreaker 			= function() { return this.mod_spellbreaker; } 
			this.setMod_bravery 				= function(mod_bravery) { this.mod_bravery = mod_bravery; } 
			this.getMod_bravery 				= function() { return this.mod_bravery; } 
			this.setHero_damage_type 			= function(hero_damage_type) { this.hero_damage_type = hero_damage_type; } 
			this.getHero_damage_type 			= function() { return this.hero_damage_type; } 



		}

		champion.prototype.add_level = function(data,level) {

			this.level                  		= level
			this.level_added_physical_attack    = parseFloat(data["0"].HERO_PHYSICAL_ATK_GR * level)
			this.level_added_hp         		= parseFloat(data["0"].HERO_HP_GR 			* level)
			this.level_added_mana       		= parseFloat(data["0"].HERO_MANA_GR 		* level)
			this.level_added_armor      		= parseFloat(data["0"].HERO_ARMOR_GR 		* level)
			this.level_added_magic_res  		= parseFloat(data["0"].HERO_MAGIC_ARMOR_GR 	* level)
			this.level_added_attack_speed       = parseFloat(data["0"].HERO_ATK_SPEED_GR 	* level)
			this.level_added_hp_regen           = parseFloat(data["0"].HERO_HP_REGEN_GR 	* level)
			this.level_added_mana_regen	        = parseFloat(data["0"].HERO_MANA_REGEN_GR 	* level)

		}

		champion.prototype.add_item = function(data) {

			this.setMod_nirvana(0);
			this.setMod_mystery(0);
			this.setMod_mystery_stack(0);
			this.setMod_bravery(0);

			this.item_total_cost 			    = 0
			this.item_atk_speed_fix 			= 0
			this.item_atk_speed_per 			= 0
			this.item_cd_reduction 				= 0
			this.item_crit_chance 				= 0
			this.item_crit_reduction 			= 0
			this.item_hp 						= 0
			this.item_hp_regen 					= 0
			this.item_lifesteal 				= 0
			this.item_magic_res 				= 0
			this.item_magic_pen_fix 			= 0
			this.item_magic_pen_per 			= 0
			this.item_magic_power 				= 0
			this.item_mana 						= 0
			this.item_mana_regen 				= 0
			this.item_move_speed_fix			= 0
			this.item_move_speed_per 			= 0
			this.item_armor 					= 0
			this.item_physical_attack 			= 0
			this.item_physical_pen_fix 			= 0
			this.item_physical_pen_per 			= 0
			this.item_spell_vamp 				= 0
			this.item_resilience 				= 0
	
		   var i = 0

			 while (i <= 5 ) {

				if(data[i]["0"].ID == "29") {
						this.setMod_nirvana(1.5); // if blood wings exists active this mod
				} 

				if(data[i]["0"].ID == "23") {

						this.setMod_mystery(1); // if holy crystal exists active this mod
				} 
				
				if(data[i]["0"].ID == "22") {

					this.setMod_spellbreaker(1); // if divine glaive exists active this mod
				}

				if(data[i]["0"].ID == "99") {

					this.setMod_bravery(1); // if courage mask exists active this mod
				}


				if(data[i]["0"].ID == "1") { // if demon hunter sword exists active this mod

					$('#devour_1').closest("div").addClass('active-passive');

				}
				
				if(data[i]["0"].ID == "19") {

					$('#affliction').closest("div").addClass('active-passive'); // if feather of heaven	 exists active this mod
				}

				if(data[i]["0"].ID == "24") {

					$('#recharge').closest("div").addClass('active-passive'); // if concentrated energy	 exists active this mod
				}

				if(data[i]["0"].ID == "27") {

					$('#calamity').closest("div").addClass('active-passive'); // if calamity reaper	 exists active this mod
				}

				if(data[i]["0"].ID == "31") {

					$('#resonate').closest("div").addClass('active-passive'); // if lighthing truncheon	exists active this mod
				}

				if(data[i]["0"].ID == "35") {

					$('#thunderbolt').closest("div").addClass('active-passive'); // if thundr belt	exists active this mod
				}

				if(data[i]["0"].ID == "9") {

					$('#divine_justice').closest("div").addClass('active-passive'); // if endless battleexists active this mod
				}

				if(data[i]["0"].ID == "16") {

					$('#lifeline').closest("div").addClass('active-passive'); // if rose gold meteor active this mod
				}

				
				if(data[i]["0"].ID == "36") {

					$('#burning_soul_hero').closest("div").addClass('active-passive'); // if cursed helemt active this mod
				}

				if(data[i]["0"].ID == "26") {

					$('#recharge_2').closest("div").addClass('active-passive'); // if glowing wand active this mod
				}


			 	this.item_total_cost            = parseInt(this.item_total_cost) 	    + 	parseInt(data[i]["0"].ITEM_PRICE)
				this.item_atk_speed_fix 		= parseInt(this.item_atk_speed_fix) 	+ 	parseInt(data[i]["0"].ITEM_ATK_SPEED_FLAT)
				this.item_atk_speed_per 		= parseInt(this.item_atk_speed_per) 	+ 	parseInt(data[i]["0"].ITEM_ATK_SPEED_PER)
				this.item_cd_reduction 			= parseInt(this.item_cd_reduction) 		+ 	parseInt(data[i]["0"].ITEM_CD_REDUCTION)
				this.item_crit_chance 			= parseInt(this.item_crit_chance) 	    + 	parseInt(data[i]["0"].ITEM_CRIT_CHANCE)
				this.item_crit_reduction 		= parseInt(this.item_crit_reduction) 	+ 	parseInt(data[i]["0"].ITEM_CRIT_REDUCTION)
				this.item_hp 					= parseInt(this.item_hp) 				+ 	parseInt(data[i]["0"].ITEM_HP) 
				this.item_hp_regen 				= parseInt(this.item_hp_regen) 			+ 	parseInt(data[i]["0"].ITEM_HP_REGEN)
				this.item_lifesteal 			= parseInt(this.item_lifesteal ) 		+ 	parseInt(data[i]["0"].ITEM_LIFESTEAL)
				this.item_magic_res 			= parseInt(this.item_magic_res) 		+ 	parseInt(data[i]["0"].ITEM_MAGIC_ARMOR)
				this.item_magic_pen_fix 		= parseInt(this.item_magic_pen_fix) 	+	parseInt(data[i]["0"].ITEM_MAGIC_PEN_FLAT)
				this.item_magic_pen_per 		= parseInt(this.item_magic_pen_per) 	+ 	parseInt(data[i]["0"].ITEM_MAGIC_PEN_PER)
				this.item_magic_power 			= parseInt(this.item_magic_power) 		+ 	parseInt(data[i]["0"].ITEM_MAGIC_POWER) 
				this.item_mana 					= parseInt(this.item_mana) 				+ 	parseInt(data[i]["0"].ITEM_MANA)
				this.item_mana_regen 			= parseInt(this.item_mana_regen) 		+ 	parseInt(data[i]["0"].ITEM_MANA_REGEN)
				this.item_move_speed_fix		= parseInt(this.item_move_speed_fix) 	+ 	parseInt(data[i]["0"].ITEM_MOVE_SPEED_FLAT)
				this.item_move_speed_per 		= parseInt(this.item_move_speed_per) 	+ 	parseInt(data[i]["0"].ITEM_MOVE_SPEED_PER)
				this.item_armor 				= parseInt(this.item_armor ) 			+ 	parseInt(data[i]["0"].ITEM_PHYSICAL_ARMOR)
				this.item_physical_attack 		= parseInt(this.item_physical_attack) 	+ 	parseInt(data[i]["0"].ITEM_PHYSICAL_ATK)
				this.item_physical_pen_fix 		= parseInt(this.item_physical_pen_fix) 	+ 	parseInt(data[i]["0"].ITEM_PHYSICAL_PEN_FLAT)
			    this.item_physical_pen_per 		= parseInt(this.item_physical_pen_per) 	+ 	parseInt(data[i]["0"].ITEM_PHYSICAL_PEN_PER)
			    this.item_spell_vamp 			= parseInt(this.item_spell_vamp) 		+ 	parseInt(data[i]["0"].ITEM_SPELL_LIFESTEAL)
			    this.item_resilience 			= parseInt(this.item_resilience) 		+ 	parseInt(data[i]["0"].RESILIENCE) //undefined ?
				 
				i++
			 }		

			//  console.log(this.item_magic_power);

		}

		champion.prototype.add_potion = function(data) {

				this.potion_physical_attack 	= data["0"].ITEM_PHYSICAL_ATK
				this.potion_lifesteal 			= data["0"].ITEM_LIFESTEAL
				this.potion_magic_power 		= data["0"].ITEM_MAGIC_POWER
				this.potion_cd_reduction 	    = data["0"].ITEM_CD_REDUCTION
				this.potion_hp 					= data["0"].ITEM_HP
				this.potion_resilience 		    = data["0"].RESILIENCE

		}

		champion.prototype.add_emblem = function(data,emblem_level) {
				

	            this.emblem_armor 				= parseFloat(data["0"].EMBLEM_ARMOR_GR 					* emblem_level)
	            this.emblem_atk_speed_per 		= parseFloat(data["0"].EMBLEM_ATTACK_SPEED_GR 			* emblem_level)
	            this.emblem_cd_reduction 		= parseFloat(data["0"].EMBLEM_CDR_GR 					* emblem_level)
	            this.emblem_crit_chance 		= parseFloat(data["0"].EMBLEM_CRIT_CHANCE_GR 			* emblem_level)
	            this.emblem_hp 					= parseFloat(data["0"].EMBLEM_HP_GR 					* emblem_level)
	            this.emblem_hp_regen 			= parseFloat(data["0"].EMBLEM_HP_REGEN_GR 				* emblem_level)
	            this.emblem_lifesteal  			= parseFloat(data["0"].EMBLEM_LIFESTEAL_GR 				* emblem_level)
	            this.emblem_magic_res 			= parseFloat(data["0"].EMBLEM_MAGIC_ARMOR_GR 			* emblem_level)
	            this.emblem_magic_pen_fix 		= parseFloat(data["0"].EMBLEM_MAGIC_PEN_FLAT_GR 		* emblem_level)
	            this.emblem_magic_pen_per 		= parseFloat(data["0"].EMBLEM_MAGIC_PEN_GR 				* emblem_level)
	            this.emblem_magic_power 		= parseFloat(data["0"].EMBLEM_MAGIC_POWER_GR 			* emblem_level)
	            this.emblem_mana 				= parseFloat(data["0"].EMBLEM_MANA_GR 					* emblem_level)
	            this.emblem_mana_regen 			= parseFloat(data["0"].EMBLEM_MANA_REGEN_GR 			* emblem_level)
	            this.emblem_move_speed_per 		= parseFloat(data["0"].EMBLEM_MOVE_SPEED_GR 			* emblem_level)
	            this.emblem_attack 				= parseFloat(data["0"].EMBLEM_PHYSICAL_ATTACK_GR 		* emblem_level)
	            this.emblem_physical_pen_per 	= parseFloat(data["0"].EMBLEM_PHYSICAL_PEN_GR 			* emblem_level)
	            this.emblem_physical_pen_fix 	= parseFloat(data["0"].EMBLEM_PHYSICAL_PEN_FLAT_GR 		* emblem_level)
	            this.emblem_spell_vamp 			= parseFloat(data["0"].EMBLEM_SPELL_VAMP_GR 			* emblem_level)

	            // console.log('----------------------')
	            // console.log(this.emblem_physical_pen_fix)
	            // console.log('----------------------')


		}

		champion.prototype.add_talent_tier_1 = function(data,talent_t1_level) {

				// console.log(data)
 			
	            this.talent_t1_hp 				= parseFloat(data["0"].TALENT_HP_GR 					* talent_t1_level)
	            this.talent_t1_armor 			= parseFloat(data["0"].TALENT_ARMOR_GR 					* talent_t1_level) 
	            this.talent_t1_magic_res 		= parseFloat(data["0"].TALENT_MAGIC_ARMOR_GR 			* talent_t1_level) 
	            this.talent_t1_mana 			= parseFloat(data["0"].TALENT_MANA_GR 					* talent_t1_level)  
	            this.talent_t1_mana_regen 		= parseFloat(data["0"].TALENT_MANA_REGEN_GR 			* talent_t1_level) 
	            this.talent_t1_physical_attack 	= parseFloat(data["0"].TALENT_PHYSICAL_ATTACK_GR 		* talent_t1_level) 
	            this.talent_t1_dmg_to_monster 	= parseFloat(data["0"].TALENT_DMG_TO_MONSTER_GR 		* talent_t1_level) 
	            this.talent_t1_lifesteal 		= parseFloat(data["0"].TALENT_LIFESTEAL_GR 				* talent_t1_level)
	            this.talent_t1_cd_reduction 	= parseFloat(data["0"].TALENT_CD_REDUCTION_GR 			* talent_t1_level)
	            this.talent_t1_move_speed_per 	= parseFloat(data["0"].TALENT_MOVE_SPEED_PER_GR 		* talent_t1_level)
	            this.talent_t1_magic_power 		= parseFloat(data["0"].TALENT_MAGIC_POWER_GR 			* talent_t1_level)
	            this.talent_t1_crit_chance 		= parseFloat(data["0"].TALENT_CRIT_CHANCE_GR 			* talent_t1_level)


		}

		champion.prototype.add_talent_tier_2 = function(data,talent_t2_level) {	

	            this.talent_t2_crit_dmg 		= parseFloat(data["0"].TALENT_CRIT_DMG_GR 				* talent_t2_level)
	            this.talent_t2_cd_reduction 	= parseFloat(data["0"].TALENT_CD_REDUCTION_GR 			* talent_t2_level)
	            this.talent_t2_attack_speed 	= parseFloat(data["0"].TALENT_ATTACK_SPEED_GR 			* talent_t2_level)
	            this.talent_t2_healing_effects 	= parseFloat(data["0"].TALENT_HEALING_EFFECT_GR 		* talent_t2_level)
	            this.talent_t2_physical_pen_fix = parseFloat(data["0"].TALENT_PHYSICAL_PEN_FLAT_GR 		* talent_t2_level)
	            this.talent_t2_magic_pen_fix 	= parseFloat(data["0"].TALENT_MAGIC_PEN_FLAT_GR 		* talent_t2_level)
	            this.talent_t2_mana_regen 		= parseFloat(data["0"].TALENT_MANA_REGEN_GR 			* talent_t2_level)
	            this.talent_t2_hp_regen 		= parseFloat(data["0"].TALENT_HP_REGEN_GR 				* talent_t2_level)
	            this.talent_t2_hp 				= parseFloat(data["0"].TALENT_HP_GR 					* talent_t2_level)
	            this.talent_t2_spell_vamp 		= parseFloat(data["0"].TALENT_SPELL_VAMP_GR 			* talent_t2_level)
	            this.talent_t2_crit_chance 		= parseFloat(data["0"].TALENT_CRIT_CHANCE_GR 			* talent_t2_level)
	            this.talent_t2_battle_spell_cd	= parseFloat(data["0"].TALENT_BATTLE_SPELL_CDR_GR 		* talent_t2_level)
	            this.talent_t2_armor_per 		= parseFloat(data["0"].TALENT_ARMOR_PER_GR 				* talent_t2_level)
	            this.talent_t2_magic_res_per 	= parseFloat(data["0"].TALENT_MAGIC_ARMOR_PER_GR 		* talent_t2_level)
	            this.talent_t2_physical_attack 	= parseFloat(data["0"].TALENT_PHYSICAL_ATTACK_GR 		* talent_t2_level)
	            this.talent_t2_magic_power_per 	= parseFloat(data["0"].TALENT_MAGIC_POWER_PER_GR 		* talent_t2_level)


		}

		champion.prototype.add_talent_tier_3 = function(argument) {
		}

		champion.prototype.add_skin = function(skin_attributes) {

			  this.skin_physical_attack  		= 0
			  this.skin_hp						= 0 
			  this.skin_magic_power 		    = 0

			   switch(skin_attributes) {

                case 'SKIN_HP':
                     this.skin_hp 			    = 100
                  break;

                case 'SKIN_PHYSICAL_ATTACK':
                     this.skin_physical_attack  = 8
                  break;

                case 'SKIN_MAGICAL_ATTACK':
                     this.skin_magic_power      = 8
                  break;

                default:	

                	 this.skin_physical_attack  = 0

            }	 		   
			   
		}

		champion.prototype.get_skill_damage_cd_mana = function(data,lvl,id,pos) {

			var base_magic_gr 			= data[pos].SKILL_BASE_MAGIC_DAMAGE_GR 		* lvl
			var base_physical_attack_gr = data[pos].SKILL_BASE_PHYSICAL_ATTACK_GR 	* lvl
			var t_phy_dmg 				= 0
			var t_mgc_dmg 				= 0
			var e_phy_dmg 				= 0
			var e_mgc_dmg 				= 0
			var base_cd   				= data[pos].SKILL_BASE_COOLDOWN
			var cd_rate   				= data[pos].SKILL_COOLDOWN_RATE 			* lvl
			var base_mana  				= data[pos].SKILL_BASE_MANA_COST
			var mana_rate   			= data[pos].SKILL_MANA_COST_RATE 			* lvl
			var t_cd                    = this.getTotal_cd_reduction()

			if(t_cd > 40 ) { t_cd = 40 }

			var new_cd                  = f(f(base_cd - cd_rate) * f(t_cd/100))

			if(data[pos].SKILL_BASE_MAGIC_DAMAGE >  0 ) {

					t_mgc_dmg = f(f(data[pos].SKILL_BASE_MAGIC_DAMAGE)    + f(f(this.getTotal_magic_power())     		* f(data[pos].SKILL_TOTAL_PHYSICAL_MAGICAL_ATTACK))) 

					e_mgc_dmg = f(f(data[pos].SKILL_BASE_MAGIC_DAMAGE)    + f(f(this.getTotal_extra_magic_power())     	* f(data[pos].SKILL_EXTRA_PHYSICAL_MAGICAL_ATTACK))) 

				} else {

					t_phy_dmg = f(f(data[pos].SKILL_BASE_PHYSICAL_DAMAGE) + f(f(this.getTotal_physical_attack()) 		* f(data[pos].SKILL_TOTAL_PHYSICAL_MAGICAL_ATTACK))) 

					e_phy_dmg = f(f(data[pos].SKILL_BASE_PHYSICAL_DAMAGE) + f(f(this.getTotal_extra_physical_attack()) 	* f(data[pos].SKILL_EXTRA_PHYSICAL_MAGICAL_ATTACK))) 
				}

				      renderInfo('skill_cooldown_' 	+ id, 'Cooldown:' 	+ ' ' + f(f(base_cd - cd_rate) - new_cd))
					  renderInfo('skill_mana_' 		+ id, 'Mana:' 		+ ' ' + f(f(base_mana) + f(mana_rate)))

			switch (true) {

				case data[pos].SKILL_PARENT == 99: 
					break;
				default:

					var stringBuilder = [];

					if((f(t_phy_dmg) - f(data[pos].SKILL_BASE_PHYSICAL_DAMAGE)) > 0 ) {

						var final_damages = calculateFinalDamage(t_phy_dmg,base_physical_attack_gr,global_enemy_armor,this.getTotal_physical_pen(),this.getTotal_physical_pen_per())
						var total_damage = f(t_phy_dmg + base_physical_attack_gr).toFixed(2)
						var bonus_damage = f(f(data[pos].SKILL_BASE_PHYSICAL_DAMAGE) + f(base_physical_attack_gr)).toFixed(2)
						var added_attack = f(this.getTotal_physical_attack() * data[pos].SKILL_TOTAL_PHYSICAL_MAGICAL_ATTACK).toFixed(2)

						stringBuilder.push(
							`<center>DEALS  <b class="green">${total_damage} <span class="dmg_info">(${bonus_damage} + ${added_attack } TPA )</span></b> BASE DAMAGE</center>`,
							'<hr>',
							`<center>DEALS <span class="dmg_info">${final_damages}</span> TO THE ENEMY</center>`
						)

						renderInfo('skill_info_' + id, stringBuilder.join(""))

					} else

					if((f(e_phy_dmg) - f(data[pos].SKILL_BASE_PHYSICAL_DAMAGE)) > 0 ) {
						
						var final_damages = calculateFinalDamage(e_phy_dmg,base_physical_attack_gr,global_enemy_armor,this.getTotal_physical_pen(),this.getTotal_physical_pen_per())
						var total_damage = f(e_phy_dmg + base_physical_attack_gr).toFixed(2)
						var bonus_damage = f(f(data[pos].SKILL_BASE_PHYSICAL_DAMAGE) + f(base_physical_attack_gr)).toFixed(2)
						var added_attack = f(this.getTotal_extra_physical_attack() * data[pos].SKILL_EXTRA_PHYSICAL_MAGICAL_ATTACK).toFixed(2)

						stringBuilder.push(
							`<center>DEALS  <b class="green">${total_damage} <span class="dmg_info">(${bonus_damage} + ${added_attack } EPA )</span></b> BASE DAMAGE</center>`,
							'<hr>',
							`<center>DEALS <span class="dmg_info">${final_damages}</span> TO THE ENEMY</center>`						)

						renderInfo('skill_info_' + id, stringBuilder.join(""))

					}  else

					if((f(t_mgc_dmg) - f(data[pos].SKILL_BASE_MAGIC_DAMAGE))    > 0 ) {

						var final_damages = calculateFinalDamage(t_mgc_dmg,base_magic_gr,global_enemy_magic_res,this.getTotal_magic_pen_fix(),this.getTotal_magic_pen_per())
						var total_damage = f(t_mgc_dmg + base_magic_gr).toFixed(2)
						var bonus_damage = f(f(data[pos].SKILL_BASE_MAGIC_DAMAGE) + f(base_magic_gr)).toFixed(2)
						var added_attack = (this.getTotal_magic_power() * data[pos].SKILL_TOTAL_PHYSICAL_MAGICAL_ATTACK).toFixed(2)
		
						stringBuilder.push(
							`<center>DEALS  <b class="green">${total_damage} <span class="dmg_info">(${bonus_damage} + ${added_attack } TMA )</span></b> BASE DAMAGE</center>`,
							'<hr>',
							`<center>DEALS <span class="dmg_info">${final_damages}</span> TO THE ENEMY</center>`						)
		
						renderInfo('skill_info_' + id, stringBuilder.join(""))

					} else 

					if((f(e_mgc_dmg) - f(data[pos].SKILL_BASE_MAGIC_DAMAGE))    > 0 ) {

						var final_damages = calculateFinalDamage(e_mgc_dmg,base_magic_gr,global_enemy_magic_res,this.getTotal_magic_pen_fix(),this.getTotal_magic_pen_per())
						var total_damage = f(e_mgc_dmg + base_magic_gr).toFixed(2)
						var bonus_damage = f(f(data[pos].SKILL_BASE_MAGIC_DAMAGE) + f(base_magic_gr)).toFixed(2)
						var added_attack = (this.getTotal_extra_magic_power() * data[pos].SKILL_EXTRA_PHYSICAL_MAGICAL_ATTACK).toFixed(2)
		
						stringBuilder.push(
							`<center>DEALS  <b class="green">${total_damage} <span class="dmg_info">(${bonus_damage} + ${added_attack } EMA )</span></b> BASE DAMAGE</center>`,
							'<hr>',
							`<center>DEALS <span class="dmg_info">${final_damages}</span> TO THE ENEMY</center>`						)
		
						renderInfo('skill_info_' + id, stringBuilder.join(""))

					} else 

					{
						renderInfo('skill_info_' + id,'<center> NO INFO  </center>')
					}				

					break;
			}
		}

		champion.prototype.skill_passive = function(data) {

			var info = 0
			var passiveBuider = [];

			switch (data['0'].SKILL_PARENT) {

				case "1": //AKAI

					info = f(f(this.getTotal_hp()) * f(0.06)).toFixed(2)

					passiveBuider.push(
						`<center>BLOCK <b class="green">${info}</b> DAMAGE IN TOTAL</center>`
					)

					renderInfo('skill_info_1',passiveBuider.join(""))

					break;

				case "3": //ALPHA

					info = f(f(this.getTotal_physical_attack()) * f(1.8) + 150).toFixed(2)

					passiveBuider.push(
						`<center>DEALS <b class="green">${info}</b> <span class="dmg_info"><b>(150 + ${f(info-150)} TPA)</b></span> TRUE DAMAGE IN TOTAL</center>`
					)
					
					renderInfo('skill_info_1',passiveBuider.join(""))

					break;

				case "84": //KHUFRA

					info = f(f(this.getTotal_physical_attack()) * f(1.2)).toFixed(2)
					max_hp = f(f(this.getTotal_hp()) * f(0.08)).toFixed(2)
					base_damage  = (f(info) + f(max_hp))

					passiveBuider.push(
						`<center>DEALS <span class="dmg_info">${base_damage}</span> MAGIC DAMAGE</center>`,
						`<br>`,
						`<center>RESTORE <span class="dmg_info">${max_hp}</span> HP</center>`
					)

					renderInfo('skill_info_1',passiveBuider.join(""))

					break;
				
				case "83": //DYROTH

					info = f(f(this.getTotal_physical_attack()) * f(1.4)).toFixed(2)

					passiveBuider.push(
						`<center>DEAL <span class="dmg_info">${info}</span> PHYSICAL DAMAGE</center>`,
						`<br>`,
						`<center>REGENERATE <span class="dmg_info">${info}</span> HP</center>`
					)

					renderInfo('skill_info_1',passiveBuider.join(""))

					break;

				case "79": //TERIZLA
					
					info = this.getTotal_physical_attack()
					hp_drop = (f(f(this.getTotal_hp()) * f(0.2))).toFixed(2)

					passiveBuider.push(
						`<center>INCREASE PHYSICAL ATTACK TO <span class="dmg_info">${info}</span> FROM ATTACK SPEED ITEM</center>`,
						`<br>`,
						`<center>GAIN <span class="dmg_info">40%</span> DAMAGE REDUCTION WHEN HP DROP TO  <span class="dmg_info">${hp_drop}</span></center>`
					)

					renderInfo('skill_info_1',passiveBuider.join(""))

				break;

				// case "": //

				// 	passiveBuider.push()

				// 	renderInfo('skill_info_1',passiveBuider.join(""))

				// break;

				default:
					renderInfo('skill_info_1','<center><small> PLEASE READ SKILL DESCRIPTION</small> </center>')
					break;
			}

		}

		champion.prototype.skill_level_1 = function(data,lvl) {

			this.get_skill_damage_cd_mana(data,lvl,2,1)
		}

		champion.prototype.skill_level_2 = function(data,lvl) {

			this.get_skill_damage_cd_mana(data,lvl,3,2)
		}

		champion.prototype.skill_level_ultimate = function(data,lvl) {

			if(lvl > 3) {lvl = 3}

			this.get_skill_damage_cd_mana(data,lvl,4,3)
		}

		champion.prototype.extra_skill_level_1 	= function(data,lvl) {

			this.get_skill_damage_cd_mana(data,lvl,5,4)
		
		}

		champion.prototype.extra_skill_level_2 	= function(data,lvl) {

			this.get_skill_damage_cd_mana(data,lvl,6,5)
		}

		champion.prototype.extra_skill_level_ultimate = function(data,lvl) {

			if(lvl > 3) {lvl = 3}

			this.get_skill_damage_cd_mana(data,lvl,7,6)

		}

		champion.prototype.final_champion_status = function() {

			
			global_hero_mgc_pen_fix = 0
			global_hero_mgc_pen_per = 0
			global_hero_phy_pen_per = 0
			global_hero_phy_pen_fix = 0

			if(this.item_total_cost > 0 ) {

				$('#item_total_cost').html(" " + this.item_total_cost + " $ ")

			} else {

				$('#item_total_cost').html("0")
			}

			
			//*********************************************************************************************** */

			this.setTotal_physical_attack(f(f(this.base_physical_attack) + f(this.level_added_physical_attack) + f(this.item_physical_attack) + f(this.potion_physical_attack) + f(this.emblem_attack) + f(this.talent_t1_physical_attack) + f(this.talent_t2_physical_attack) + f(this.skin_physical_attack)).toFixed(2))
			this.setTotal_extra_physical_attack(f(f(this.item_physical_attack) + f(this.potion_physical_attack) + f(this.emblem_attack) + f(this.talent_t1_physical_attack) + f(this.talent_t2_physical_attack) + f(this.skin_physical_attack)).toFixed(2))
			this.setTotal_level_physical_attack(f(f(this.base_physical_attack) + f(this.level_added_physical_attack)).toFixed(2))

			if(this.getMod_bravery() > 0) {

				this.setTotal_extra_physical_attack(f(f(this.getTotal_extra_physical_attack()) + f(this.getTotal_physical_attack() * f(0.10))))
				this.setTotal_physical_attack(f(f(this.getTotal_physical_attack()) + f(this.getTotal_physical_attack() * f(0.10))))

			}

			if(this.item_physical_attack > 0 ) {

				$('#item_added_attack').html(" " + this.item_physical_attack + " ")

			}  else {

				$('#item_added_attack').html("0")
			}

			

			//*********************************************************************************************** */

			
			//NEED TO FIX MAGIC POWER PER FROM TALENT T2	
			//BIT OFF BY 7 ~ 9 POINTS 
				
			this.setTotal_magic_power(f(f(this.base_magic_power) + f(this.item_magic_power) + f(this.potion_magic_power) + f(this.emblem_magic_power) + f(this.talent_t1_magic_power) + f(this.talent_t2_magic_power_per) + f(this.skin_magic_power)).toFixed(2))		
			this.setTotal_extra_magic_power(f(f(this.item_magic_power) + f(this.potion_magic_power) + f(this.emblem_magic_power) + f(this.talent_t1_magic_power) + f(this.talent_t2_magic_power_per) + f(this.skin_magic_power)).toFixed(2))
			this.setTotal_level_magic_power(f(f(this.base_magic_power)).toFixed(2))

			var mystery = 0;

			if(this.getMod_mystery() > 0) {

				if(this.level == null) {
										
					this.setTotal_magic_power(f(f(this.getTotal_magic_power()) + f(f(this.getTotal_magic_power()) * f(f(f(21) + f(1))))/100))
					this.setTotal_extra_magic_power(f(this.getTotal_magic_power()).toFixed(2))

				} else {
					
					this.setTotal_magic_power(f(f(this.getTotal_magic_power()) + f(f(this.getTotal_magic_power()) * f(f(f(21) + f(this.level))))/100))
					this.setTotal_extra_magic_power(f(this.getTotal_magic_power()).toFixed(2))
				}

			}

			
			if(this.getMod_bravery() > 0) {
				
				mystery = f(f(f(this.getTotal_magic_power()) * f(f(f(21) + f(this.level))))/100)

				// console.log(this.getTotal_magic_power())
				this.setTotal_magic_power(f(f(this.getTotal_magic_power()) + f(f(this.getTotal_magic_power() - f(mystery)) * f(0.10))))
				this.setTotal_extra_magic_power(f(f(this.getTotal_extra_magic_power()) + f(f(this.getTotal_extra_magic_power() - f(mystery)) * f(0.10))))
				
			}


			if(this.item_magic_power > 0 ) {

				$('#item_added_magic_power').html(" " + this.item_magic_power + "   ")

			} else {

				$('#item_added_magic_power').html("0")
			}

			//*********************************************************************************************** */

			this.setTotal_hp(f(f(this.base_hp) + f(this.level_added_hp) + f(this.item_hp) + f(this.potion_hp) + f(this.emblem_hp) + f(this.talent_t1_hp) + f(this.talent_t2_hp) + f(this.skin_hp)).toFixed(2))				
			this.setTotal_extra_hp(f(f(this.item_hp) + f(this.potion_hp) + f(this.emblem_hp) + f(this.talent_t1_hp) + f(this.talent_t2_hp) + f(this.skin_hp)).toFixed(2))
			this.setTotal_level_hp(f(f(this.base_hp) + f(this.level_added_hp)).toFixed(2))

			if(this.getMod_nirvana() > 0) {

				this.setTotal_extra_hp(f(f(this.getTotal_extra_hp()) + f(f(this.getTotal_magic_power()) * f(this.getMod_nirvana()))))
				this.setTotal_hp(f(f(this.getTotal_hp()) + f(f(this.getTotal_magic_power()) * f(this.getMod_nirvana()))))
				
			}


			if(this.item_hp > 0 ) {

				$('#item_added_hp').html(" " + this.item_hp + " ")

			}  else {

				$('#item_added_hp').html("0")
			}

			//*********************************************************************************************** */

			this.setTotal_mana(f(f(this.base_mana) + f(this.level_added_mana) + f(this.item_mana) + f(this.emblem_mana) + f(this.talent_t1_mana)).toFixed(2))
			this.setTotal_extra_mana(f(this.item_mana + f(this.emblem_mana) + f(this.talent_t1_mana)).toFixed(2))
			this.setTotal_level_mana(f(f(this.base_mana) + f(this.level_added_mana)).toFixed(2))

			if(this.item_mana > 0 ) {

				$('#item_added_mana').html(" " + this.item_mana + "  ")

			} else {

				$('#item_added_mana').html("0")
			}

			//*********************************************************************************************** */

			//NEED TO FIX ARMOR PER FROM TALENT T2		

			var armor_per   = f(this.talent_t2_armor_per/100)
			var armor_fix   = 0

			this.setTotal_extra_armor(f(f(this.item_armor) + f(this.emblem_armor) + f(this.talent_t1_armor) + f(armor_per)).toFixed(5))
			this.setTotal_level_armor(f(f(this.base_armor) + f(this.level_added_armor)).toFixed(5))
			this.setTotal_armor(f(f(this.base_armor) + f(this.level_added_armor) + f(this.item_armor) + f(this.emblem_armor) + f(this.talent_t1_armor)).toFixed(2))

			armor_fix      = f(this.getTotal_armor() * armor_per)
			this.setTotal_armor(f(this.getTotal_armor()) + f(armor_fix))

			if(this.item_armor > 0 ) {

				$('#item_added_armor').html(" " + this.item_armor + "   ")

			} else {

				$('#item_added_armor').html("0")
			}

			//*********************************************************************************************** */

			//NEED TO FIX MAGIC ARMOR PER FROM TALENT T2

			var mres_per   = f(this.talent_t2_magic_res_per/100)
			var mres_fix   = 0

			this.setTotal_extra_magic_armor(f(f(this.item_magic_res) + f(this.emblem_magic_res) + f(this.talent_t1_magic_res) + f(mres_per)).toFixed(5))
			this.setTotal_level_magic_armor(f(f(this.base_magic_res) + f(this.level_added_magic_res)).toFixed(5))
			this.setTotal_magic_armor(f(f(this.base_magic_res) + f(this.level_added_magic_res) + f(this.item_magic_res) + f(this.emblem_magic_res) + f(this.talent_t1_magic_res)).toFixed(2))

			mres_fix      = f(this.getTotal_magic_armor() * mres_per)
			this.setTotal_magic_armor(f(this.getTotal_magic_armor()) + f(mres_fix))

			if(this.item_magic_res > 0 ) {

				$('#item_added_magic_res').html(" " + this.item_magic_res + "   ")

			} else {

				$('#item_added_magic_res').html("0")
			}
			
			//*********************************************************************************************** */

			//HP/MANA REGEN FROM TALENT 2 IS CALLED HYBRID REGEN
			this.setTotal_hp_regen(f(f(this.base_hp_regen) + f(this.level_added_hp_regen) + f(this.item_hp_regen) + f(this.emblem_hp_regen) +  f(this.talent_t2_hp_regen)).toFixed(2))
			this.setTotal_extra_hp_regen(f(f(this.item_hp_regen) + f(this.emblem_hp_regen) + f(this.talent_t2_hp_regen)).toFixed(2))
			this.setTotal_level_hp_regen(f(f(this.base_hp_regen) + f(this.level_added_hp_regen)).toFixed(2))

			if(this.item_hp_regen > 0 ) {

				$('#item_added_hp_regen').html(" " + this.item_hp_regen + "  ")

			} else {

				$('#item_added_hp_regen').html("0")
			}

			//*********************************************************************************************** */

			//HP/MANA REGEN FROM TALENT 2 IS CALLED HYBRID REGEN
			this.setTotal_mana_regen(f(f(this.base_mana_regen) + f(this.level_added_mana_regen) + f(this.item_mana_regen) + f(this.emblem_mana_regen) +  f(this.talent_t1_mana_regen)).toFixed(2))
			this.setTotal_extra_mana_regen(f(f(this.item_mana_regen) + f(this.emblem_mana_regen) + f(this.talent_t1_mana_regen)).toFixed(2))
			this.setTotal_level_mana_regen(f(f(this.base_mana_regen) + f(this.level_added_mana_regen)).toFixed(2))

			if(this.item_mana_regen > 0 ) {

				$('#item_added_mana_regen').html(" " + this.item_mana_regen + "   ")

			} else {

				$('#item_added_mana_regen').html("0")
			}

			//*********************************************************************************************** */

			//NEES TO RECHECK THIS for EMBLEM/TALENT


			this.setTotal_extra_attack_speed(f(this.emblem_atk_speed_per/100) + f(this.item_atk_speed_per/100) + f(this.talent_t2_attack_speed/100))
			this.setTotal_level_attack_speed(f(f(this.base_attack_speed/100 ) + f(this.level_added_attack_speed/1000)).toFixed(2))
						
			if(this.id == '79') { //TERIZLA

				this.setTotal_physical_attack((f(f(this.getTotal_physical_attack()) + f(this.getTotal_extra_attack_speed()) * f(100))))
				this.setTotal_extra_attack_speed(0)
			}

			var bal_atk_speed = (this.getTotal_extra_attack_speed() * 0.20);
			
			this.setTotal_extra_attack_speed(f(this.getTotal_extra_attack_speed() - bal_atk_speed));
			this.setTotal_attack_speed(f(this.getTotal_level_attack_speed()) + f(this.getTotal_extra_attack_speed()))

			if(this.item_atk_speed_per > 0 ) {

				$('#item_added_atk_speed_per').html(" " + f(this.item_atk_speed_per /100).toFixed(2) + " %   ")

			} else {

				$('#item_added_atk_speed_per').html("0")

			}

			if(this.item_atk_speed_fix > 0 ) {

				$('#item_added_atk_speed_fix').html(" " + this.item_atk_speed_fix + "   ")

			} else {

				$('#item_added_atk_speed_fix').html("0")

			}

			//*********************************************************************************************** */

			//LIFESTEAL
			this.setTotal_lifesteal(f(f(this.base_lifesteal) + f(this.item_lifesteal) + f(this.potion_lifesteal) + f(this.emblem_lifesteal) + f(this.talent_t1_lifesteal)).toFixed(2))
			this.setTotal_extra_lifesteal(f(f(this.item_lifesteal) + f(this.potion_lifesteal) + f(this.emblem_lifesteal) + f(this.talent_t1_lifesteal)).toFixed(2))
			this.setTotal_level_lifesteal(f(f(this.base_lifesteal)).toFixed(2))

			if(this.item_lifesteal > 0 ) {

				$('#item_added_lifesteal').html(" " + this.item_lifesteal + " %  ")

			} else {

				$('#item_added_lifesteal').html("0")
			}

			//*********************************************************************************************** */

			this.setTotal_spell_vamp(f(f(this.base_spell_vamp) + f(this.item_spell_vamp) + f(this.emblem_spell_vamp) + f(this.talent_t2_spell_vamp)).toFixed(2))
			this.setTotal_extra_spell_vamp(f(f(this.item_spell_vamp) + f(this.emblem_spell_vamp)  + f(this.talent_t2_spell_vamp)).toFixed(2))
			this.setTotal_level_spell_vamp(f(f(this.base_spell_vamp)).toFixed(2))

			if(this.item_spell_vamp > 0 ) {

				$('#item_added_spell_vamp').html(" " + this.item_spell_vamp + " %   ")

			} else {

				$('#item_added_spell_vamp').html("0")
			}

			//*********************************************************************************************** */

			this.setTotal_magic_pen_fix(f(f(this.base_magic_pen_fix) + f(this.item_magic_pen_fix) + f(this.emblem_magic_pen_fix) + f(this.talent_t2_magic_pen_fix)).toFixed(2))
			this.setTotal_extra_magic_pen_fix(f(f(this.item_magic_pen_fix) +  f(this.emblem_magic_pen_fix) + f(this.talent_t2_magic_pen_fix)).toFixed(2))
			this.setTotal_level_magic_pen_fix(f(f(this.base_magic_pen_fix)).toFixed(2))

			if(this.item_magic_pen_fix > 0 ) {

				$('#item_added_magic_pen_fix').html(" " + this.item_magic_pen_fix + "  ")

			} else {

				$('#item_added_magic_pen_fix').html("0")
			}

			//NEED TO FIX MOVESPEED BY PER FROM EMBLEM/ITEM//TALENT			

			
			this.setTotal_level_move_speed(f(f(this.base_move_speed)).toFixed(2))

			var total_move_speed_per 	=  f(f(this.item_move_speed_per/100) + f(this.emblem_move_speed_per/100) + f(this.talent_t1_move_speed_per/100))
			var move_speed_per_to_fix   =  f(this.getTotal_move_speed() * total_move_speed_per)

			// console.log(this.getTotal_move_speed());
			// console.log(move_speed_per_to_fix);

			this.setTotal_extra_move_speed(f(f(this.item_move_speed_fix	+ move_speed_per_to_fix )).toFixed(2))
			this.setTotal_move_speed(f(f(this.base_move_speed) + f(this.item_move_speed_fix	 + move_speed_per_to_fix )).toFixed(2))


			if(this.item_move_speed_per > 0 ) {

				$('#item_added_move_speed_per').html(" " + this.item_move_speed_per + " %  ")

			} else {

				$('#item_added_move_speed_per').html("0")
			}

			if(this.item_move_speed_fix > 0 ) {

				$('#item_added_move_speed_fix').html(" " + this.item_move_speed_fix + "   ")

			} else {

				$('#item_added_move_speed_fix').html("0")
			}

			this.setTotal_cd_reduction(f(f(this.base_cd_reduction) + f(this.item_cd_reduction) + f(this.potion_cd_reduction) + f(this.emblem_cd_reduction) + f(this.talent_t1_cd_reduction) + f(this.talent_t2_cd_reduction)).toFixed(2))
			this.setTotal_extra_cd_reduction(f(f(this.item_cd_reduction) + f(this.potion_cd_reduction) + f(this.emblem_cd_reduction) + f(this.talent_t1_cd_reduction) + f(this.talent_t2_cd_reduction)).toFixed(2))
			this.setTotal_level_cd_reduction(f(f(this.base_cd_reduction)).toFixed(2))


			if(this.item_cd_reduction > 0 ) {

				if(this.item_cd_reduction >= 40 ) {

					$('#item_added_cd_reduction').html("<span style='color:red'>40</span>")

				} else {

					$('#item_added_cd_reduction').html(" " + this.item_cd_reduction + " %  ")
				}

			} else {

				$('#item_added_cd_reduction').html("0")
			}


			this.setTotal_crit_chance(f(f(this.base_crit_chance) + f(this.item_crit_chance) + f(this.emblem_crit_chance) + f(this.talent_t1_crit_chance) + f(this.talent_t2_crit_chance)).toFixed(2))
			this.setTotal_extra_crit_chance(f(f(this.item_crit_chance) + f(this.emblem_crit_chance) + f(this.talent_t1_crit_chance) + f(this.talent_t2_crit_chance)).toFixed(2))
			this.setTotal_level_crit_chance(f(f(this.base_crit_chance)).toFixed(2))


			if(this.item_crit_chance > 0 ) {

				$('#item_added_crit_chance').html(" " + this.item_crit_chance + " %   ")

			} else {

				$('#item_added_crit_chance').html("0")
			}

			// this.setTotal_crit_reduction(f(f(this.base_crit_reduction) + f(this.item_crit_reduction)).toFixed(2))
			this.setTotal_extra_crit_reduction(f(f(this.item_crit_reduction)).toFixed(2))
			// this.setTotal_level_crit_reduction(f(f(this.base_crit_reduction)).toFixed(2))

			if(this.item_crit_reduction > 0 ) {

				$('#item_added_crit_reduction').html(" " + this.item_crit_reduction + " %   ")

			} else {

				$('#item_added_crit_reduction').html("0")
			}

			this.setTotal_extra_resilience(f(f(this.item_resilience) + f(this.potion_resilience)).toFixed(2))

			if(this.item_resilience > 0 ) {

				$('#item_added_resilience').html(" " + this.item_resilience + "  ")

			} else {

				$('#item_added_resilience').html("0")
			}


			this.setTotal_extra_physical_pen(f(this.emblem_physical_pen_fix + this.talent_t2_physical_pen_fix))

			this.setTotal_dmg_to_monster(f(this.talent_t1_dmg_to_monster))

			this.setTotal_battle_spell_cd(f(this.talent_t2_battle_spell_cd))

			this.setTotal_healing_effects(f(this.talent_t2_healing_effects))

			this.setTotal_crit_damage(f(this.talent_t2_crit_dmg))

			this.setTotal_physical_pen_per(f(this.item_physical_pen_per))

			this.setTotal_magic_pen_per(f(this.item_magic_pen_per))


			global_hero_mgc_pen_fix = this.getTotal_magic_pen_fix()
			global_hero_mgc_pen_per = this.getTotal_magic_pen_per()
			global_hero_phy_pen_fix = this.getTotal_physical_pen()
			global_hero_phy_pen_per = this.getTotal_physical_pen_per()

		}

	  champion.prototype.final_enemy_status = function (){

		//reset 

		global_enemy_hp = 0
		global_enemy_base_hp = 0
		global_enemy_armor = 0
		global_enemy_magic_res = 0

			  
			this.setTotal_hp(f(f(this.item_hp) + f(this.level_added_hp)))
			this.setTotal_armor(f(f(this.item_armor) + f(this.level_added_armor)))
			this.setTotal_magic_armor(f(f(this.item_magic_res) + f(this.level_added_magic_res)))


			this.setTotal_hp(f(f(this.level_added_hp) + f(this.base_hp) + f(this.item_hp)))
			this.setTotal_armor(f(f(this.level_added_armor) + f(this.base_armor) + f(this.item_armor)))
			this.setTotal_magic_armor(f(f(this.level_added_magic_res) + f(this.base_magic_res) + f(this.item_magic_res)))

			
			$('#total_enemy_hp').html(fd(this.getTotal_hp()))
			$('#added_enemy_hp').html(fd(this.item_hp))
			$('#level_enemy_hp').html(fd(f(f(this.level_added_hp) + f(this.base_hp))))

			// log(f(f(this.level_added_hp) + f(this.base_hp)))

			$('#total_enemy_armor').html(fd(this.getTotal_armor()))
			$('#added_enemy_armor').html(fd(this.item_armor))
			$('#level_enemy_armor').html(fd(f(this.level_added_armor) + f(this.base_armor)))

			// log(f(f(this.level_added_armor) + f(this.base_armor)))

			$('#total_enemy_magic_res').html(fd(this.getTotal_magic_armor()))
			$('#added_enemy_magic_res').html(fd(this.item_magic_res))
			$('#level_enemy_magic_res').html(fd(f(f(this.level_added_magic_res) + f(this.base_magic_res))))

			// log(f(f(this.level_added_magic_res) + f(this.base_magic_res)))

			//reassign

			if($('#disable_item').is(":checked")) {
				
				global_enemy_hp = $('#custom_hp').val()
				global_enemy_armor = $('#custom_armor').val()
				global_enemy_magic_res = $('#custom_magic_res').val()


			} else {

				global_enemy_hp = this.getTotal_hp()
				global_enemy_base_hp = fd(f(this.base_hp) + f(this.level_added_hp))
				global_enemy_armor = this.getTotal_armor()
				global_enemy_magic_res = this.getTotal_magic_armor()

			}

			calculateFinalReduction(this.getTotal_armor(),global_hero_phy_pen_fix,global_hero_phy_pen_per)
			
	   }

		var hero_id 		= $('input[name=hero_id]').val(); 
		var data 			= get_hero_data(hero_url,hero_id) 				
		var level 			= 0
		var skill_1_level   = 0
		var potion          = get_hero_data(potion_url,95)
		var skill           = get_hero_data(skill_url,hero_id)
		var hero_7_skill    = new Array(64,34,38,51)
		var hero_5_skill    = new Array(999,60)
		var s7 				= hero_7_skill.includes(parseInt(hero_id))
		var s5 				= hero_5_skill.includes(parseInt(hero_id))

		//ENEMY SECTION

		var enemy_id 		= $('input[name=enemy_id]').val(); 
		var enemy_data 		= get_hero_data(hero_url,enemy_id) 
		var enemy_level 	= 0

		var hero   = new champion(data)
		var enemy  = new champion(enemy_data)

	   $('#calculate_float,#stats,#skill,#enemy,#passive').on('click', function () {
	       $('body').loading({
              stoppable: true,
              message: ' calculating...',
              theme: 'dark'
			})
			
			setTimeout(function(){ up() },900);
			setTimeout(function(){ up() },1000);
            
	   });
	   
	   $('#enemy').on('click',function(){

			slot1 = false
			slot2 = false
			slot3 = false
			slot4 = false
			slot5 = false
			slot6 = false
	   })
        
      
	hero.add_potion(potion)
	hero.add_skin('NO_SKIN')

		
		








	  
		


		
		
