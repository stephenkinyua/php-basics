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


<!-- <form action='' enctype="multipart/form-data" method='POST'>
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
</form> -->
