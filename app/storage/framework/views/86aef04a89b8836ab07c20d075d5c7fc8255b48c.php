<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="test">
        <button tupe="submit">送信</button>
    </form>
</body>

</html><?php /**PATH /var/www/html/resources/views/test.blade.php ENDPATH**/ ?>