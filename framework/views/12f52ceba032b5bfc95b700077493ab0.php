<?php echo e($contactInfo['name']); ?> 様よりお問い合わせ下記の内容でお問い合わせがありました
内容を確認しご対応をお願いします。

【お問い合わせ内容】
お名前: <?php echo e($contactInfo['name']); ?>

お名前（フリガナ）: <?php echo e($contactInfo['name_kana']); ?>

メールアドレス: <?php echo e($contactInfo['email']); ?>

電話番号: <?php echo e($contactInfo['phone']); ?>

お問い合わせ内容:
<?php echo e($contactInfo['body']); ?>


※このメールは配信専用のアドレスで配信されています。
このメールに返信されても返信内容の確認およびご返答ができませんので、ご了承ください。<?php /**PATH /var/www/html/resources/views/emails/contact/admin.blade.php ENDPATH**/ ?>