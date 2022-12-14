<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', 'testing321');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$errors = [];
$title = '';
$price = '';
$description = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  # Super globals
  $title = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $date = date('Y-m-d H:i:s');

  if (!$title) {
    $errors[] = 'Product title is required.';
  }

  if (!$price) {
    $errors[] = 'Product price is required.';
  }

  if (!is_dir('images')) {
    mkdir('images');
  }

  if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $image_path = '';

    if ($image && $image['tmp_name']) {
      $image_path = 'images/'.random_string(8).'/'.$image['name'];

      mkdir(dirname($image_path));
      move_uploaded_file($image['tmp_name'], $image_path);
    }

    $statement = $pdo->prepare(
      "INSERT INTO products (title, image, description, price, created_at)
        VALUES (:title, :image, :description, :price, :date)"
    );
    $statement -> bindValue(':title', $title);
    $statement -> bindValue(':description', $description);
    $statement -> bindValue(':price', $price);
    $statement -> bindValue(':image', $image_path);
    $statement -> bindValue(':date', $date);

    $statement -> execute();
    header('Location: index.php');
  }
}

function random_string($n) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $str = '';

  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $str .= $characters[$index];
  }

  return $str;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Create New Product</title>
</head>
<body>
    <div class="container">
        <div class="my-4">
            <h1>Create New Product</h1>
            <a href='index.php' class="btn btn-link">Home</a>
        </div>

        <?php if (!empty($errors)): ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
              <span class="d-block"><?php echo $error ?></span>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <form action='' enctype="multipart/form-data" method='POST'>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="" name='image' id="image">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Product Title</label>
                <input name='title' value="<?php echo $title ?>" type="text" class="form-control" id="title" >
            </div>

            <div class="mb-3">
                <label class="form-check-label" for="description">Description</label>
                <textarea class="form-control" name='description' id="description"><?php echo $description ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Price</label>
                <input value="<?php echo $price ?>" type="number" min='0' name='price' class="form-control" id="price">
            </div>
            <button type="submit" class="btn btn-success">Save Product</button>
        </form>

    </div>
</body>
</html>
