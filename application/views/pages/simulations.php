<style type="text/css">
  
      .thumbnail {
        position: relative;
        padding: 0px;
        margin-bottom: 20px;
        height: 150px;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          /*text-shadow: 2px 2px 4px #000000;*/
          font-weight: bold;
    }

    .row {
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

    }

    .row:before {
      content: "";
      position: fixed;
      left: 0;
      right: 0;
      z-index: -1;

      display: block;
      background-image: url('https://i.ytimg.com/vi/zX_7r29aCzM/maxresdefault.jpg');
      background-size:cover;
      width: 100%;
      height: 100%;

      -webkit-filter: blur(5px);
      -moz-filter: blur(5px);
      -o-filter: blur(5px);
      -ms-filter: blur(5px);
      filter: blur(5px);
    }

    .thumbnail > h4 {
      /*  padding: 7px 5px 0px;*/
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align:center;
        font-weight: bold;
        font-size: 15px;
        text-shadow: 2px 2px 4px #000000;
    }
    .thumbnail h4 .info {
        position: absolute;
        top: 0px;
        right: 0px;
        font-size: 0.6em;
        padding-left: 15px;
        border-top-right-radius: 3px;
        border-bottom-left-radius: 4px;
        border-radius: 0px;
        border-bottom-left-radius: 5px;
        cursor:  pointer;
    }

    .thumbnail h4 .info > span {
        margin-right: 10px;   
    }

    .thumbnail img {
        width: 120px;
        height: 120px;
    }
    .thumbnail a.btn {
        border-radius: 0px;
    }

    .label {
        border-radius: 0px;
    }

    .text-center {

        color: #fff;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
        text-transform: uppercase;
    }

    .text-subtitle {

        color: #52B3D9;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
        text-transform: uppercase;
    }

</style>

<div class="container-fluid">
    <div class="row" style="height:300px;background-image: url('https://i.imgur.com/0MD9MAV.png');">
    <br><br><br><br>
    <h1 class="text-center"> Mlbb builder damage simulator </h1>
    <p>
        <center><h3 class="text-subtitle">pick any champion and start crafting best build</h3></center>
  </div>
  <br><br>
</div>

<div class="container">
    <div class="row">

     <?php foreach($hero as $row):

        switch ($row['HERO_ROLE']) {
            case 'FIGHTER':
                    $role='success';
                break;
            case 'ASSASIN':
                    $role='danger';
                break;
            case 'MAGE':
                    $role='warning';
                break;
            case 'MARKSMAN':
                    $role='info';
                break;
             case 'TANK':
                    $role='primary';
                break;
            
            default:
                    $role='default';
                break;
        }

     ?>
            
            <div class="col-sm-3 col-md-3">
            <div class="thumbnail" style="background-image: url('<?php echo base_url();?>/public/images/cover_photo/<?=strtolower($row['HERO_NAME']);?>.jpg');">
                <a style="background-color:rgba(0, 0, 0, 0.5);border: none;" href="#" class="btn btn-success col-xs-12" role="button"><?=strtoupper($row['HERO_ROLE']);?></a>
                <br><br><br><br><br><br>
                <a href="<?php echo base_url();?>builder/<?=$row['ID'];?>/<?=$row['MLAPI_MAPPING'];?>" class="btn btn-<?php echo $role;?> col-xs-12" role="button"><?=strtoupper($row['HERO_NAME']);?></a>
                <div class="clearfix"></div>
            </div>
        </div>  

     <?php endforeach;?>    

    </div>
    <br>
    <div class="fb-comments" data-href="http://jomkira.com/mlbb/" data-width="100%" data-numposts="5"></div>
</div>