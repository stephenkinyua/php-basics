<?php

/** @var $pdo \PDO */
require_once '../../database.php';

$search = $_GET['search'] ?? '';

if ($search) {
    $statement = $pdo->prepare("SELECT * FROM products WHERE title LIKE :search ORDER BY created_at DESC");
    $statement->bindValue(':search', "%$search%");
} else {
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY created_at DESC');
}

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include_once '../../views/partials/header.php'; ?>

    <div class="container">
        <div class="my-4">
            <h1>Products CRUD</h1>
            <a href='create.php' class="btn btn-link">Create Product</a>
        </div>

        <!-- Search Section -->
        <form method='GET' action="">
            <div class="input-group mb-3">
                <input value='<?php echo $search ?>' type="text" class="form-control" placeholder="Search" aria-label="Search" name='search'  aria-describedby="button">
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $i => $product): ?>
                <tr >
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td>
                        <img style="height: 40px;" class='thmb-image' src='<?php echo $product['image'] ?>' alt='Product image' />
                    </td>
                    <td><?php echo $product['title'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $product['created_at'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <form class="d-inline" method='POST' action='delete.php'>
                            <input name='id' type="hidden" value="<?php echo $product['id'] ?>" />
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>