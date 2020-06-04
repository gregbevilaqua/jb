<?  header('Content-type: text/json');
$data = array();
$page=1;
    if(isset($_GET['go']))
        $page=common::get_control_value('go');

$filter = "";
$join = "";
if(common::get_control_value("cat")!=""){
    $filter .= "  and `relation`.`category`='".common::get_control_value("cat")."'  ";
    $join .= " left outer join `relation` on `relation`.`company` = `company`.`id` ";
}
if(common::get_control_value("s")){
    $sarray = common::get_control_value("s");
    $sparts = explode(" ",common::get_control_value("s"));
    $stext = "";
    foreach($sparts as $sp){
        $stext .= " or `company`.`address` like '%".$sp."%' ";
    }     
    $filter .= " and (`company`.`company` like '%".common::get_control_value("s")."%' $stext ) ";
}    
    $q = new Query();
    $q->select(" `company`.* from `company` ".$join."
    where 1 ".$filter." and `company`.`status` = 1 order by `company`.`order` DESC,`company`.`top` DESC,`company`.special DESC")
    ->limit(DEFAULT_PAGE_SIZE)
    ->page($page)
    ->run();
    
$count =  $q->get_selected_count();
$cpage=$q->get_page();
$gpages=$q->get_pages();
if($gpages==""){
    $gpages = 0;
}
$resArray = $q->get_selected();
/*$finalarray = array();
foreach($resArray as $ra){

$q = new Query();
$q->select()
->from("package_access")
->where_equal_to(array("package_id"=>$ra["special"]))
->limit(1)
->run();
$ra["permission"]= $q->get_selected();    
$finalarray[] = $ra;    
}
*/
$data['count'] = $count;
$data['current_page'] = $cpage;
$data['total_pages'] = $gpages;
$data['data'] = $resArray;


echo json_encode($data);
?>