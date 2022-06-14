<h1>Edit Product</h1>

<form action="/products/<?php echo e($product->id); ?>" method="POST">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    Name : <input type="text" name="name" value="<?php echo e($product->name); ?>"><br>
    description : <input type="text" name="description" value="<?php echo e($product->description); ?>"><br>
    Price : <input type="text" name="price" value="<?php echo e($product->price); ?> "><br>
    Image : <input type="text" name="image_url" value="<?php echo e($product->image_url); ?>"><br>

    <input type="submit" name="Save">

</form>
<?php /**PATH D:\HELENA\app\lamara\resources\views/products/edit.blade.php ENDPATH**/ ?>