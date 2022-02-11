<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';
//exit;

echo $_SERVER['REQUEST_METHOD'];

//if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    $statement = $pdo->prepare("INSERT INTO proudcts (title, image, description, price, create_date)
                       VALUES (:title, :image, :description, :price, :date)");

    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->execute();
//}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">

    <title>Products CRUD</title>
</head>
<body>
<h1>Create new product</h1>

<form action="create.php" method="post">
    <div class="mb-3">
        <label>Product Image</label>
        <br/>
        <input type="file" name="file">
    </div>
    <div class="mb-3">
        <label>Product Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3">
        <label>Product Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label>Product Price</label>
        <input type="number" step=".01" name="price" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>