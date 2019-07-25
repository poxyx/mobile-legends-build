function Champion(hp, mana, armor, hp_regen, mana_regen, mag_armor, move_speed, atk_speed, attack)
{

    //base stats
    this.hp = hp
    this.mana = mana
    this.armor = armor
    this.physical_pen = 0
    this.magic_pen_per = 0
    this.magic_pen_flat = 0
    this.lifesteal = 0
    this.hp_regen = hp_regen
    this.mana_regen = mana_regen
    this.magic_power = 0
    this.magic_armor = mag_armor
    this.spell_vamp = 0
    this.move_speed_flat = move_speed
    this.move_speed_per = 0
    this.cdr = 0
    this.atk_speed = atk_speed
    this.crit_chance = 0
    this.attack = attack
    this.resilience = 0
    this.crit_reduction = 0

    //emblem stat
    this.em_hp = 0
    this.em_mana = 0
    this.em_armor = 0
    this.em_physical_pen = 0
    this.em_physical_pen_flat = 0
    this.em_magic_pen_per = 0
    this.em_magic_pen_flat = 0
    this.em_lifesteal = 0
    this.em_hp_regen = 0
    this.em_mana_regen = 0
    this.em_magic_power = 0
    this.em_magic_armor = 0
    this.em_spell_vamp = 0
    this.em_move_speed = 0
    this.em_move_speed_per = 0
    this.em_cdr = 0
    this.em_atk_speed = 0
    this.em_crit_chance = 0
    this.em_attack = 0
    this.em_level = 0

    //talent stat
    this.talent_armor = 0
    this.talent_armor_per = 0
    this.talent_attack_speed = 0
    this.talent_battle_spell = 0
    this.talent_cd_reduction = 0
    this.talent_crit_chance = 0
    this.talent_crit_dmg = 0
    this.talent_dmg_to_monster = 0
    this.talent_healing_effect = 0
    this.talent_hp = 0
    this.talent_hp_regen = 0
    this.talent_lifesteal = 0
    this.talent_magic_armor = 0
    this.talent_magic_armor_per = 0
    this.talent_magic_pen_flat = 0
    this.talent_magic_power = 0
    this.talent_magic_power_per = 0
    this.talent_mana = 0
    this.talent_mana_regen = 0
    this.talent_move_speed_per = 0
    this.talent_physical_attack = 0
    this.talent_physical_pen_flat = 0
    this.talent_spell_vamp = 0

    //limit
    this.max_cdr = 40 //%
    this.max_movespeed = 450
    this.max_atk_speed = 2.50 //%


    //hero growth
    this.atk_growth = 0
    this.hp_growth = 0
    this.mana_growth = 0
    this.mana_regen_growth = 0
    this.atk_speed_growth = 0
    this.armor_growth = 0
    this.hp_regen_growth = 0
    this.magic_armor_growth = 0

    //misc
    this.level = 0
    this.val = 0
    this.total_cost = 0

    //SETTER

    this.setHeroGrowth = function(atk, hp, mana, atk_speed, hp_regen, magic_armor, mana_regen, armor)
    {
        this.atk_growth = atk
        this.mana_growth = mana
        this.hp_growth = hp
        this.mana_regen_growth = mana_regen
        this.atk_speed_growth = atk_speed
        this.armor_growth = armor
        this.hp_regen_growth = hp_regen
        this.magic_armor_growth = magic_armor
    }

    this.setHeroLevel = function(level)
    {
        this.level = level
    }

    this.setAttackGrowth = function(attack)
    {
        return this.attack = attack
    }

    this.setHpGrowth = function(hp)
    {
        return this.hp = hp
    }

    this.setHpRegenGrowth = function(hp_regen)
    {
        return this.hp_regen = hp_regen
    }

    this.setManaGrowth = function(mana)
    {
        return this.mana = mana
    }

    this.setManaRegenGrowth = function(mana_regen)
    {
        return this.mana_regen = mana_regen
    }

    this.setArmorGrowth = function(armor)
    {
        return this.armor = armor
    }

    this.setMagicArmorGrowth = function(magic_armor)
    {
        return this.magic_armor = magic_armor
    }

    this.setAttackSpeedGrowth = function(atk_speed)
    {
        return this.atk_speed = atk_speed
    }

    this.setAttack = function(attack)
    {
        return this.attack = attack
    }

    this.setHp = function(hp)
    {
        return this.hp = hp
    }

    this.setMana = function(mana)
    {
        return this.mana = mana
    }

    this.setArmor = function(armor)
    {
        return this.armor = armor
    }

    this.setPhysicalPen = function(physical_pen)
    {
        return this.physical_pen = physical_pen
    }

    this.setMagicPenFlat = function(magic_pen_flat)
    {
        return this.magic_pen_flat = magic_pen_flat
    }

    this.setMagicPenPer = function(magic_pen_per)
    {
        return this.magic_pen_per = magic_pen_per
    }

    this.setLifesteal = function(lifesteal)
    {
        return this.lifesteal = lifesteal
    }

    this.setHpRegen = function(hp_regen)
    {
        return this.hp_regen = hp_regen
    }

    this.setManaRegen = function(mana_regen)
    {
        return this.mana_regen = mana_regen
    }

    this.setMagicPower = function(magic_power)
    {
        return this.magic_power = magic_power
    }

    this.setMagicArmor = function(magic_armor)
    {
        return this.magic_armor = magic_armor
    }

    this.setManaRegen = function(mana_regen)
    {
        return this.mana_regen = mana_regen
    }

    this.setSpellVamp = function(spell_vamp)
    {
        return this.spell_vamp = spell_vamp
    }

    this.setMoveSpeed = function(move_speed_flat)
    {
        return this.move_speed_flat = move_speed_flat
    }

    this.setCdr = function(cdr)
    {
        return this.cdr = cdr
    }

    this.setAttackSpeed = function(atk_speed)
    {
        return this.atk_speed = atk_speed
    }

    this.setCritChance = function(crit_chance)
    {
        return this.crit_chance = crit_chance
    }

    this.setResilience = function(resilience)
    {
        return this.resilience = resilience
    }

    this.setCritReduction = function(crit_reduction)
    {
        return this.crit_reduction = crit_reduction
    }

    this.setMoveSpeedPer = function(move_speed_per)
    {
        return this.move_speed_per = move_speed_per
    }

    // GETTER

    this.getHeroLevel = function()
    {
        return this.level
    }

    this.getHp = function()
    {
        return this.hp
    }

    this.getMana = function()
    {
        return this.mana
    }

    this.getArmor = function()
    {
        return this.armor
    }

    this.getPhysicalPen = function()
    {
        return this.physical_pen
    }

    this.getLifesteal = function()
    {
        return this.lifesteal
    }

    this.getHpRegen = function()
    {
        return this.hp_regen
    }

    this.getManaRegen = function()
    {
        return this.mana_regen
    }

    this.getMagicPower = function()
    {
        return this.magic_power
    }

    this.getMagicResistance = function()
    {
        return this.magic_armor
    }

    this.getMagicPenFlat = function()
    {
        return this.magic_pen_flat
    }

    this.getMagicPenPer = function()
    {
        return this.magic_pen_per
    }

    this.getSpellVamp = function()
    {
        return this.spell_vamp
    }

    this.getMoveSpeed = function()
    {
        return this.move_speed_flat
    }

    this.getCdr = function()
    {
        return this.cdr
    }

    this.getAttackSpeed = function()
    {
        return this.atk_speed
    }

    this.getCritChance = function()
    {
        return this.crit_chance
    }

    this.getAttack = function()
    {
        return this.attack
    }

    this.getMoveSpeedPer = function(added)
    {
        return this.move_speed_per
    }

    this.getHpGrowth = function()
    {
        return this.hp_growth
    }

    this.getResilience = function(added)
    {
        return this.resilience
    }

    this.getCritReduction = function(added)
    {
        return this.crit_reduction
    }

    this.getHpRegenGrowth = function()
    {
        return this.hp_regen_growth
    }

    this.getManaGrowth = function()
    {
        return this.mana_growth
    }

    this.getManaRegenGrowth = function()
    {
        return this.mana_regen_growth
    }

    this.getAttackSpeedGrowth = function()
    {
        return this.atk_speed_growth
    }

    this.getAttackGrowth = function()
    {
        return this.atk_growth
    }

    this.getArmorGrowth = function()
    {
        return this.armor_growth
    }

    this.getMagicArmorGrowth = function()
    {
        return this.magic_armor_growth
    }

    //Emblem
    this.setEm_hp = function(em_hp)
    {
        this.em_hp = em_hp;
    }
    this.getEm_hp = function()
    {
        return this.em_hp;
    }
    this.setEm_mana = function(em_mana)
    {
        this.em_mana = em_mana;
    }
    this.getEm_mana = function()
    {
        return this.em_mana;
    }
    this.setEm_armor = function(em_armor)
    {
        this.em_armor = em_armor;
    }
    this.getEm_armor = function()
    {
        return this.em_armor;
    }
    this.setEm_physical_pen = function(em_physical_pen)
    {
        this.em_physical_pen = em_physical_pen;
    }
    this.getEm_physical_pen = function()
    {
        return this.em_physical_pen;
    }
    this.setEm_physical_pen_flat = function(em_physical_pen_flat)
    {
        this.em_physical_pen_flat = em_physical_pen_flat;
    }
    this.getEm_physical_pen_flat = function()
    {
        return this.em_physical_pen_flat;
    }
    this.setEm_magic_pen_per = function(em_magic_pen_per)
    {
        this.em_magic_pen_per = em_magic_pen_per;
    }
    this.getEm_magic_pen_per = function()
    {
        return this.em_magic_pen_per;
    }
    this.setEm_magic_pen_flat = function(em_magic_pen_flat)
    {
        this.em_magic_pen_flat = em_magic_pen_flat;
    }
    this.getEm_magic_pen_flat = function()
    {
        return this.em_magic_pen_flat;
    }
    this.setEm_lifesteal = function(em_lifesteal)
    {
        this.em_lifesteal = em_lifesteal;
    }
    this.getEm_lifesteal = function()
    {
        return this.em_lifesteal;
    }
    this.setEm_hp_regen = function(em_hp_regen)
    {
        this.em_hp_regen = em_hp_regen;
    }
    this.getEm_hp_regen = function()
    {
        return this.em_hp_regen;
    }
    this.setEm_mana_regen = function(em_mana_regen)
    {
        this.em_mana_regen = em_mana_regen;
    }
    this.getEm_mana_regen = function()
    {
        return this.em_mana_regen;
    }
    this.setEm_magic_power = function(em_magic_power)
    {
        this.em_magic_power = em_magic_power;
    }
    this.getEm_magic_power = function()
    {
        return this.em_magic_power;
    }
    this.setEm_magic_armor = function(em_magic_armor)
    {
        this.em_magic_armor = em_magic_armor;
    }
    this.getEm_magic_armor = function()
    {
        return this.em_magic_armor;
    }
    this.setEm_spell_vamp = function(em_spell_vamp)
    {
        this.em_spell_vamp = em_spell_vamp;
    }
    this.getEm_spell_vamp = function()
    {
        return this.em_spell_vamp;
    }
    this.setEm_move_speed = function(em_move_speed)
    {
        this.em_move_speed = em_move_speed;
    }
    this.getEm_move_speed = function()
    {
        return this.em_move_speed;
    }
    this.setEm_move_speed_per = function(em_move_speed_per)
    {
        this.em_move_speed_per = em_move_speed_per;
    }
    this.getEm_move_speed_per = function()
    {
        return this.em_move_speed_per;
    }
    this.setEm_cdr = function(em_cdr)
    {
        this.em_cdr = em_cdr;
    }
    this.getEm_cdr = function()
    {
        return this.em_cdr;
    }
    this.setEm_atk_speed = function(em_atk_speed)
    {
        this.em_atk_speed = em_atk_speed;
    }
    this.getEm_atk_speed = function()
    {
        return this.em_atk_speed;
    }
    this.setEm_crit_chance = function(em_crit_chance)
    {
        this.em_crit_chance = em_crit_chance;
    }
    this.getEm_crit_chance = function()
    {
        return this.em_crit_chance;
    }
    this.setEm_attack = function(em_attack)
    {
        this.em_attack = em_attack;
    }
    this.getEm_attack = function()
    {
        return this.em_attack;
    }
    this.setEm_level = function(em_level)
    {
        this.em_level = em_level;
    }
    this.getEm_level = function()
    {
        return this.em_level;
    }
    this.setMax_cdr = function(max_cdr)
    {
        this.max_cdr = max_cdr;
    }
    this.getMax_cdr = function()
    {
        return this.max_cdr;
    }
    this.setMax_movespeed = function(max_movespeed)
    {
        this.max_movespeed = max_movespeed;
    }
    this.getMax_movespeed = function()
    {
        return this.max_movespeed;
    }
    this.setMax_atk_speed = function(max_atk_speed)
    {
        this.max_atk_speed = max_atk_speed;
    }
    this.getMax_atk_speed = function()
    {
        return this.max_atk_speed;
    }

    this.setTotal_cost = function(total_cost)
    {
        this.total_cost = total_cost;
    }
    this.getTotal_cost = function()
    {
        return this.total_cost;
    }
    this.setTalent_armor = function(talent_armor)
    {
        this.talent_armor = talent_armor;
    }
    this.getTalent_armor = function()
    {
        return this.talent_armor;
    }
    this.setTalent_armor_per = function(talent_armor_per)
    {
        this.talent_armor_per = talent_armor_per;
    }
    this.getTalent_armor_per = function()
    {
        return this.talent_armor_per;
    }
    this.setTalent_attack_speed = function(talent_attack_speed)
    {
        this.talent_attack_speed = talent_attack_speed;
    }
    this.getTalent_attack_speed = function()
    {
        return this.talent_attack_speed;
    }
    this.setTalent_battle_spell = function(talent_battle_spell)
    {
        this.talent_battle_spell = talent_battle_spell;
    }
    this.getTalent_battle_spell = function()
    {
        return this.talent_battle_spell;
    }
    this.setTalent_cd_reduction = function(talent_cd_reduction)
    {
        this.talent_cd_reduction = talent_cd_reduction;
    }
    this.getTalent_cd_reduction = function()
    {
        return this.talent_cd_reduction;
    }
    this.setTalent_crit_chance = function(talent_crit_chance)
    {
        this.talent_crit_chance = talent_crit_chance;
    }
    this.getTalent_crit_chance = function()
    {
        return this.talent_crit_chance;
    }
    this.setTalent_crit_dmg = function(talent_crit_dmg)
    {
        this.talent_crit_dmg = talent_crit_dmg;
    }
    this.getTalent_crit_dmg = function()
    {
        return this.talent_crit_dmg;
    }
    this.setTalent_dmg_to_monster = function(talent_dmg_to_monster)
    {
        this.talent_dmg_to_monster = talent_dmg_to_monster;
    }
    this.getTalent_dmg_to_monster = function()
    {
        return this.talent_dmg_to_monster;
    }
    this.setTalent_healing_effect = function(talent_healing_effect)
    {
        this.talent_healing_effect = talent_healing_effect;
    }
    this.getTalent_healing_effect = function()
    {
        return this.talent_healing_effect;
    }
    this.setTalent_hp = function(talent_hp)
    {
        this.talent_hp = talent_hp;
    }
    this.getTalent_hp = function()
    {
        return this.talent_hp;
    }
    this.setTalent_hp_regen = function(talent_hp_regen)
    {
        this.talent_hp_regen = talent_hp_regen;
    }
    this.getTalent_hp_regen = function()
    {
        return this.talent_hp_regen;
    }
    this.setTalent_lifesteal = function(talent_lifesteal)
    {
        this.talent_lifesteal = talent_lifesteal;
    }
    this.getTalent_lifesteal = function()
    {
        return this.talent_lifesteal;
    }
    this.setTalent_magic_armor = function(talent_magic_armor)
    {
        this.talent_magic_armor = talent_magic_armor;
    }
    this.getTalent_magic_armor = function()
    {
        return this.talent_magic_armor;
    }
    this.setTalent_magic_armor_per = function(talent_magic_armor_per)
    {
        this.talent_magic_armor_per = talent_magic_armor_per;
    }
    this.getTalent_magic_armor_per = function()
    {
        return this.talent_magic_armor_per;
    }
    this.setTalent_magic_pen_flat = function(talent_magic_pen_flat)
    {
        this.talent_magic_pen_flat = talent_magic_pen_flat;
    }
    this.getTalent_magic_pen_flat = function()
    {
        return this.talent_magic_pen_flat;
    }
    this.setTalent_magic_power = function(talent_magic_power)
    {
        this.talent_magic_power = talent_magic_power;
    }
    this.getTalent_magic_power = function()
    {
        return this.talent_magic_power;
    }
    this.setTalent_magic_power_per = function(talent_magic_power_per)
    {
        this.talent_magic_power_per = talent_magic_power_per;
    }
    this.getTalent_magic_power_per = function()
    {
        return this.talent_magic_power_per;
    }
    this.setTalent_mana = function(talent_mana)
    {
        this.talent_mana = talent_mana;
    }
    this.getTalent_mana = function()
    {
        return this.talent_mana;
    }
    this.setTalent_mana_regen = function(talent_mana_regen)
    {
        this.talent_mana_regen = talent_mana_regen;
    }
    this.getTalent_mana_regen = function()
    {
        return this.talent_mana_regen;
    }
    this.setTalent_move_speed_per = function(talent_move_speed_per)
    {
        this.talent_move_speed_per = talent_move_speed_per;
    }
    this.getTalent_move_speed_per = function()
    {
        return this.talent_move_speed_per;
    }
    this.setTalent_physical_attack = function(talent_physical_attack)
    {
        this.talent_physical_attack = talent_physical_attack;
    }
    this.getTalent_physical_attack = function()
    {
        return this.talent_physical_attack;
    }
    this.setTalent_physical_pen_flat = function(talent_physical_pen_flat)
    {
        this.talent_physical_pen_flat = talent_physical_pen_flat;
    }
    this.getTalent_physical_pen_flat = function()
    {
        return this.talent_physical_pen_flat;
    }
    this.setTalent_spell_vamp = function(talent_spell_vamp)
    {
        this.talent_spell_vamp = talent_spell_vamp;
    }
    this.getTalent_spell_vamp = function()
    {
        return this.talent_spell_vamp;
    }

    
}
