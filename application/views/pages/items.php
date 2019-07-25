

<br>
<div class="container">
  <div id="2" class="row tab-pane fade in active">
    <div class="col-md-12">

      <div class="row">
          <div class="col-md-6">
           
              <span class="label label-primary">Patch Version : 1.2.96.304.2</span>
                <br><br>
                <?php echo form_open('items'); ?>
                    <p>
                      <select class="form-control" id="hero" name="hero" required>
                        <option value="" disabled selected>Select your champion</option>
                           <?php foreach ($hero as $row) :?>
                              <option  value="<?=$row['ID'];?>"> CHAMPION NAME : <?=$row['HERO_NAME'];?> </option>
                           <?php endforeach;?>
                      </select>
                    <p>
                     <select class="form-control" id="level" name="level" required>
                        <option value="" disabled selected>Select your champion level</option>
                           <?php $x = 0; while ( $x <= 14) {;?>
                            <option value="<?=$x;?>"> CHAMPION LEVEL : <?=$x + 1 ;?> </option>
                           <?php $x++; };?>
                      </select>
                    <p>
                    <select class="form-control" id="build" name="build" required>
                        <option value="" disabled selected>Select your item attributes type</option>
                            <option value="ITEM_PHYSICAL_ATK"> PHYSICAL ATK</option>
                            <option value="ITEM_LIFESTEAL"> LIFESTEAL</option>
                            <option value="ITEM_CD_REDUCTION"> CD REDUCTION</option>
                            <option value="ITEM_PHYSICAL_ARMOR"> PHYSICAL ARMOR</option>
                            <option value="ITEM_SPELL_LIFESTEAL"> SPELL LIFESTEAL</option>
                            <option value="ITEM_MANA_REGEN"> MANA REGEN</option>
                            <option value="ITEM_MAGIC_ARMOR"> MAGIC ARMOR</option>
                            <option value="ITEM_MAGIC_PEN_FLAT"> MAGIC PEN FLAT</option>
                            <option value="ITEM_PHYSICAL_PEN_FLAT" disabled> PHYSICAL PEN FLAT</option>
                            <option value="ITEM_MAGIC_PEN_PER"> MAGIC PEN PER</option>
                            <option value="ITEM_PHYSICAL_PEN_PER"> PHYSICAL PEN PER</option>
                            <option value="ITEM_CRIT_CHANCE"> CRIT CHANCE</option>
                            <option value="ITEM_HP_REGEN"> HP REGEN</option>
                            <option value="ITEM_CRIT_REDUCTION"> CRIT REDUCTION</option>
                            <option value="ITEM_HP"> HP</option>
                            <option value="ITEM_MANA"> MANA</option>
                            <option value="ITEM_MOVE_SPEED_FLAT"> MOVE SPEED FLAT</option>
                            <option value="ITEM_MOVE_SPEED_PER"> MOVE SPEED PER</option>
                            <option value="ITEM_ATK_SPEED_FLAT" disabled> ATK SPEED FLAT</option>
                            <option value="ITEM_ATK_SPEED_PER"> ATK SPEED PER</option>
                            <option value="ITEM_MAGIC_POWER"> MAGIC POWER</option>
                            <option value="RESILIENCE"> RESILIENCE</option>
                      </select>
                    <br>              
                    <div class="checkbox">
                      <label><input type="checkbox" name="check" > <?= strtoupper('Includes Low Tier Item');?></label>
                      <p></p>
                      <label><input type="checkbox" name="potion" checked disabled="true"> <?= strtoupper('Includes Potion Item');?></label>
                    </div>
                    <button class="form-control btn btn-success" type="submit" name="submit">SUBMIT</button>
                    <br>
                 <?php echo form_close(); ?>
                </div>

                <div class="col-md-6">
                    <hr>
                </div>

            </div>
        

        <script type="text/javascript">
            document.getElementById('build').value = "<?php echo $_POST['build'];?>";
            document.getElementById('hero').value  =  "<?php echo $_POST['hero'];?>";
            document.getElementById('level').value = "<?php echo $_POST['level'];?>";
        </script>

        <br>
        <div class="well">
         <center><b> HERO STATS </b></center>
        </div>

        <hr>

          <div class="row">

            <div class="col-md-12">

                <table data-sort-name="stargazers_count" data-sort-order="desc" data-toggle="table">
                  <thead>
                    <tr>
                      <th>M.SPEED</th>
                      <th>ATTACK</th>
                      <th>M.POWER</th>
                      <th>ARMOR</th>
                      <th>M.ARMOR</th>
                      <th>HP</th>
                      <th>MANA</th>
                      <th>ATK SPEED</th>
                      <th>HP REGEN</th>
                      <th>MANA REG</th>
                      <th>CRIT </th>
                    </tr>
                    <tbody>
                        <tr>

                        <?php if($hero_info){ ?>

                          <?php foreach ($hero_info as $row) :?>

                            <?php foreach ($hero_column as $key):

                                   $exclude = ['HERO_NAME','HERO_PHOTO','HERO_ABILITY_CRIT_RATE'];

                                   if(!in_array($key, $exclude)) {                                   
                            ?>
                               <td> <?php 

                                   if($key != 'HERO_ATK_SPEED') {

                                      $normal_stat =  $row[$key] + (@$row[$key.'_GR'] * $level).'<p><small> ( '.$row[$key].'<span class="added_gr"> + '.@$row[$key.'_GR'] * $level.'</span>)</small></p>';

                                   } else {

                                      $normal_stat =  ($row[$key]/100) + ((@$row[$key.'_GR']/1000) * $level).'<p><small> ('.($row[$key]/100).'<span class="added_gr"> + '.((@$row[$key.'_GR']/1000) * $level).'</span>)</small></p>';
                                   }

                                     echo $normal_stat;

                                   ?> 

                               </td> <!--NOTICE INGNORED HERE-->

                             <?php }; endforeach;?>

                           <?php endforeach;?>

                          <?php } else {?>

                          <td>NO INFO</td>

                        <?php };?>

                        </tr>
                    </tbody>
                  </thead>
                </table>

            </div>

          </div>

        <hr>
        <div class="well">
         <center><b> BEST GOLD/ATTRIBUTES RATIO ITEM </b></center>
        </div>
        <p></p>
        <table data-sort-name="stargazers_count" data-sort-order="desc" data-toggle="table">
          <thead>
            <tr>

              <?php $x =1; while ($x <= count($ratio_build) ) { ?>
                  <th> BEST ITEM <?=$x;?></th>
              <?php $x++; }?>

              <th> ADDED STAT</th>
              <th> TOTAL COST</th>

            </tr>
            <tbody>
              <tr>
               <?php 
                 $added_stat = array();
                 $total_cost = array();
                 $count = 1; if($ratio_build != false) { foreach ($ratio_build as $row):
               ?>
               <td>
                <center>
                  <a href="javascript:void(0)" data-toggle="modal" data-target="#<?=$row['ID'];?>"><img src='<?= $row['ITEM_PHOTO'];?>' width="50px" height="50px" class="img-circle"></a>
                  <p><b><?= $row['ITEM_NAME'];?></b></p>
                </center>
              </td>
               <?php 

                  array_push($added_stat, $row[$this->session->userdata('stat')]);
                  array_push($total_cost, $row['ITEM_PRICE']);
                  $count++; endforeach;}?>

               <td><?= array_sum($added_stat);?> <?= str_replace('PER','%',str_replace('ITEM',' ',str_replace('_', ' ', $this->session->userdata('stat'))));?></td>
               <td><?= array_sum($total_cost);?> GOLD</td>

              </tr>
            </tbody>
          </thead>
        </table>
        <br><br>
        <div class="well">
         <center><b> ITEM GOLD/ATTRIBUTES LIST </b></center>
        </div>
        <table data-sort-name="stargazers_count" data-sort-order="desc" data-toggle="table" class="table-striped">
          <thead>
            <tr>
              <th data-sortable="true">NO</th>
              <th>CATEGORY</th>
              <th>BASE ITEM</th>
              <th data-sortable="true">ITEM COST</th>
              <th data-sortable="true"><?=str_replace('PER','%',str_replace('ITEM',' ',str_replace('_', ' ', $this->session->userdata('stat'))));?> </th>
              <th data-sortable="true">GOLD STATIC RATIO</th>
              <th data-sortable="true">MAX VALUE ( 6 SLOT )</th> 
              <th data-sortable="true">COST ( 6 SLOT )</th> 
            </tr>
            <tbody>

            <?php $count = 1; if($item != false) { foreach ($item as $row):?>

              <tr>
                <td><?= $count;?></td>
                <td><b><?= $row['ITEM_CATEGORY'];?></b></td>
                <td>
                  <center>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#<?=$row['ID'];?>"><img src='<?= $row['ITEM_PHOTO'];?>' width="50px" height="50px" class="img-circle"></a>
                    <p><b><?= $row['ITEM_NAME'];?></b></p>


                      <!-- Modal -->
                      <div class="modal modal-message modal-info fade" id="<?=$row['ID'];?>" >
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                              <h4 class="modal-title"><img src='<?= $row['ITEM_PHOTO'];?>' width="90px" height="90px" class="img-circle"></h4>
                            </div>
                            <div class="modal-body">

                          <div class="row">
                          <?php 
                          $exclude = ['ID','ITEM_NAME','ITEM_PHOTO','ITEM_PRICE','ITEM_PASSIVE'];
                          foreach ($column as $stat ): if( is_numeric($row[$stat])){ if($row[$stat] == 0 ) { array_push($exclude, $stat); } if(!in_array($stat, $exclude)) { ?>
                            <div class="col-md-12">
                                <p class="small"> <i class="glyphicon glyphicon-triangle-right"></i> <?=$row[$stat].' '.str_replace('PER','%',str_replace('ITEM','',str_replace('_', ' ', $stat)));?></p>
                             </div>
                          <?php } } endforeach;?>
                            </div>
                            <br>

                            <?php 
                             $unique = explode("<hr>", $row['ITEM_PASSIVE']);
                             foreach ($unique as $value):?>
                               
                               <p class="unique"><?=str_replace('Unique','<span class="passive">Unique</span>',$value);?></p>

                            <?php endforeach;?>

                           </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>      
                        </div>

                  </center>
                </td>
                <td><?= $row['ITEM_PRICE'];?></td>
                <td><?= $row[$this->session->userdata('stat')];?></td>
                <td><?= number_format($row['ITEM_PRICE']/$row[$this->session->userdata('stat')],2,'.','');?></td>
                <td><?= $row[$this->session->userdata('stat')] * 6 ;?></td> 
                <td><?= $row['ITEM_PRICE'] * 6 ;?></td>  
              </tr>

            <?php $count++; endforeach;}?>

            </tbody>
          </thead>
        </table>

    </div>
  </div> 

  <div id="1" class="row tab-pane fade in ">
        <HR>
  </div>

  <br>

        <div class="fb-comments" data-href="http://localhost/ci_boilerplate/home/item.html" data-width="100%" data-numposts="5"></div>
</div>


