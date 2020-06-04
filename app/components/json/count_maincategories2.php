<?  header('Content-type: text/json');
    $q->select()
    ->from("maincategory2")
    ->run();
    
    $data = $q->get_selected();
    $data= array("categories"=>count($data));
    echo json_encode($data);
?>