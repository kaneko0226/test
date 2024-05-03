

<?php $__env->startSection('diary_edit'); ?>

<?php $__currentLoopData = $diaries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-12 ">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>日付</th>
                <th>コメント</th>
                <th>パンプ</th>
                <th>画像</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><?php echo e($diary['title']); ?></td>
                <td><?php echo e($diary['created_at']); ?></td>
                <td><?php echo e($diary['comment']); ?></td>
                <td><?php echo e($diary['pump']); ?></td>
                <td><?php echo e($diary['image']); ?></td>
            </tr>
        </tbody>
    </table>
    <?php echo e($diary['diary_id']); ?>

    <a href="/resource">ホーム画面に戻る</a>
    <a href="/diary_delete/<?php echo e($diary['diary_id']); ?>">削除</a>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/diary_edit.blade.php ENDPATH**/ ?>