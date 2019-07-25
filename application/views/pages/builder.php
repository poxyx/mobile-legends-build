<?php foreach($hero as $row):?>

<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {

        echo '<div class="container-fluid">';

    }else {

        echo '<div class="container">';

    }


?>
<style>
    .modal-body > .tab-content {
        background-color:#101010 !important;
    }
</style>

    <div class="bg row">
        <br><br><br>
        <div class="col-lg-12 col-sm-12">
        <div class="card hovercard">
            <br>
            <div class="card-background">
                <img class="card-bkimg" alt="" src="<?php echo base_url();?>/public/images/cover_photo/<?=strtolower($row['HERO_NAME']);?>.jpg">
            </div>
            <div class="useravatar">
                
            </div>
            <br>
            <div class="useravatar">
                <!-- <img alt="" src="<?php echo base_url();?>/public/images/heroes/<?=strtolower($row['HERO_NAME']);?>.png"> -->
                <br><br>
                <div class="row">
                    <div class="col-xs-4">
                    <img alt="" src="<?php echo base_url();?>/public/images/heroes/<?=strtolower($row['HERO_NAME']);?>.png">
                    <br><br>
                    <br>
                    <div class="card-info"> 
                        <span class="card-title"><?=$row['HERO_NAME'];?></span>
                        <br><br>
                    </div>
                    </div>
                    <div class="col-xs-4">
                    <div class="row">
                    <div class="col-xs-6">
                    <center class="bar_text"><b>DURABILITY</b></center>
                    <br>
                    <center class="bar_text"><b>OFFENSE</b></center>
                    <br>
                    <center class="bar_text"><b>ABILITY EFEFCTS</b></center>
                    <br>
                    <center class="bar_text"><b>DIFFICULTY</b></center>
                    </div>
                        <div class="col-xs-6">
                         <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?=$API['data']['mag'];?>"
                            aria-valuemin="0" aria-valuemax="100" style="width:<?=$API['data']['mag'];?>%">
                                <?=$API['data']['mag'];?>
                            </div>
                            </div>
                            <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?=$API['data']['phy'];?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?=$API['data']['phy'];?>%">
                                    <?=$API['data']['phy'];?>
                                    </div>
                            </div>
                            <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?=$API['data']['alive'];?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?=$API['data']['alive'];?>%">
                                    <?=$API['data']['alive'];?>
                                    </div>
                            </div>
                            <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?=$API['data']['diff'];?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?=$API['data']['diff'];?>%">
                                    <?=$API['data']['diff'];?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xs-4">

                        <!-- <center><img alt="" src="<?php echo base_url();?>/public/images/roles/<?=strtolower($API['data']['type']);?>.png" style="border:none;width:75px;height:75px;"></center>
                        <h2 style="color:#fff;"><?=strtoupper($API['data']['type']);?></h2> -->

                        <div class="inner-content text-center">
            
                            <div class="c100 p<?= 101 - $RANK_API['urank'];?> medium center green">
                                <span>
                                    #<?=$RANK_API['urank'];?>
                                </span>
                                <div class="slice"><div class="bar"></div><div class="fill"></div></div>
                            </div>
                            <p></p>
                            <span style="color:#fff"><b>POPULARITY [ RANKED ]</b></span>
                            </div>

                    </div>
                </div>
            </div>


        </div>
        
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

    <script type="text/javascript">
        
        isActive = function(id){

            var className = $("#" + id).attr('class')
            var menu_tab = ["builder","stats","enemy","skill","guides","passive"]
            var active_menu = menu_tab.includes(id)
            var active_menu_index = menu_tab.indexOf(id);
            
            if (active_menu_index > -1) 
                {
                    menu_tab.splice(active_menu_index, 1);
                }
                
                $.each(menu_tab, function( index, value ) {
                    $("#" + value).removeClass().addClass("btn btn-default");
                });

                    $("#" + id).removeClass().addClass("btn btn-primary");              
        }

    </script>

        <div class="btn-group" role="group">
            <button type="button" id="builder" class="btn btn-default" href="#tab1" data-toggle="tab" onclick="isActive('builder')"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                <div class="hidden-xs">BUILDER</div>
            </button>
        </div>

        <div class="btn-group" role="group">
            <button type="button" id="guides" class="btn btn-default" href="#tab5" data-toggle="tab" onclick="isActive('guides')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                <div class="hidden-xs">GUIDES</div>
            </button>
        </div>

        <div class="btn-group" role="group">
            <button type="button" id="enemy" class="btn btn-default" href="#tab4" data-toggle="tab" onclick="isActive('enemy')"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">ENEMY</div>
            </button>
        </div>

        
        <div class="btn-group" role="group">
            <button type="button" id="passive" class="btn btn-default" href="#tab6" data-toggle="tab" onclick="isActive('passive')"><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span>
                <div class="hidden-xs">PASSIVE</div>
            </button>
        </div>

        <div class="btn-group" role="group">
            <button type="button" id="stats" class="btn btn-default" href="#tab2" data-toggle="tab" onclick="isActive('stats')"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <div class="hidden-xs">ATTRIBUTES</div>
            </button>
        </div>

        <div class="btn-group" role="group">
            <button type="button" id="skill" class="btn btn-default" href="#tab3" data-toggle="tab" onclick="isActive('skill')"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
                <div class="hidden-xs">SKILL</div>
            </button>
        </div>
        


    </div>

    <script type="text/javascript">

        var slot1   = false
        var slot2   = false
        var slot3   = false
        var slot4   = false 
        var slot5   = false 
        var slot6   = false
        var slot11  = false
        var slot22  = false
        var slot33  = false
        var slot44  = false 
        var slot55  = false 
        var slot66  = false
        var emblem  = false
        var t1      = false 
        var t2      = false

        function getSlot1()
        {

            slot1 = true
            slot2 = false
            slot3 = false
            slot4 = false
            slot5 = false
            slot6 = false
        }

        function getSlot2()
        {

            slot2 = true
            slot1 = false
            slot3 = false
            slot4 = false
            slot5 = false
            slot6 = false
        }

        function getSlot3()
        {

            slot3 = true
            slot1 = false
            slot2 = false
            slot4 = false
            slot5 = false
            slot6 = false
        }

        function getSlot4()
        {

            slot4 = true
            slot1 = false
            slot2 = false
            slot3 = false
            slot5 = false
            slot6 = false
        }

        function getSlot5()
        {

            slot5 = true
            slot1 = false
            slot2 = false
            slot3 = false
            slot4 = false
            slot6 = false
        }

         function getSlot6()
        {

            slot6 = true
            slot1 = false
            slot2 = false
            slot3 = false
            slot4 = false
            slot5 = false
        }

        
        function getSlot11()
        {

            slot11 = true
            slot22 = false
            slot33 = false
            slot44 = false
            slot55 = false
            slot66 = false
        }

        function getSlot22()
        {

            slot22 = true
            slot11 = false
            slot33 = false
            slot44 = false
            slot55 = false
            slot66 = false
        }

        function getSlot33()
        {

            slot33 = true
            slot11 = false
            slot22 = false
            slot44 = false
            slot55 = false
            slot66 = false
        }

        function getSlot44()
        {

            slot44 = true
            slot11 = false
            slot22 = false
            slot33 = false
            slot55 = false
            slot66 = false
        }

        function getSlot55()
        {

            slot55 = true
            slot11 = false
            slot22 = false
            slot33 = false
            slot44 = false
            slot66 = false
        }

         function getSlot66()
        {

            slot66 = true
            slot11 = false
            slot22 = false
            slot33 = false
            slot44 = false
            slot55 = false
        }

        function getEmblem()
        {
            emblem = true
            t1     = false 
            t2     = false
        }

        function getTalent1()
        {
            emblem = false
            t1     = true
            t2     = false
        }

        function getTalent2()
        {
            emblem = false
            t1     = false 
            t2     = true
        }

        function addItem(id,img_url,name){
 
            if(slot1 == true) {

                $('#slot1').attr('src', img_url )
                $('#slot1_name').html(name)
                $('input[name=slot1]').val(id);

            } else if (slot2 == true) {

                $('#slot2').attr('src', img_url )
                $('#slot2_name').html(name)
                $('input[name=slot2]').val(id);

            } else if (slot3 == true) {

                $('#slot3').attr('src', img_url )
                $('#slot3_name').html(name)
                $('input[name=slot3]').val(id);

            } else if (slot4 == true) {

                $('#slot4').attr('src', img_url )
                $('#slot4_name').html(name)
                $('input[name=slot4]').val(id);

            } else if (slot5 == true) {

                $('#slot5').attr('src', img_url )
                $('#slot5_name').html(name)
                $('input[name=slot5]').val(id);

            } else if (slot6 == true) {

                $('#slot6').attr('src', img_url )
                $('#slot6_name').html(name)
                $('input[name=slot6]').val(id);

            } else if (slot11 == true) {

                $('#slot11').attr('src', img_url )
                $('#slot11_name').html(name)
                $('input[name=slot11]').val(id);

            } else if (slot22 == true) {

                $('#slot22').attr('src', img_url )
                $('#slot22_name').html(name)
                $('input[name=slot22]').val(id);


            } else if (slot33 == true) {

                $('#slot33').attr('src', img_url )
                $('#slot33_name').html(name)
                $('input[name=slot33]').val(id);

            } else if (slot44 == true) {

                $('#slot44').attr('src', img_url )
                $('#slot44_name').html(name)
                $('input[name=slot44]').val(id);

            } else if (slot55 == true) {

                $('#slot55').attr('src', img_url )
                $('#slot55_name').html(name)
                $('input[name=slot55]').val(id);

            } else if (slot66 == true) {

                $('#slot66').attr('src', img_url )
                $('#slot66_name').html(name)
                $('input[name=slot66]').val(id);

            } else {

                console.log(this)
            }

            // console.log($('input[name=slot1]').val())
            $('.close').click()
            
        }

        function addEmblem(id,img_url) {

            if (emblem == true) {

                $('#emblem').attr('src', img_url )
                $('input[name=emblem]').val(id);

                } else if (t1 == true) {

                $('#talent1').attr('src', img_url )
                $('input[name=talent1]').val(id);

                } else if (t2 == true) {

                $('#talent2').attr('src', img_url )
                $('input[name=talent2]').val(id);


                } else {

                    // 
                }

                $('.close').click()
        }

    </script>

    <div class="well-content well">
      <div class="tab-content" style="background-color:transparent">
        <div class="tab-pane fade in active" id="tab1" style="min-height: 900px">

            <div class="row">
                <div class="col-xs-6">

                    <div class="row">
                        <div class="col-xs-6">
                            <span class="<?=isPatchUptoDate($row['PATCH']);?>">PATCH : <?=$row['PATCH'];?></span></<span>
                        </div>
                        <!-- <div class="col-xs-6">
                             <span class="<?=isStatusUpToDate($row['STATUS']);?>">STATUS : <?=$row['STATUS'];?></span>
                        </div>  -->
                    </div>                  
                </div>
                <div class="col-xs-6">
                    
                </div>
            </div>

            <div class="row">

                 <div class="col-xs-12">
                 <center><h2 class="well title"> HERO & SKILL </h2></center>
                </div>
                 <br>

                 <div class="col-xs-12">

                 <div class=" dotted col-xs-3">
                    <br>
                    LEVEL
                    <br><br>
                    <center> 
                        <img id="#" src="<?php echo base_url();?>/public/images/heroes/<?=strtolower($row['HERO_NAME']);?>.png" width="100px" height="100px" class="img-circle"> 
                    <br><br>
                    <?php if($row['HERO_PHYSICAL_ATK_GR'] > 0 ) {;?>

                     <select class="calculate form-control" id="hero_level">
                        <option value="0" disabled selected>Level</option>
                           <?php $x = 0; while ( $x <= 14) {;?>
                            <option value="<?=$x;?>"> LEVEL : <?=$x + 1;?> </option>
                           <?php $x++; };?>
                     </select>

                     <?php } else {;?>
                    
                    <select class="calculate form-control" id="hero_level">
                        <option value="0" disabled selected>Level</option>
                        <option value="1">1</option>
                     </select>

                     <?php };?>

                    </center>
                    <br>
                 </div>

                <?php $c = 1; foreach ($skill as $s):

                        if($s['SKILL_TYPE'] == "ACTIVE") {

                ?>

                 <div class=" dotted col-xs-3">
                    <br>
                    <?=$s['SKILL_NAME'];?> 
                    <br><br>
                    <center> 
                        <img id="" src="<?=$s['SKILL_PHOTO'];?>" width="100px" height="100px" class="img-circle"> 
                        <input type="hidden" value="10" name="talent1">
                    <br><br>
                     <select class="calculate form-control" id="skill_<?=$c++;?>_level">
                        <option value="0" disabled selected>Level</option>
                           <?php $x = 0; while ( $x <= 5) {;?>
                            <option value="<?=$x;?>"> LEVEL : <?=$x + 1;?> </option>
                           <?php $x++; };?>
                     </select>

                    </center>
                    <br>
                 </div>
                
                <?php } endforeach ;?>

                 </div>

             </div>
           <br><br>
            <div class="row">
            <div class="col-xs-12">
            <center><h2 class="well title">ITEM</h2></center>
                           </div>
            <br>

            <div class="col-xs-6"> 
                              
                <?=getItemSlot(1);?>
                <?=getItemSlot(2);?>
                <?=getItemSlot(3);?>
                <?=getItemSlot(4);?>
                <?=getItemSlot(5);?>
                <?=getItemSlot(6);?>   

                <div class=" dotted col-xs-4">
                 <br>
                    <span> <del>POTION</del> </span>
                    <br><br>
                    <center>                    
                        <img id="" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                    </a>
                    <br><br>
                    </center>
                    <br>
                 </div>      

                 <div class=" dotted col-xs-4">
                 <br>
                    <span> <del>SKIN </del></span>
                    <br><br>
                    <center>                    
                        <img id="" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                    </a>
                    <br><br>
                    </center>
                    <br>
                 </div>  

                 <div class=" dotted col-xs-4">
                 <br>
                    <span> <del>BUFF</del> </span>
                    <br><br>
                    <center>                    
                        <img id="" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                    </a>
                    <br><br>
                    </center>
                    <br>
                 </div>  
               
            </div>
            <!--  <div class="col-xs-1">
             </div>
 -->

             <div class="col-xs-6">
                <!-- WIP.. -->
                <div class="col-xs-12 dotted">
                <center><h5><b>TOTAL ADDED ATTRIBUTES</b> </h5></center>

                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td style="text-align:left">TOTAL COST:</td>
                         <td> <span class="item_added_info" id="item_total_cost" style="color: #F5D76E !important;">0</span> </td>
                        <td style="text-align:left">ATTACK:</td>
                        <td> <span id="item_added_attack" >0</span></td>
                    </tr>
                    <tr>
                        <td style="text-align:left">HEALTH:</td>
                        <td><span id="item_added_hp">0</span></td>
                        <td style="text-align:left">MANA:</td>
                         <td><span id="item_added_mana">0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">ARMOR:</td>
                        <td><span id="item_added_armor">0</span></td>
                        <td style="text-align:left">MAGIC RES:</td>
                         <td><span id="item_added_magic_res">0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">HEALTH REGEN:</td>
                        <td><span id="item_added_hp_regen">0</span></td>
                        <td style="text-align:left">MANA REGEN:</td>
                         <td><span id="item_added_mana_regen">0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">ATTACK/SEC :</td>
                        <td><span id="item_added_atk_speed_per">0</span></td>
                        <td style="text-align:left">ATTACK SPEED</td>
                         <td><span id="item_added_atk_speed_fix">0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">LIFESTEAL:</td>
                        <td><span id="item_added_lifesteal">0</span></td>
                        <td style="text-align:left">MAGIC POWER:</td>
                         <td><span id="item_added_magic_power">0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">SPELL VAMP:</td>
                        <td><span id="item_added_spell_vamp">0</span></td>
                        <td style="text-align:left">MAGIC PEN:</td>
                         <td><span id="item_added_magic_pen_fix">0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">MOVESPEED:</td>
                        <td> <span id="item_added_move_speed_fix">0</span></td>
                        <td style="text-align:left">MOVESPEED %:</td>
                         <td> <span id="item_added_move_speed_per">0</span> </td>
                    </tr>

                    <tr>
                        <td style="text-align:left">CRIT CHANCE:</td>
                        <td> <span id="item_added_crit_chance">0</span></td>
                        <td style="text-align:left">CDR:</td>
                         <td>   <span id="item_added_cd_reduction">0</span> </td>
                    </tr>

                    <tr>
                        <td style="text-align:left">CRIT REDUC:</td>
                        <td><span id="item_added_crit_reduction">0</span></td>
                        <td style="text-align:left">RESILIENCE:</td>
                         <td>    <span id="item_added_resilience">0</span> </td>
                    </tr>


                    
                    
                    </tbody>
                </table>
                      
                            
                </div>

             </div>
                      
             <div class="col-xs-6">
                    <div class="jumbotron" style="padding:18px;">
                    <!-- <center><span class="label label-warning"><b>BUILD FROM OFFICAL WEBSITE MAY BE OUTDATED</b></span>
                    </center>
                    <br> -->
                    <div class="row">
                        <br>
                        <center>BUILD EXAMPLE</center>
                        <br><br>
                        <div class="col-xs-2">
                            <img class="img-circle" src="<?=$API['data']['gear']['out_pack'][0]['equip']['icon'];?>" width="55" height="55">
                            <!-- <hr>
                            <b><?=$API['data']['gear']['out_pack'][0]['equip']['name'];?></b>  -->
                        </div>
                        <div class="col-xs-2">
                            <img class="img-circle" src="<?=$API['data']['gear']['out_pack'][1]['equip']['icon'];?>" width="55" height="55">
                            <!-- <hr>
                            <b><?=$API['data']['gear']['out_pack'][1]['equip']['name'];?></b> -->
                        </div>
                        <div class="col-xs-2">
                            <img class="img-circle" src="<?=$API['data']['gear']['out_pack'][2]['equip']['icon'];?>" width="55" height="55">
                            <!-- <hr>
                            <b><?=$API['data']['gear']['out_pack'][2]['equip']['name'];?></b> -->
                        </div>
                        <div class="col-xs-2">
                            <img class="img-circle" src="<?=$API['data']['gear']['out_pack'][3]['equip']['icon'];?>" width="55" height="55">
                            <!-- <hr>
                            <b><?=$API['data']['gear']['out_pack'][3]['equip']['name'];?></b> -->
                        </div>
                        <div class="col-xs-2">
                            <img class="img-circle" src="<?=$API['data']['gear']['out_pack'][4]['equip']['icon'];?>" width="55" height="55">
                            <!-- <hr>
                            <b><?=$API['data']['gear']['out_pack'][4]['equip']['name'];?></b> -->
                        </div>
                        <div class="col-xs-2">
                            <img class="img-circle" src="<?=$API['data']['gear']['out_pack'][5]['equip']['icon'];?>" width="55" height="55">
                            <!-- <hr>
                            <b><?=$API['data']['gear']['out_pack'][5]['equip']['name'];?></b> -->
                        </div>
                    </div>
                    <hr>
                    <center> <small>SOURCE : OFFICIAL MLBB <a href="https://m.mobilelegends.com">   WEBSITE</a></small></center>
                    <br>
                    </div>
                </div>  
                        
                <div class="col-xs-6">
                    <br>
                    <div class="jumbotron" style="color:#4c90ac">
                    <!-- <center><span class="label label-warning"><MAY>BUILD TIPS FROM OFFICAL WEBSITE MAY BE OUTDATED</hr></span>
                    </center>
                    <br> -->
                    <?=$API['data']['gear']['out_pack_tips'];?>
                    <hr>
                    <center> <small>SOURCE : OFFICIAL MLBB <a href="https://m.mobilelegends.com">   WEBSITE</a></small></center>
                    </div>
                </div>  

             </div>
            

             <div class="row">
             <div class="col-xs-12">
                 <center><h2 class="well title">EMBLEMS & TALENT </h2></center>
                           </div>
                 <br>

                 <div class="col-xs-6">

                 <div class=" dotted col-xs-4">
                 <br>
                    <span> EMBLEM </span>
                    <br><br>
                    <center> 
                     <a href="javascript:void(0)"class="get_emblem" data-toggle="modal" data-target="#talent" onclick="getEmblem()">
                        <img id="emblem" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                        <input type="hidden" value="10" name="emblem">
                    </a>
                    <br><br>
                     <select class="calculate form-control" id="emblem_level">
                        <option value="0" disabled selected>Level</option>
                           <?php $x = 0; while ( $x <= 60) {;?>
                            <option value="<?=$x;?>"> LEVEL : <?=$x;?> </option>
                           <?php $x++; };?>
                     </select>

                    </center>
                    <br>
                 </div>

                 <div class=" dotted col-xs-4">
                 <br>
                    <span> TALENT T1 </span>
                    <br><br>
                    <center> 
                     <a href="javascript:void(0)" class="get_talent1" data-toggle="modal" data-target="#talent" onclick="getTalent1()">
                        <img id="talent1" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                        <input type="hidden" value="55" name="talent1">
                    </a>
                    <br><br>
                     <select class="calculate form-control" id="talent1_level">
                        <option value="0" disabled selected>Level</option>
                           <?php $x = 1; while ( $x <= 3) {;?>
                            <option value="<?=$x;?>"> LEVEL : <?=$x;?> </option>
                           <?php $x++; };?>
                     </select>

                    </center>
                    <br>
                 </div>

                  <div class=" dotted col-xs-4">
                  <br>
                    <span > TALENT T2 </span>
                    <br><br>
                    <center> 
                     <a href="javascript:void(0)" class="get_talent2" data-toggle="modal" data-target="#talent" onclick="getTalent2()">
                        <img id="talent2" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                        <input type="hidden" value="55" name="talent2">
                    </a>
                    <br><br>
                     <select class="calculate form-control" id="talent2_level">
                        <option value="0" disabled selected>Level</option>
                           <?php $x = 1; while ( $x <= 3) {;?>
                            <option value="<?=$x;?>"> LEVEL : <?=$x;?> </option>
                           <?php $x++; };?>
                     </select>

                    </center>
                    <br>
                 </div>

                 
                 <div class=" dotted col-xs-4">
                 <br>
                    <span> <del>TALENT T3</del> </span>
                    <br><br>
                    <center> 
                        <img id="" src="<?php echo base_url();?>/public/images/bg.jpg" width="70px" height="70px" class="img-circle"> 
                    <br><br>

                    </center>
                    <br>
                 </div>
                 </div>

                 <div class="col-xs-6">
                 
                 <div class="jumbotron">
                 <center><h5>TOTAL ADDED ATTRIBUTES </h5></center>
                 <br>
                 <center>WIP..</center>
                 </div>

                 </div>

             </div>

             <br>

        </div>

        <div class="tab-pane fade in" id="tab2" style="min-height: 900px">
            <div class="row">
                <div class="col-xs-12">
                    <div class="jumbotron">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>ATTRIBUTES</th>
                            <th>VALUE </th>
                            <th>UNIQUE PASSIVE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>HP REGEN</td>
                            <td>  
                             <b> 
                                    <span id="total_hp_regen" class="green"><b><?=$row['HERO_HP_REGEN'];?></b></span>
                                    ( 
                                    <span id="level_hp_regen"><?=$row['HERO_HP_REGEN'];?></span> + 
                                    <span id="added_hp_regen" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HIT POINTS</td>
                            <td>
                            <b> 
                                    <span id="total_hp" class="green"><b><?=$row['HERO_HP'];?></b></span>
                                    ( 
                                    <span id="level_hp"><?=$row['HERO_HP'];?></span> + 
                                    <span id="added_hp" class="green">0</span> 
                                    )                                  
                                </b>
                            </td>
                            <td><center>   <span id="hp_mod"></span> </center></td>
                        </tr>
                        <tr>
                            <td>MOVEMENT SPEED</td>
                            <td>                                <b> 
                                    <span id="total_move_speed" class="green"><b><?=$row['HERO_MOVE_SPEED'];?></b></span>
                                    ( 
                                    <span id="level_move_speed"><?=$row['HERO_MOVE_SPEED'];?></span> + 
                                    <span id="added_move_speed" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MANA</td>
                            <td>                                <b> 
                                    <span id="total_mana" class="green"><b><?=$row['HERO_MANA'];?></b></span>
                                    ( 
                                    <span id="level_mana"><?=$row['HERO_MANA'];?></span> + 
                                    <span id="added_mana" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MANA REGEN</td>
                            <td>                                <b> 
                                    <span id="total_mana_regen" class="green"><b><?=$row['HERO_MANA_REGEN'];?></b></span>
                                    ( 
                                    <span id="level_mana_regen"><?=$row['HERO_MANA_REGEN'];?></span> + 
                                    <span id="added_mana_regen" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CD REDUCTION</td>
                            <td>                                <b> 
                                    <span id="total_cd_reduction" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_cd_reduction">0</span> + 
                                    <span id="added_cd_reduction" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>PHYSICAL ATTACK</td>
                            <td>                                <b> 
                                    <span id="total_attack" class="green"><b><?=$row['HERO_PHYSICAL_ATK'];?></b></span>
                                    ( 
                                    <span id="level_attack"><?=$row['HERO_PHYSICAL_ATK'];?></span> + 
                                    <span id="added_attack" class="green">0</span> 
                                    )
                                </b></td>
                            <td> <center>   <span class="bravery_mod"></span> </center></td>
                        </tr>
                        <tr>
                            <td>MAGIC POWER</td>
                            <td>                                <b> 
                                    <span id="total_magic_power" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_magic_power">0</span> + 
                                    <span id="added_magic_power" class="green">0</span> 
                                    )
                                </b>  </td>
                            <td>
                            <center>   <span id="magic_power_mod"></span> <span class="bravery_mod"></span> </center>
                            </td>
                        </tr>
                        <tr>
                            <td>ATTACK SPEED</td>
                            <td>                                <b> 
                                    <span id="total_attack_speed" class="green"><b><?=$row['HERO_ATK_SPEED']/100;?></b></span>
                                    ( 
                                    <span id="level_attack_speed"><?=$row['HERO_ATK_SPEED']/100;?></span> + 
                                    <span id="added_attack_speed" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>ARMOR</td>
                            <td>                                <b> 
                                    <span id="total_armor" class="green"><b><?=$row['HERO_ARMOR'];?></b></span>
                                    ( 
                                    <span id="level_armor"><?=$row['HERO_ARMOR'];?></span> + 
                                    <span id="added_armor" class="green">0</span> 
                                    )
                                </b></td>
                            <td><center>   <span class="bravery_mod"></span> </center></td>
                        </tr>
                        <tr>
                            <td>CRIT CHANCE</td>
                            <td>                                <b> 
                                    <span id="total_crit_chance" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_crit_chance">0</span> + 
                                    <span id="added_crit_chance" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MAGIC RESISTANCE</td>
                            <td>                                <b> 
                                    <span id="total_magic_armor" class="green"><b><?=$row['HERO_MAGIC_ARMOR'];?></b></span>
                                    ( 
                                    <span id="level_magic_armor"><?=$row['HERO_MAGIC_ARMOR'];?></span> + 
                                    <span id="added_magic_armor" class="green">0</span> 
                                    )
                                </b></td>
                            <td><center>   <span class="bravery_mod"></span> </center></td>
                        </tr>
                        <tr>
                            <td>PHYSICAL PEN</td>
                            <td>                                <b> 
                                    <span id="total_phy_pen_fix" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_phy_pen_fix">0</span> + 
                                    <span id="added_phy_pen_fix" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MAGIC PEN</td>
                            <td>                                <b> 
                                    <span id="total_magic_pen_fix" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_magic_pen_fix">0</span> + 
                                    <span id="added_magic_pen_fix" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SPELL VAMP</td>
                            <td>                                <b> 
                                    <span id="total_spell_vamp" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_spell_vamp">0</span> + 
                                    <span id="added_spell_vamp" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>LIFESTEAL</td>
                            <td>                                <b> 
                                    <span id="total_lifesteal" class="green">0</b></span>
                                    ( 
                                    <span id="level_lifesteal">0</span> + 
                                    <span id="added_lifesteal" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CRIT REDUCTION</td>
                            <td>                                <b> 
                                    <span id="total_crit_reduction" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_crit_reduction">0</span> + 
                                    <span id="added_crit_reduction" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>RESILIENCE</td>
                            <td>                                <b> 
                                    <span id="total_resilience" class="green"><b>0</b></span>
                                    ( 
                                    <span id="level_resilience">0</span> + 
                                    <span id="added_resilience" class="green">0</span> 
                                    )
                                </b></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>DMG TO MONSTER</td>
                            <td><span class="green"><center><b><span id="dmg_monster">0</span> %</b></center></span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CRIT DAMAGE</td>
                            <td> <span class="green"><center><b><span id="crit_dmg">0</span> %</b></center></span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>HEALING EFFECT</td>
                            <td><span class="green"><center><b><span id="healing_effect">0</span> %</b></center></span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>BATTLE SPELL</td>
                            <td> <h5span class="green"><center><b><span id="battle_spell">0</span> %</b></center></h5span></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>MAGIC PEN %</td>
                            <td><span class="green"><center><b><span id="mgc_pen_per">0</span> %</b></center></span>
                                </td>
                            <td> <center>   <span id="spellbreak_mod"></span> </center></td>
                        </tr>
                        <tr>
                            <td>PHYSICAL PEN %</td>
                            <td> 
                         <span class="green"><center><b><span id="phy_pen_per">0</span> %</b></center></span></td>
                            <td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade in" id="tab3">
            <br><br>

            <?php  $tips = 0; $count = 1; $mana = 1; $cd = 1; foreach($skill as $s):?>

                <div class="row" style="border: 3px dashed #ccc;margin:0px;">
                 <!-- <div class="col-xs-1"></div> -->
                    <div class="col-xs-3">
                        <br><br><br><br>
                        <center><img src="<?=$s['SKILL_PHOTO'];?>" class="img-circle" width="125px" height="125px"></center>
                    </div>
                     <div class="col-xs-8">
                        <br>
                        <span class="<?php echo isPatchUptoDate($s['PATCH']);?>">PATCH : <b><?=strtoupper($s['PATCH']);?></b></span> 
                        <?php getSkillTypeLabel($s['TAG']);?>                        
                        <span class="label label-default"> <b><?=strtoupper($s['SKILL_TYPE']);?></b></span>  <center> 
                        <br>
                        <b><?=strtoupper($s['SKILL_NAME']);?></b></center>
                        <hr>
                        <span id="skill_desc_<?=$count;?>">
                            <p>
                                 <?=@filterAndColorDesc($s['SKILL_DESC'],$s['SKILL_BASE_MAGIC_DAMAGE'],9);?>       
                            </p>
                        </span>

                        <hr>
                        <center><span class="label label-success"><b>TIPS</b></span><span class="label label-warning"><b>FROM OFFICAL WEBSITE</b></span><span class="label label-danger"><b>MAY BE OUTDATED</b></span>
                        </center>
                        <br> 
                            <?php 

                            if($s['SKILL_TYPE'] == "PASSIVE") { ?>

                                    <span style="color:#4c90ac"><?=$API['data']['skill']['skill'][3]['tips'];?></span>

                            <?php } else { ?>

                                   <span style="color:#4c90ac"><?=$API['data']['skill']['skill'][$tips-1]['tips'];?></span>

                            <?php   } ?>
                           
                        <hr>

                        <div class="alert alert-info" style="border-radius:0px;border:none;color:#fff !important;background-color:#777 !important">
                            <center><b><span><small>INITIAL SKILL BASE DAMAGE + ITEMS DAMAGE INFO : </small></b></center>
                            <br>
                            <span id="skill_info_<?=$count++;?>">0</span>
                        </div>

                        <hr>
                        <span class="label label-primary" id="skill_mana_<?=$mana++;?>"> <b>Mana cost: <?=strtoupper($s['SKILL_BASE_MANA_COST']);?></b></span>
                        <span class="label label-success" id="skill_cooldown_<?=$cd++;?>"> <b>Cooldown: <?=strtoupper($s['SKILL_BASE_COOLDOWN']);?></b></span>
                        <br><br>
                    </div>
                  <div class="col-xs-1"></div>
                </div>
                <br>
            
            <?php $tips++;endforeach;?>     
            
        </div>

        <div class="tab-pane fade in" id="tab4">

          <div class="row">
          <div class="col-xs-12">
          <?php foreach($enemy as $enmy):?>
            
            <?php endforeach;?>
            
 
            <div class="col-xs-4">
                <div class="jumbotron" style="padding:20px">
                    <span> LEVEL </span>
                    <br>
                    <center> 
                        <img id="#" src="<?php echo base_url();?>/public/images/heroes/<?=strtolower($enmy['HERO_NAME']);?>.png" width="80px" height="80px" class="img-circle"> 
                    <br><br>

                     <select class="calculate form-control" id="enemy_level">
                        <option value="0" disabled selected>Level</option>
                           <?php $z = 0; while ( $z <= 14) {;?>
                            <option value="<?=$z;?>"> LEVEL : <?=$z + 1;?> </option>
                           <?php $z++; };?>
                     </select>

                    </center>
                    <br>
                </div>
             </div>

             <div class="col-xs-8">

                <div class="jumbotron" style="padding:20px;">
                            <center>TOTAL AUTO-ATTACK DAMAGE</center>
                <br>
                <br>
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td style="text-align:left">ATTACK DMG:</td>
                        <td><span  id="basic_atk_dmg"> 0</span> </td>
                        <td style="text-align:left">CRITICAL:</td>
                        <td> <span  id="basic_atk_crit"> 0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">LIFESTEAL:</td>
                        <td><span id="basic_atk_lifesteal"> 0</span> </td>
                        <td style="text-align:left"><b>DOOM:</b></td>
                        <td>  <span  id="basic_atk_crit_doom"> 0</span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">DPS:</td>
                        <td><span  id="basic_atk_dps"> 0</span> </td>
                        <td style="text-align:left">SHUTDOWN:</td>
                        <td> <span  id="basic_atk_defeat"> 0</span> </td>
                    </tr>
                    </tbody>
                </table>

                </div>

                <div class="jumbotron" style="padding:20px;">
                            <center>ENEMY STATS AGAINST PHYSICAL DAMAGE</center>
                <br>
                <br>
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td style="text-align:left">HIT POINTS:</td>
                        <td><span  id="basic_atk_dmg">                                 <b> 
                                    <span id="total_enemy_hp" class="green"><b><?=$enmy['HERO_HP'];?></b></span>
                                    ( 
                                    <span id="level_enemy_hp"><?=$enmy['HERO_HP'];?></span> + 
                                    <span id="added_enemy_hp" class="green">0</span> 
                                    )                                  
                                </b></span> </td>
                        <td style="text-align:left">ARMOR:</td>
                        <td> <span  id="basic_atk_crit">                                 <b> 
                                    <span id="total_enemy_armor" class="green"><b><?=$enmy['HERO_ARMOR'];?></b></span>
                                    ( 
                                    <span id="level_enemy_armor"><?=$enmy['HERO_ARMOR'];?></span> + 
                                    <span id="added_enemy_armor" class="green">0</span> 
                                    )                                  
                                </b></span> </td>
                    </tr>
                    <!-- <tr>
                        <td style="text-align:left">MAGIC RES:</td>
                        <td><span id="basic_atk_lifesteal">                                <b> 
                                    <span id="total_enemy_magic_res" class="green"><b><?=$enmy['HERO_MAGIC_ARMOR'];?></b></span>
                                    ( 
                                    <span id="level_enemy_magic_res"><?=$enmy['HERO_MAGIC_ARMOR'];?></span> + 
                                    <span id="added_enemy_magic_res" class="green">0</span> 
                                    )                                  
                                </b></span> </td>
                        <td style="text-align:left"><b>FINAL DEFENSE:</b></td>
                        <td>  <span  id="basic_atk_crit_doom">                                <b> 
                                    <span id="final_enemy_armor" class="green"><b>0</b></span>                                                            
                                </b></span> </td>
                    </tr> -->
                    <tr>
                        <td style="text-align:left">DAMAGE REDUCTION :</td>
                        <td><span  id="basic_atk_dps">                                 <b> 
                                    <span id="final_damage_reduction" class="green"><b>0</b></span>                                                       
                                </b></span> </td>
                        <td style="text-align:left">DAMAGE RECIEVED:</td>
                        <td> <span  id="basic_atk_defeat">                                 <b> 
                                    <span id="final_damage_increase" class="green"><b>0</b></span>                                                            
                                </b></span> </td>
                    </tr>
                    <tr>
                        <td style="text-align:left">EFFECTIVE HITPOINTS:</td>
                        <td> <b> 
                                    <span id="ehp" class="green"><b>0</b></span>                                                         
                                </b></td>
                                <td style="text-align:left"><b>FINAL DEFENSE:</b></td>
                        <td>  <span  id="basic_atk_crit_doom">                                <b> 
                                    <span id="final_enemy_armor" class="green"><b>0</b></span>                                                            
                                </b></span> </td>
                    </tr>
                    </tbody>
                </table>

                </div>
             </div>
             

             <!-- <div class="col-xs-4">
                <div class="jumbotron" style="padding:20px;">
                            <center>ENEMY STATS</center>
                <br>
                <div class="row">
                    <div class=" col-xs-8">
                            ATTACK DMG
                    </div>
                    <div class="text-center col-xs-4">
                           <span class="green" id="basic_atk_dmg"> 3474</span> 
                    </div>
                    <hr>
                    <div class=" col-xs-8">
                           LIFESTEAL
                    </div>
                    <div class="text-center col-xs-4">
                           <span class="green" id="basic_atk_lifesteal"> 3474</span> 
                    </div>
                    <hr>
                    <div class=" col-xs-8">
                            CRITCAL
                    </div>
                    <div class="text-center col-xs-4">
                           <span class="green" id="basic_atk_crit"> 3474</span> 
                    </div>
                    <hr>
                    <div class="col-xs-8">
                            <span class="label label-success"> DOOM </span>
                    </div>
                    <div class="text-center col-xs-4">
                           <span class="green" id="basic_atk_crit_doom"> 3474</span> 
                    </div>
                    <hr>
                    <div class="col-xs-8">
                           DPS
                    </div>
                    <div class="text-center col-xs-4">
                           <span class="green" id="basic_atk_dps"> 3474</span> 
                    </div>
                    <hr>
                    <div class="col-xs-6">
                           SHUTDOWN
                    </div>
                    <div class="text-center col-xs-6">
                           <span class="green" id="basic_atk_defeat"> 8.5 HITS</span> 
                    </div>
                    <hr>
                </div>
                </div>
             </div> -->

          </div>

          <div class="col-xs-12">
          <center><h2 class="well title"> ENEMY ITEM </h2></center>    
          </div>

          <div class="col-xs-12">
                
                <?=getItemSlot(11);?>
                <?=getItemSlot(22);?>
                <?=getItemSlot(33);?>
                <?=getItemSlot(44);?>
                <?=getItemSlot(55);?>
                <?=getItemSlot(66);?>   

          </div>


        <!-- alot to be fixed -->
          <!-- <div class="col-xs-4">

                    <div class="jumbotron" style="padding:20px">
                    <center><h3>CUSTOM STATS</h3></center>
                    <div class="form-group">
                        <label for="custom_armor">M.RES:</label>
                        <input type="number" class="form-control" id="custom_magic_res" value="100">
                    </div>
                    <div class="form-group">
                        <label for="custom_armor"> ARMOR:</label>
                        <input type="number" class="form-control" id="custom_armor" value="100">
                    </div>
                    <div class="form-group">
                        <label for="custom_armor">HP:</label>
                        <input type="number" class="form-control" id="custom_hp" value="10000">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="disable_item"> Disable Item </label>
                    </div>
                    <br>
                    </div>
    
          </div> -->

          <div class="col-xs-12">
          
            <input type="hidden" value="<?=$enmy['ID'];?>" name="enemy_id">

            </div>

          </div>
            
        </div>

        
        <div class="tab-pane fade in" id="tab6">

          <div class="row">
          <div class="col-xs-12">
          <div class="col-xs-12">   

            <div class="col-xs-12">
            <center><h2 class="well title"> UNIQUE PASSIVE </h2></center> 
            </div>

            <div class="col-xs-6">
                    <div class="jumbotron" style="padding:0px">
                        <div class="well title">
                        <center>DEMON HUNTER SWORD</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE
                            </div>
                            <div class="col-xs-8">
                            Devour:Deal <span id="devour_1" class="green"><b><?=$enmy['HERO_HP'] * 0.09;?></b> </span> Physical Damage
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="jumbotron" style="padding:0px">
                        <div class="well title"><center>DEMON HUNTER SWORD</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Devour: <span id="devour_2" class="green"><b><?=$enmy['HERO_HP'] * 0.04;?></b></span> Lifesteal increase.                          
                        </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-6">
                    <div class="jumbotron" style="padding:0px">
                        <div class="well title"><center>FEATHER OF HEAVEN</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                             Affliction: Deal <span id="affliction" class="green"><b><?=$row['HERO_PHYSICAL_ATK'] * 0.04;?></b></span> Magic Damage.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="jumbotron" style="padding:0px">
                        <div class="well title"><center>CONCENTRATED ENERGY</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Recharge:Regen  <span id="recharge" class="green"><b><?=$row['HERO_HP'] * 0.10;?></b></span> of one's HP.</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="jumbotron" style="padding:0px">
                        <div class="well title"><center>CALAMITY REAPER</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Calamity: <span id="calamity" class="green"><b><?=$enmy['HERO_MAGIC_POWER'] * 1.2;?></b></span> True Damage.                        
                        </div>
                            </div>
                    </div>
                </div>
                
                <!-- <div class="col-xs-6">
                    <div class="jumbotron">
                        <h6><center><b>TIME(UNIQUE PASSIVE)</b></center></h6>                   
                         <h5>
                            <center>
                                <b> 
                                <small><b>WIP... </b></small>  <span id="time" class="green"><b></b></span>                          
                                </b>                              
                            </center>
                            <br>
                        </h5>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="jumbotron">
                        <h6><center><b>TIMESTREAM(UNIQUE PASSIVE)</b></center></h6>                   
                         <h5>
                            <center>
                                <b> 
                                <small><b>WIP... </b></small>  <span id="timestream" class="green"><b></b></span>                          
                                </b>                              
                            </center>
                            <br>
                        </h5>
                    </div>
                </div> -->

                <div class="col-xs-6">
                    <div class="jumbotron" style="padding:0px">
                        <div class="well title"><center>LIGHTNING TRUNCHEON</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                             Resonate:Deals <span id="resonate" class="green"><b><?=$row['HERO_MANA'];?></b></span> bonus Magic Damage.
                            </div>
                            </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="active-passive-counter jumbotron" style="padding:0px">
                        <div class="well title"><center>BLADE ARMOR</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                             Vengeance:Return <span id="counterstrike" class="green"><b><?=$row['HERO_PHYSICAL_ATK']* 0.25;?></b></span> Physical Damage.
                            </div>
                            </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class=" jumbotron" style="padding:0px">
                        <div class="well title"><center>THUNDER BELT</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Thunderbolt:Deals <span id="thunderbolt" class="green"><b><?=$row['HERO_HP']* 0.02;?></b></span> extra True Damage.
                            </div>
                            </div>
                    </div>
                </div>

                
                <div class="col-xs-6">
                    <div class=" jumbotron" style="padding:0px">
                        <div class="well title"><center>ENDLESS BATTLE</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Divine Justice: <span id="divine_justice" class="green"><b><?=$row['HERO_PHYSICAL_ATK']* 0.85;?></b></span> True Damage.
                            </div>
                            </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class=" jumbotron" style="padding:0px">
                        <div class="well title"><center>ROSE GOLD METEOR</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Lifeline: Shield absorbs <span id="lifeline" class="green"><b>510</b></span> Damage.
                            </div>
                            </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class=" jumbotron" style="padding:0px">
                        <div class="well title"><center>CURSED HELMET</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Burning Soul: Burning enemy <span id="burning_soul_enemy" class="green"><b><?=$enmy['HERO_HP'] * 0.015;?></b> </span> Damage.
                            </div>
                            </div>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class=" jumbotron" style="padding:0px">
                        <div class="well title"><center>GLOWING WAND</center></div>
                        <div class="row" style="padding:15px">
                            <div class="col-xs-4">
                                    UNIQUE PASSIVE
                            </div>
                            <div class="col-xs-8">
                            Scorch: Burning target <span id="recharge_2" class="green"><b><?=$enmy['HERO_HP'] * 0.02;?></b></span> Magic Damage.
                            <br>
                            Scorch: Burning target <span id="recharge_3" class="green"><b><?=$enmy['HERO_HP'] * 0.03;?></b></span> Magic Damage.            
                            <br>
                            Scorch: Burning target <span id="recharge_4" class="green"><b><?=$enmy['HERO_HP'] * 0.04;?></b></span> Magic Damage.
                            </div>
                            </div>
                    </div>
                </div>

            </div>

          </div>
        </div>
        </div>

        <div class="tab-pane fade in" id="tab5">
            <div class="row">
            <br>
            <!-- <center><span class="label label-success"><b>GUIDES</b></span><span class="label label-warning"><b>FROM OFFICAL WEBSITE</b></span><span class="label label-danger"><b>MAY BE OUTDATED</b></span>
                        </center>
            <br> -->
                <div class="col-xs-4">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span><b>BEST TEAMMATES</b></span></center>
                        </div>
                            <div class="col-xs-12 neat">
                            <br>
                            <center> <img id="#" src="<?=$API['data']['counters']['best']['icon'];?>" width="100px" height="100px" class="img-circle"></center>
                            <br>
                            <!-- <?=$API['data']['counters']['best']['best_mate_tips'];?> -->
                            </div>
                        </div>
                    <br>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                       <center> <span><b>COUNTERS</b></span></center>
                        </div>
                            <div class="col-xs-12 neat">
                            <br>
                            <center> <img id="#" src="<?=$API['data']['counters']['counters']['icon'];?>" width="100px" height="100px" class="img-circle"></center>
                            <br>
                            <!-- <?=$API['data']['counters']['counters']['restrain_hero_tips'];?> -->
                            </div>
                        </div>
                    <br>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span><b>COUNTERED BY</b></span></center>
                        </div>
                            <div class="col-xs-12 neat">
                            <br>
                            <center><img id="#" src="<?=$API['data']['counters']['countered']['icon'];?>" width="100px" height="100px" class="img-circle"></center>
                            <br>
                            <!-- <?=$API['data']['counters']['countered']['by_restrain_tips'];?> -->
                            </div>
                        </div>
                    <br>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span><b>MAX FIRST</b></span></center>
                        <br>
                        </div>
                            
                            <br>
                            <center><img id="#" src="<?=$API['data']['skill']['item']['main']['icon'];?>" width="70px" height="70px" class="img-circle"></center>
                            <br>
                          
                        </div>
                    <br>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span ><b>MAX SECOND</b></span></center>
                        <br>
                        </div>
                            <br>
                            <center><img id="#" src="<?=$API['data']['skill']['item']['secondary']['icon'];?>" width="70px" height="70px" class="img-circle"></center>
                            <br>
                        </div>
                    <br>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span><b>BATTLE SPELL</b></span></center>
                        <br>
                        </div>
                            <br>
                            <center><img id="#" src="<?=$API['data']['skill']['item']['battle_first']['icon'];?>" width="70px" height="70px" class="img-circle"></center>
                            <br>
                        </div>
                    <br>
                    </div>
                </div>

                <div class="col-xs-3">
                    <div class="jumbotron" style="padding:15px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span ><b>BATTLE SPELL</b></span></center>
                        <br>
                        </div>
                            <br>
                            <center><img id="#" src="<?=$API['data']['skill']['item']['battle_second']['icon'];?>" width="70px" height="70px" class="img-circle"></center>
                            <br>

                        </div>
                    <br>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="jumbotron" style="padding:30px;">
                    <br>
                        <div class="row">
                        <div class="col-xs-12">
                        <center><span><b>TIPS</b></span></center>
                        </div>
                            <div class="col-xs-12 neat">
                            <br>
                            <?=$API['data']['skill']['item']['tips'];?>
                            <br>
                            </div>
                        </div>
                    <br>
                    </div>
                </div>

                <div class="infographic col-xs-12">

                <!-- #TODO PULL AND SHOW HERO GUIDES HERE  -->
                <?php     

                    //   $guide_filter = ['Academy'];

                    //    $find_id = get_hero_guide_id($API_HERO_ID);

                    //    foreach($find_id['data'] as $key => $value) 
                    //    {
                    //         if($value['author'] == "MLBB") 
                    //         {
                    //             echo "<div id='hero_academy'>".str_replace('\"','',fetch_hero_guide($value['id']))."</div>";
                    //             break;
                                
                    //         } else{
                                
                    //             // echo str_replace('\"','',fetch_hero_guide($value['id']));
                    //             echo "<center style='color:#fff'>HERO ACADEMY NOT EXIST..</center>";
                    //             break;
                    //         }
                    //    }

                ?>
                </div>

            </div>
        </div>


      </div>
    </div>
    
    </div>
    </div>
    <br>
     <!-- <div class="fb-comments" data-href="http://jomkira.com/mlbb/" data-width="100%" data-numposts="5"></div> -->
</div>

<?php endforeach;?>

<!-- Modal ITEM -->
  <div class="modal fade" id="item" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ITEM SHOP</h4>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs">           
              <li class="active"><a data-toggle="tab" href="#attack">ATTACK</a></li>
              <li><a data-toggle="tab" href="#magic">MAGIC</a></li>
              <li><a data-toggle="tab" href="#defense">DEFENSE</a></li>
              <li><a data-toggle="tab" href="#move">MOVEMENT</a></li>
              <li><a data-toggle="tab" href="#jungle">JUNGLE</a></li>
              <li><a data-toggle="tab" href="#basic">BASIC</a></li>
              <li><a data-toggle="tab" href="#roam">ROAM</a></li>
              <li><a data-toggle="tab" href="#deleted">DELETED</a></li>
            </ul>

            <div class="tab-content">
              <div id="basic" class="tab-pane fade ">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "BASIC" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".$i['ITEM_PHOTO']."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                                <img src="<?=$i['ITEM_PHOTO'];?>" width="60px" height="60px" class="img-circle">
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="attack" class="tab-pane fade in active">
                <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "ATTACK" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="magic" class="tab-pane fade">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "MAGIC" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">                   
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="defense" class="tab-pane fade">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "DEFENSE" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">     
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                                <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="move" class="tab-pane fade">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "MOVEMENT" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">     
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="jungle" class="tab-pane fade">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "JUNGLE" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">     
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="roam" class="tab-pane fade">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "ROAM" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">     
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
              <div id="deleted" class="tab-pane fade">
                 <br>
                   <div class="row">
                        <?php foreach ($item as $i):

                            if($i['ITEM_CATEGORY'] == "DELETED" ) {

                        ?>

                            <div class="col-xs-4 col-md-4 text-center">
                            <a href="javascript:void(0)" onclick="addItem(<?=$i['ID'];?>,<?php echo "'".getItemPhoto($i['ITEM_NAME'])."'";?>,<?php echo "'".$i['ITEM_NAME']."'";?>)">
                            <img src="<?=getItemPhoto($i['ITEM_NAME']);?>" width="60px" height="60px" class="img-circle">     
                            </a>
                            <br>
                            <span class="<?php echo isPatchUptoDate($i['PATCH']);?>"><small>PATCH : <b><?=strtoupper($i['PATCH']);?></small></b></span>
                            <br>
                            <?=trimChar($i['ITEM_NAME'],25);?>
                            <br><br>
                            </div>                        

                        <?php } endforeach;?>
                   </div>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<!-- Modal EMBLEM -->
  <div class="modal fade" id="talent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs">           
              <li class="active"><a data-toggle="tab" href="#emblem_0">EMBLEM</a></li>
              <li><a data-toggle="tab" href="#talent_1">TALENT T1</a></li>
              <li><a data-toggle="tab" href="#talent_2">TALENT T2</a></li>
              <!-- <li><a data-toggle="tab" href="#talent_3">TALENT T3</a></li> -->
            </ul>

            <div class="tab-content">
              <div id="emblem_0" class="tab-pane fade in active ">
                 <br>
                   <div class="row">
                        <?php foreach ($emblem as $e):

                            if($e['ID'] != "10" ) {

                        ?>

                            <div class="col-xs-3 col-md-3">
                            <a href="javascript:void(0)" onclick="addEmblem(<?=$e['ID'];?>,<?php echo "'".$e['EMBLEM_PHOTO']."'";?>)">
                                <center><img src="<?=$e['EMBLEM_PHOTO'];?>" width="70px" height="70px" class="img-circle"></center>
                            </a>
                            <center><b><small><?=$e['EMBLEM_NAME'];?></small></b></center>
                            <br>
                            </div>                        

                         <?php } endforeach;?>
                   </div>
              </div>

              <div id="talent_1" class="tab-pane fade ">
                <br>
                   <div class="row">
                        <?php foreach ($talent_tier_1 as $t): ?>

                            <div class="col-xs-3 col-md-3">
                            <a href="javascript:void(0)" onclick="addEmblem(<?=$t['ID'];?>,<?php echo "'".$t['EMBLEM_PHOTO']."'";?>)">
                                <center><img src="<?=$t['EMBLEM_PHOTO'];?>" width="70px" height="70px" class="img-circle"></center>
                            </a>
                            
                            <center><b><small>T1 : <?=$t['TALENT_NAME'];?> </small></b></center>
                            <br>
                            </div>                        

                        <?php  endforeach;?>
                   </div>
              </div>

             <div id="talent_2" class="tab-pane fade ">
                <br>
                   <div class="row">
                        <?php foreach ($talent_tier_2 as $t): ?>

                            <div class="col-xs-3 col-md-3">
                            <a href="javascript:void(0)" onclick="addEmblem(<?=$t['ID'];?>,<?php echo "'".$t['EMBLEM_PHOTO']."'";?>)">
                                <center><img src="<?=$t['EMBLEM_PHOTO'];?>" width="70px" height="70px" class="img-circle"></center>
                            </a>
                            
                            <center><b><small> T2 : <?=$t['TALENT_NAME'];?> </small></b></center>
                            <br>
                            </div>                        

                        <?php  endforeach;?>
                   </div>
              </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div id="snackbar">ALL HERO ATTRIBUTES/SKILL UPDATED</div>

<?php foreach ($hero as $id): ?>                          
    <input type="hidden" name="hero_id" value="<?=$id['ID'];?>">
<?php  endforeach;?>

<div id="loading"></div>

<a href="javascript:void(0)" class="float" id="calculate_float">
<span class="glyphicon glyphicon-flash my-float"></span>
</a>

