<?php
require ('database.php');
$query = 'SELECT *
            FROM category
            ORDER BY  id';
$categories = $db->query($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="page">
        <div class="header">
            <h1>Product Manager</h1>
        </div>
        <div class="main">
            <h1>Add Product</h1>
            <form action="add_product.php" method="post">
            <div class="item">
                <h3>Category:</h3>
                <select name="id_category">
                    <?php foreach ($categories as $category):  ?>
                        <option value="<?php echo $category['id']; ?>">
                            <?php echo $category['name']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="item">
                <h3>Code:</h3>
                <input type="input" name="code">
            </div>
            <div class="item">
                <h3>Name:</h3>
                <input type="input" name="name">
            </div>
            <div class="item">
                <h3>List Price</h3>
                <input type="input" name="price">
            </div>
            <div class="item"><input type="submit" value="Add Product"></div>
            </form>
            <h3><a href="index.php">View Product List</a></h3>
        </div>
        <div class="footer">
            <p>&copy; <?php
                $t = time();
                echo(date("s:m:h", $t)); ?> My shop</p>
        </div>
    </div>
</body>
</html>
