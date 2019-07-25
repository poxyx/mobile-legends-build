<?php 


function isPatchUptoDate($data)
{
    if($data != '1.3.88' && $data != '1.3.96') {
        return  "label label-danger";
    } else {
        return  "label label-success";
    }
}

function isStatusUpToDate($data)
{
    if($data != 'STATS UPDATED' && $data != 'TESTED') {
        return "label label-danger";
    } else {
        return "label label-success";
    }
}

function getItemPhoto($data)
{
    return base_url()."public/images/items/".str_replace(" ","-",strtolower($data)).".png";
}

function trimChar($data,$length)
{
    $data = (strlen($data) > $length) ? substr($data, 0, $length) . '...' : $data;
    return "<small><b>".$data."</b></small>";
}

function getItemSlot($slot)
{
  $slot_data =   '<div class="dotted col-xs-4">';
  $slot_data .=  '<br>';
  $slot_data .=  '<small><span id="slot'.$slot.'_name"> SLOT '.$slot.' </span></small>';
  $slot_data .=  '<br>';
  $slot_data .=  '<center>';
  $slot_data .=  '<a href="javascript:void(0)" class="get_item" data-toggle="modal" data-target="#item" onclick="getSlot'.$slot.'()">';
  $slot_data .=  '<img id="slot'.$slot.'" src="'.base_url().'/public/images/bg.jpg" width="70px" height="70px" class="img-circle">';
  $slot_data .=  '<input type="hidden" value="95"  name="slot'.$slot.'">';
  $slot_data .=  '</a>';
  $slot_data .=  '</center>';
  $slot_data .=  '<br>';     
  $slot_data .=  '</div>';

  return $slot_data;
}

function getSkillTypeLabel($data)
{
    if(!empty($data)) {

        $tag = explode(",",$data);

        foreach($tag as $value) {

            if($value == "aoe") {

                echo '<span class="label label-danger">AoE</span> ';
            }

            if($value == "buff") {

                echo '<span class="label label-info">BUFF</span> ';
            }

            if($value == "cc") {

                echo '<span class="label label-warning gold">CC</span> ';
            }

            if($value == "conceal") {

                echo '<span class="label label-info">Conceal</span> ';
            }

            if($value == "burst") {

                echo '<span class="label label-warning">Burst</span> ';
            }

            if($value == "blink") {

                echo '<span class="label purple">BLINK</span> ';
            }

            if($value == "heal") {

                echo '<span class="label label-success">HEAL</span> ';
            }

            if($value == "summon") {

                echo '<span class="label label-info">Summon</span> ';
            }

            if($value == "speedup") {

                echo '<span class="label label-info">Speed Up</span> ';
            }

            if($value == "damage") {

                echo '<span class="label label-danger">Damage</span> ';
            }

            
            if($value == "morph") {

                echo '<span class="label label-info">Morph</span> ';
            }

            if($value == "shield") {

                echo '<span class="label label-info">Shield</span> ';
            }


        }
        
    } else {
        echo  "";
    }
}

function filterAndColorDesc($data,$type,$hero_id)
{
    $data = str_replace("/~","</span>",$data);
    $data = str_replace("~pa","<span class='orange'>",$data);
    $data = str_replace("~ma","<span class='cyan'>",$data);
    $data = str_replace("~pd","<span class='red'>Physical Damage</span>",$data);
    $data = str_replace("~md","<span class='blue'>Magic Damage</span>",$data);
    $data = str_replace("~s","<span class='skill'>",$data);
    $data = str_replace("~epa","Extra Physical ATK",$data);
    $data = str_replace("~tpa","Total Physical ATK",$data);
    $data = str_replace("~ema","Extra Magic Power",$data);
    $data = str_replace("~tma","Total Magic Power",$data);
    $data = str_replace("~t","<span class='true'>",$data);
    $data = str_replace("~d","<span class='green'>",$data);
    $data = str_replace("?","%,Da",$data);

    $name;
    $target;
    
    //check skill damage type
    if($type > 0 ) {

        $name = ["cyan_1","cyan_2","cyan_3","cyan_4","cyan_5","cyan_6","cyan_7","cyan_8","cyan_9,cyan_10"];
        $target = "cyan";

    } else {

        $name = ["orange_1","orange_2","orange_3","orange_4","orange_5","orange_6","orange_7","orange_8","orange_9","orange_10"];
        $target = "orange";
    }

    $skill_desc_array = explode("'",$data);
    $original_skill_desc = $skill_desc_array;

    $counter = 0;
    $repeat = 1;


    $desc = array();

    foreach($skill_desc_array as $key => $value) {
            if($value == $target) 
            {
                $desc[$counter][$key]= $value;
                unset($skill_desc_array[$key]);
            } 

        $counter;
    }

    foreach($desc[0] as $key => $value) 
    {
        $original_skill_desc[$key] =  $target."_".$repeat;
        $repeat++;
    }

    echo implode("'",$original_skill_desc);

}

function get_hero_guide_id($id)
{
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://mapi.mobilelegends.com/hero/guide?id=".$id."&page=1&size=6&language=enge=en",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Accept: */*",
        "Accept-Encoding: gzip, deflate",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "Cookie: PHPSESSID=3a266c306c3775512985987dbd0ad764",
        "Host: mapi.mobilelegends.com",
        "Postman-Token: 749505fe-2e6e-4616-bfc1-872ec1d24aa5,c470bd38-8b70-48a0-abc2-3dbb7ff2a2ba",
        "User-Agent: PostmanRuntime/7.15.2",
        "cache-control: no-cache"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      return "cURL Error #:" . $err;
    } else {
       $guide_id = json_decode($response,true);
       return $guide_id;
    }
}

function fetch_hero_guide($guide_id)
{
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://mapi.mobilelegends.com/news/detail?id=".$guide_id."",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Accept: */*",
        "Accept-Encoding: gzip, deflate",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "Cookie: PHPSESSID=3a266c306c3775512985987dbd0ad764",
        "Host: mapi.mobilelegends.com",
        "Postman-Token: 749505fe-2e6e-4616-bfc1-872ec1d24aa5,c470bd38-8b70-48a0-abc2-3dbb7ff2a2ba",
        "User-Agent: PostmanRuntime/7.15.2",
        "cache-control: no-cache"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      return "cURL Error #:" . $err;
    } else {
       $guide_text = json_decode($response,true);
       return $guide_text['data']['rich_text'];
    }
}


?>