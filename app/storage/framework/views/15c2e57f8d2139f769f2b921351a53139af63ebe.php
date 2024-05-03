

<?php $__env->startSection('home'); ?>
<?php echo Auth::user(); ?>

<div class="profiles">
    <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(isset($profile['name'])): ?>
    <div class="greeting">
        <span>ようこそ[</span>
        <tr>
            <th><?php echo e($profile['name']); ?></th>
        </tr>
        <span>]さん</span>
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="diary_create">
    <a href="resource/create">日記を書く</a>
</div>



<div class="diary_search">
    <form action="<?php echo e(route('postsearch')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>日付検索</label>
        <input type="date" name="from">
        <span class="mx-3">~</span>
        <input type="date" name="until">

        <label>パンプ</label>
        <input type="number" name="pump" value="<?php echo 0 ?>">
        <button type="submit">検索画面へ</button>
    </form>
</div>


<?php $__currentLoopData = $diaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-12 ">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>日記詳細</th>
                <th>タイトル</th>
                <th>日付</th>
                <th>画像</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><a href="<?php echo e(route('diary_edit',['id' => $diary['diary_id']])); ?>">#</a></td>
                <td><?php echo e($diary['title']); ?></td>
                <td><?php echo e($diary['created_at']); ?></td>
                <td> <img src="<?php echo e(asset('storage/images/' . $diary->image)); ?>" /></td>
                <button onclick="">いいね</button>
            </tr>
        </tbody>
    </table>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/home.blade.php ENDPATH**/ ?>