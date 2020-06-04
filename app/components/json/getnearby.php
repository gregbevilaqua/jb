<?  header('Content-type: text/json');
   $lat = common::get_control_value('lat'); // latitude of centre of bounding circle in degrees
    $lon = common::get_control_value('lon'); // longitude of centre of bounding circle in degrees
    $rad = common::get_control_value('rad'); // radius of bounding circle in kilometers

    $R = 6371;  // earth's mean radius, km

    // first-cut bounding box (in degrees)
    $maxLat = $lat + rad2deg($rad/$R);
    $minLat = $lat - rad2deg($rad/$R);
    // compensate for degrees longitude getting smaller with increasing latitude
    $maxLon = $lon + rad2deg($rad/$R/cos(deg2rad($lat)));
    $minLon = $lon - rad2deg($rad/$R/cos(deg2rad($lat)));
    $q->select("*
From `company`
Where (latitude Between $minLat  And $maxLat)
          And (longitude Between $minLon And $maxLon) and longitude !='' and latitude != '' and (`id` in (select `company` from `relation` where `category`='".common::get_control_value("cat")."')) ")

->run();
/*    $q->select("*
From `company`
Where acos(sin(".common::get_control_value("lat").")*sin(radians(latitude)) + cos(".common::get_control_value("lat").")*cos(radians(latitude))*cos(radians(longitude)-".common::get_control_value("log").")) * 6371 < 30")
->show()
    ->run();
*/    
    $data = $q->get_selected();
    $data= array("companies"=>$data);
    echo json_encode($data);
?>