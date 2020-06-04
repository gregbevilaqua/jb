
<?php
echo $_FILES['image']['name'] . '<br/>';


ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '100M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
$operador = addslashes($_GET['operador']);

$target_path = "uploads/$operador/";

$target_path = $target_path . basename($_FILES['image']['name']);

try {
    //throw exception if can't move the file
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
        throw new Exception('Could not move file');
    }

    echo "The file " . basename($_FILES['image']['name']) .
    " has been uploaded";
} catch (Exception $e) {
    die('File did not upload: ' . $e->getMessage());
}
?>