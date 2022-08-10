<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', 'testing321');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if (!$id) {
  header('Location: index.php');
  exit;
}

$statement = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];

$title = $product['title'];
$description = $product['description'];
$price = $product['price'];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $title = $_POST['title'];
  $price = $_POST['price'];
  $description = $_POST['description'];

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
    $image_path = $product['image'];

    if ($image && $image['tmp_name']) {
        if ($product['image']) {
            unlink($product['image']);
        }

        $image_path = 'images/'.random_string(8).'/'.$image['name'];

        mkdir(dirname($image_path));
        move_uploaded_file($image['tmp_name'], $image_path);
        echo $image_path;
    }

    $statement = $pdo->prepare(
      "UPDATE products SET title = :title, 
        image = :image, 
        description = :description, 
        price = :price WHERE id = :id"
    );
    $statement -> bindValue(':title', $title);
    $statement -> bindValue(':description', $description);
    $statement -> bindValue(':price', $price);
    $statement -> bindValue(':image', $image_path);
    $statement -> bindValue(':id', $id);

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

<?php include_once 'views/partials/header.php'; ?>

    <div class="container">
        <div class="my-4">
            <h1>Update Product</h1>
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
            <?php if ($product['image']): ?>
                <img style="height: 50px;" class='thmb-image' src='<?php echo $product['image'] ?>' alt='Product image' />
            <?php endif; ?>

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
