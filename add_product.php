<?php
if (isset($_POST['id_category']) && isset($_POST['code']) && isset($_POST['name']) && isset($_POST['price'])){
    $id_category = $_POST['id_category'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $price = $_POST['price'];
}
else{
    echo "error";
}
if(empty($code)|| empty($name) || empty($price)){
    $error = "Invalid product data. Check all fields and try again.";
    include ('error.php');
}
else{
    require_once ('database.php');
    $query = "INSERT INTO product
                (id_category,code, name, price)
                VALUES 
                ('$id_category', '$code', '$name', '$price')";
    $db->exec($query);
    header('Location: index.php');
}
?>