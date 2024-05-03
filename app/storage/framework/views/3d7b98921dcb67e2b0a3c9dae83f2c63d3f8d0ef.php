<main>
    <h2>パスワード再設定</h2>
    <p>ご利用中のメールアドレスを入力してください</p>
    <p>パスワード再設定のためのURLをお送りします</p>
    <form method="POST" action="<?php echo e(route('reset.send')); ?>">
        <?php echo csrf_field(); ?>
        <div>
            <label>メールアドレス</label>
            <input type="text" name="mail" value="<?php echo e(old('mail')); ?>">
            <span><?php echo e($errors->first('mail')); ?></span>
        </div>
        <div>
            <a href="<?php echo e(route('login')); ?>">戻る</a>
            <button type="submit">再設定メールを送信</button>
        </div>
    </form>
</main><?php /**PATH /var/www/html/resources/views/users/reset_input_mail.blade.php ENDPATH**/ ?>