<h1>Create Product</h1>

<form action="/products" method="POST">
    <?php echo csrf_field(); ?>
    Name : <input type="text" name="name"><br>
    description : <input type="text" name="description"><br>
    Price : <input type="text" name="price"><br>
    Image : <input type="text" name="image_url"><br>

    <input type="submit" name="Save">

</form>
<?php /**PATH D:\HELENA\app\lamara\resources\views/products/create.blade.php ENDPATH**/ ?>