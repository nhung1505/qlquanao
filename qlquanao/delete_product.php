<?php
    $id_product = $_POST['id_product'];
    $id_category = $_POST['id_category'];

    require('database.php');
    $query = "DELETE FROM product WHERE id_product = '$id_product'";
    $db->exec($query);
    echo $query;
    header('Location: index.php');
    ?>