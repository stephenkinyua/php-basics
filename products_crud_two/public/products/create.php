<?php

/** @var $pdo \PDO */
require_once '../../database.php';
require_once '../../functions.php';

$errors = [];
$title = '';
$price = '';
$description = '';


$product = [
  'title' => '',
  'price' => '',
  'image' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  require_once '../../validate_product.php';

  if (empty($errors)) {
    $statement = $pdo->prepare(
      "INSERT INTO products (title, image, description, price, created_at)
        VALUES (:title, :image, :description, :price, :date)"
    );
    $statement -> bindValue(':title', $title);
    $statement -> bindValue(':description', $description);
    $statement -> bindValue(':price', $price);
    $statement -> bindValue(':image', $image_path);
    $statement -> bindValue(':date', date('Y-m-d H:i:s'));

    $statement -> execute();
    header('Location: index.php');
  }
}
?>

<?php include_once '../../views/partials/header.php'; ?>

    <div class="container">
        <div class="my-4">
            <h1>Create New Product</h1>
            <a href='index.php' class="btn btn-link">Home</a>
        </div>

        <?php include_once '../../views/products/form.php'; ?>

    </div>
</body>
</html>
