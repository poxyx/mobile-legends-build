<div class="container" >

	 <span class="label label-primary">Patch Version : 1.2.89.304.2</span>
   <br><br>
   <div class="alert alert-success">
     <strong>TODO :  </strong> 
   </div>

    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">YOU</a></li>
     <!--  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
      <li><a data-toggle="tab" href="#menu2">Menu 2</a></li> -->
    </ul>

    <div class="tab-content">

    <div id="home" class="tab-pane fade in active">
    <br>
    <div class="row">
		<div class="col-md-6">

        <hr>

        <center>CHAMPION</center><p></p>

                  <select class="slot form-control" id="hero" name="hero" required>
                        <option value="" disabled selected>Select  champion</option>
                           <?php foreach ($hero as $row) :?>
                              <option  value="<?=$row['ID'];?>" data-image="<?=$row['HERO_PHOTO'];?>" <?=$row['STATUS'];?>> <?=$row['HERO_ROLE'];?> : <b> <?=$row['HERO_NAME'];?> </b></option>
                           <?php endforeach;?>
                      </select>
                    <p>
                     <select class="slot form-control" id="level" name="level">
                        <option value="" disabled selected>Select  champion level</option>
                           <?php $x = 0; while ( $x <= 14) {;?>
                            <option value="<?=$x;?>"> CHAMPION LEVEL : <?=$x + 1;?> </option>
                           <?php $x++; };?>
                      </select>
                    <p>
                    <p>
                     <select class="slot form-control" id="skin" name="skin" required>
                        <option value="" disabled selected>Select  skin attributes </option>
                            <option value="SKIN_HP"> HP : + 100  </option>
                            <option value="SKIN_PHYSICAL_ATTACK"> PHYSICAL ATTACK : + 8  </option>
                            <option value="SKIN_MAGICAL_ATTACK"> MAGIC POWER : + 8  </option>
                      </select>
                    <p>

                  <!--  <h3><b> <span class="glyphicon glyphicon-subscript"></span> ITEM </b></h3>  -->
                  <hr>
                  <center> ITEM </center>

            <?php $x = 1; while ( $x <= 6) {;?>

                    <p>
                     <select  class="slot form-control" id="slot<?=$x;?>" name="slot<?=$x;?>" required>
                        <option value="95" disabled selected>Select item slot <?=$x;?> </option>
                           <?php foreach ($item as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['ITEM_PHOTO'];?>"> <?=$row['ITEM_CATEGORY'];?> : <?=$row['ITEM_NAME'];?> </option>
                           <?php endforeach;?>
                      </select>
                    <p>

            <?php $x++; };?>

                    <p>
                     <select  class="slot form-control" id="potion" name="potion" required>
                        <option value="95" disabled selected>Select potion </option>
                           <?php foreach ($potion as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['ITEM_PHOTO'];?>"> POTION : <?=$row['ITEM_NAME'];?> </option>
                           <?php endforeach;?>
                      </select>
                    <p>

        <b>  TOTAL COST : <span id="cost">0</span> GOLD </b>
    
		</div>

    <div class="col-md-6">
        
        <hr>

        <center>EMBLEM</center><p></p>

                  <select class=" slot form-control" id="emblem" name="emblem" required>
                        <option value="10" disabled selected>Select  emblem </option>
                           <?php foreach ($emblem as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['EMBLEM_PHOTO'];?>"> &nbsp; &nbsp; <b> <?=$row['EMBLEM_NAME'];?> </b></option>
                           <?php endforeach;?>
                      </select>
                    <p>
                     <select class=" slot form-control" id="em_level" name="em_level" required>
                        <option value="0" disabled selected>Select  emblem level</option>
                           <?php $x = 0; while ( $x <= 60) {;?>
                            <option value="<?=$x;?>"> EMBLEM LEVEL : <?=$x;?> </option>
                           <?php $x++; };?>
                      </select>
                    <p>

         <hr>

        <center>TALENT </center><p></p>

                   <select class=" slot form-control" id="talent_tier_1" name="talent_tier_1" required>
                        <option value="55" disabled selected>Select  talent ( TIER 1 ) </option>
                           <?php foreach ($talent_tier_1 as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['EMBLEM_PHOTO'];?>"> &nbsp; &nbsp; <b> <?=$row['TALENT_NAME'];?> </b></option>
                           <?php endforeach;?>
                      </select>
                    <p>
                    <select class=" slot form-control" id="talent_tier_2" name="talent_tier_2" required>
                        <option value="55" disabled selected>Select  talent ( TIER 2 ) </option>
                           <?php foreach ($talent_tier_2 as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['EMBLEM_PHOTO'];?>"> &nbsp; &nbsp; <b> <?=$row['TALENT_NAME'];?> </b></option>
                           <?php endforeach;?>
                      </select>
                    <p>
                     <select class=" slot form-control" id="talent_tier_3" name="talent_tier_3" required disabled>
                        <option value="55" disabled selected>Select  talent ( TIER 3 ) </option>
                         <!--   <?php foreach ($talent_tier_3 as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['EMBLEM_PHOTO'];?>"> &nbsp; &nbsp; <b> <?=$row['TALENT_NAME'];?> </b></option>
                           <?php endforeach;?> -->
                      </select>
                    <p>
        <hr>

        <center>ABILITY BUFF </center><p></p>

                 
                    <select class=" slot form-control" id="jungle_buff" name="jungle_buff" required disabled>
                        <option value="55" disabled selected>Select  ability buff </option>
                          <!--  <?php foreach ($talent_tier_1 as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['EMBLEM_PHOTO'];?>"> &nbsp; &nbsp; <b> <?=$row['TALENT_NAME'];?> </b></option>
                           <?php endforeach;?> -->
                      </select>
                    <p>

         <center>BATTLE SPELL </center><p></p>

                    <select class=" slot form-control" id="battle_spell" name="battle_spell" required disabled>
                        <option value="55" disabled selected>Select  battle spell </option>
                          <!--  <?php foreach ($talent_tier_1 as $row) :?>
                              <option value="<?=$row['ID'];?>" data-image="<?=$row['EMBLEM_PHOTO'];?>"> &nbsp; &nbsp; <b> <?=$row['TALENT_NAME'];?> </b></option>
                           <?php endforeach;?> -->
                      </select>
                    <p>

    </div>
	</div>  

  <div class="row">

    <div class="col-md-12">
      <hr>

        <center>CHAMPION SKILL (LEVEL 1) </center>

          <div class="row">

              <div class="col-md-4">
                <center><p>SKILL 1</p></center>
                  <p>
                       <select class="slot form-control" id="skill_level_1" name="skill_level_1" required>
                          <option value="0" disabled selected>Select  skill 1 level</option>
                              <?php $x = 0; while ( $x <= 5) {;?>
                          <option value="<?=$x;?>"> SKILL LEVEL : <?=$x + 1;?> </option>
                              <?php $x++; };?>
                        </select>                
                  <p>
              </div>

              <div class="col-md-4">
                <center><p>SKILL 2</p></center>
                  <p>
                       <select class="slot form-control" id="skill_level_2" name="skill_level_2" required>
                          <option value="0" disabled selected>Select  skill 2  level</option>
                              <?php $x = 0; while ( $x <= 5) {;?>
                          <option value="<?=$x;?>"> SKILL LEVEL : <?=$x + 1;?> </option>
                              <?php $x++; };?>
                        </select>                
                  <p>
              </div>

              <div class="col-md-4">
                <center><p>ULTIMATE</p></center>
                  <p>
                       <select class="slot form-control" id="skill_level_3" name="skill_level_3" required>
                          <option value="0" disabled selected>Select  ultimate level</option>
                             <?php $x = 0; while ( $x <= 2) {;?>
                          <option value="<?=$x;?>"> ULTIMATE LEVEL : <?=$x + 1;?> </option>
                              <?php $x++; };?>
                        </select>                
                  <p>
              </div>

          </div>

           <div class="row" class="extra_skill_level">

              <div class="col-md-4">
                <center><p>SKILL 1 EXTRA </p></center>
                  <p>
                       <select class="slot form-control" id="skill_level_4" name="skill_level_4" required>
                          <option value="0" disabled selected>Select  skill 1 level</option>
                              <?php $x = 0; while ( $x <= 5) {;?>
                          <option value="<?=$x;?>"> SKILL LEVEL : <?=$x + 1;?> </option>
                              <?php $x++; };?>
                        </select>                
                  <p>
              </div>

              <div class="col-md-4">
                <center><p>SKILL 2 EXTRA</p></center>
                  <p>
                       <select class="slot form-control" id="skill_level_5" name="skill_level_5" required>
                          <option value="0" disabled selected>Select  skill 2  level</option>
                              <?php $x = 0; while ( $x <= 5) {;?>
                          <option value="<?=$x;?>"> SKILL LEVEL : <?=$x + 1;?> </option>
                              <?php $x++; };?>
                        </select>                
                  <p>
              </div>

              <div class="col-md-4">
                <center><p>ULTIMATE EXTRA</p></center>
                  <p>
                       <select class="slot form-control" id="skill_level_6" name="skill_level_6" required>
                          <option value="0" disabled selected>Select  ultimate level</option>
                             <?php $x = 0; while ( $x <= 2) {;?>
                          <option value="<?=$x;?>"> ULTIMATE LEVEL : <?=$x + 1;?> </option>
                              <?php $x++; };?>
                        </select>                
                  <p>
              </div>

          </div>

         </p>
         <table data-sort-name="stargazers_count" data-sort-order="desc" data-toggle="table" class="table-striped">
          <thead>
            <tr>
              <th>PHOTO</th>
              <th>SKILL TYPE</th>
              <th>SKILL NAME</th>
              <th>MAGIC DAMAGE</th>
              <th>PHYSICAL DAMAGE</th>
              <th>COOLDOWN</th>
              <th>MANA</th>
            </tr>
          </thead>
          <tbody>
             <tr>
               <td><img width="50px" height="50px" id="photo_1" class="img-circle"></td>
               <td id="type_1"></td>
               <td id="skill_1"></td>
               <td id="magic_dmg_1">0</td>
               <td id="physical_dmg_1">0</td>
               <td id="cooldown_1">0</td>
               <td id="mana_1">0</td>
             </tr>
              <tr>
               <td><img width="50px" height="50px" id="photo_2" class="img-circle"></td>
               <td id="type_2"></td>
               <td id="skill_2"></td>
               <td id="magic_dmg_2">0</td>
               <td id="physical_dmg_2">0</td>
               <td id="cooldown_2">0</td>
               <td id="mana_2">0</td>
             </tr>
              <tr>
               <td><img width="50px" height="50px" id="photo_3" class="img-circle"></td>
               <td id="type_3"></td>
               <td id="skill_3"></td>
               <td id="magic_dmg_3">0</td>
               <td id="physical_dmg_3">0</td>
               <td id="cooldown_3">0</td>
               <td id="mana_3">0</td>
             </tr>
              <tr>
               <td><img width="50px" height="50px" id="photo_4" class="img-circle"></td>
               <td id="type_4"></td>
               <td id="skill_4"></td>
               <td id="magic_dmg_4">0</td>
               <td id="physical_dmg_4">0</td>
               <td id="cooldown_4">0</td>
               <td id="mana_4">0</td>
             </tr>
              <tr id="s5" class="extra_skill">
               <td><img width="50px" height="50px" id="photo_5" class="img-circle"></td>
               <td id="type_5"></td>
               <td id="skill_5"></td>
               <td id="magic_dmg_5">0</td>
               <td id="physical_dmg_5">0</td>
               <td id="cooldown_5">0</td>
               <td id="mana_5">0</td>
             </tr>
              <tr id="s6" class="extra_skill">
               <td ><img width="50px" height="50px" id="photo_6" class="img-circle"></td>
               <td id="type_6"></td>
               <td id="skill_6"></td>
               <td id="magic_dmg_6">0</td>
               <td id="physical_dmg_6">0</td>
               <td id="cooldown_6">0</td>
               <td id="mana_6">0</td>
             </tr>
              <tr id="s7" class="extra_skill">
               <td><img width="50px" height="50px" id="photo_7" class="img-circle"></td>
               <td id="type_7"></td>
               <td id="skill_7"></td>
               <td id="magic_dmg_7">0</td>
               <td id="physical_dmg_7">0</td>
               <td id="cooldown_7">0</td>
               <td id="7">0</td>
             </tr>
             <tr>
               <td></td>
               <td></td>
               <td >TOTAL DAMAGE DONE : </td>
               <td id="magic_dmg_done">0</td>
               <td id="physical_dmg_done">0</td>
               <td ></td>
               <td ></td>
             </tr>
          </tbody>
        </table>

        <br>

         <div class="alert alert-info">
           <strong>ADDITIONAL INFO :</strong> 
           <br>
           <p id="add_info_passive"></p>
           <p id="add_info_skill_1"></p>
           <p id="add_info_skill_2"></p>
           <p id="add_info_skill_3"></p>
         </div>
    </div>

    <div class="col-md-12">
      <hr>

        <center>CHAMPION ATTRIBUTES</center>
        <p></p>
        <table data-sort-name="stargazers_count" data-sort-order="desc" data-toggle="table" class="table-striped">
          <thead>
            <tr>
              <th>ATTRIBUTES</th>
              <th>VALUE</th>
              <th>ATTRIBUTES</th>
              <th>VALUE</th>
              <th>ATTRIBUTES</th>
              <th>VALUE</th>
              <th>ATTRIBUTES</th>
              <th>VALUE</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>ATTACK</td>
              <td> <span class="green" id="total_attack">0</span> ( <span id="attack">0</span> + <span class="green" id="added_attack">0</span> ) </td>
              <td>HP</td>
              <td> <span class="green" id="total_hp">0</span> ( <span id="hp">0</span> + <span class="green" id="added_hp">0</span> ) </td>
              <td>MANA</td>
              <td> <span id="mana">0</span>  </td>
              <td>ARMOR</td>
              <td> <span id="armor">0</span>  </td>
            </tr>

            <tr>
              <td>PHYSICAL PEN</td>
              <td><span id="physical_pen">0</span></td>
              <td>LIFESTEAL</td>
              <td><span id="lifesteal">0</span></td>
              <td>HP REGEN</td>
              <td><span id="hp_regen">0</span></td>       
              <td>MANA REGEN</td>
              <td><span id="mana_regen">0</span></td>
            </tr>

            <tr>
              <td>MAGIC POWER</td>
              <td><span id="magic_power">0</span></td>
              <td>MAGIC RESISTANCE</td>
              <td><span id="magic_resistance">0</span></td>
              <td>MAGIC PEN</td>
              <td><span id="magic_pen">0</span></td>
              <td>SPELL VAMP</td>
              <td><span id="spell_vamp">0</span></td>
            </tr>

            <tr>
              <td>MOVEMENT SPEED</td>
              <td><span id="move_speed">0</span></td>
              <td>COOLDOWN REDUCTION</td>
              <td><span id="cooldown_reduction">0</span></td>
              <td>ATTACK SPEED</td>
              <td><span id="attack_speed">0</span></td>
              <td>CRIT CHANCE</td>
              <td><span id="crit_chance">0</span></td>
            </tr>

            <tr>
              <td>CRIT REDUCTION</td>
              <td><span id="crit_reduction">0</span></td>
              <td>RESILIENCE</td>
              <td><span id="resilience">0</span></td>
              <td>DMG TO MONSTER</td>
              <td><span id="dmg_to_monster">0</span></td>
              <td>CRIT DAMAGE</td>
              <td><span id="crit_damage">0</span></td>
            </tr>

            <tr>
              <td>HEALING EFFECTS</td>
              <td><span id="healing_effects">0</span></td>
              <td>BATTLE SPELL</td>
              <td><span id="battle_spell">0</span></td>
              <td>MAGIC PEN %</td>
              <td><span id="magic_pen_per">0</span></td>
              <td>PHYSICAL PEN %</td>
              <td><span id="physical_pen_per">0</span></td>
            </tr>
           
          </tbody>
        </table>
      </div>
  </div>


</div>

 <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>

  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>

</div>
<hr>

        <div class="fb-comments" data-href="http://localhost/ci_boilerplate/home/item.html" data-width="100%" data-numposts="5"></div>
</div>


