<?php
    require 'database.php';
   if (isset($_GET['id'])){
       $id_category = $_GET['id'];

       } else{
        $id_category =1;
   }
    $query = "SELECT * FROM category
              WHERE id = $id_category";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['name'];

    $query = "SELECT * FROM `category`";
    $categories = $db->query($query);

    $query = "SELECT * FROM product WHERE  id_category = $id_category ";
    $products = $db->query($query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
   <div class="page">
       <h1>Product List</h1>
       <div>
           <div class="sidebar">

               <h2>Categories</h2>
               <ul>
                   <?php foreach ($categories as $category): ?>
                       <li>
                           <a href="?id=<?php echo $category['id']; ?>">
                               <?= $category["name"]; ?>
                           </a>
                       </li>
                   <?php endforeach; ?>
               </ul>

           </div>
           <div class="content">
               <h2><?php echo $category_name;?></h2>
               <table>
                   <tr>
                       <th>code</th>
                       <th>name</th>
                       <th>price</th>
                       <th></th>
                   </tr>
                   <?php foreach ($products as $product) : ?>
                       <tr>
                           <td><?php echo $product['code']; ?></td>
                           <td><?php echo $product['name']; ?></td>
                           <td><?php echo $product['price']; ?></td>
                           <td>
                               <form action="delete_product.php" method="post">
                                   <input type="hidden" name="id_product" value="<?php echo $product['id_product']; ?>" />
                                   <input type="hidden" name="id_category" value="<?php echo $product['id_category']; ?>" />
                                   <input type="submit" value="delete">
                               </form>
                           </td>
                       </tr>
                   <?php endforeach; ?>

               </table>
           </div>

       </div>
   </div>
</body>
</html>
