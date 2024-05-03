

<?php $__env->startSection('diary_cteate'); ?>



<!-- <?php if($errors->any()): ?>
    <div>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?> -->
<?php echo Auth::user(); ?>
<form method="post" action="../resource" enctype='multipart/form-data'>
    <?php echo csrf_field(); ?>
    <div>
        <label>タイトル：</label>
        <input type="text" name="title" value="<?php echo e(old('title')); ?>">
        <!-- <?php if($errors->has('title')): ?>
            <p><?php echo e($errors->first('title')); ?></p>
            <?php endif; ?> -->
    </div>
    <div>
        <label>投稿内容：</label>
        <input type="text" name="comment" value="<?php echo e(old('comment')); ?>">
        <!-- <?php if($errors->has('comment')): ?>
            <p><?php echo e($errors->first('comment')); ?></p>
            <?php endif; ?> -->
    </div>
    <div>
        <label>画像投稿：</label>
        <input type="file" name="image">
    </div>

    <button type="submit">登録</button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/diary_create.blade.php ENDPATH**/ ?>