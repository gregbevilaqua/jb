<?  header('Content-type: text/json');
    $q->select(" * from `company` where `id` in ( select `company` from `relation` where `category`='".common::get_control_value("cat")."' ) and `company` like '%".common::get_control_value("s")."%' and `status` = 1 order by `order` DESC,`top` DESC,special DESC")
    ->run();
    
    $data = $q->get_selected();
    $data= array("companies"=>$data);
    echo json_encode($data);
?>