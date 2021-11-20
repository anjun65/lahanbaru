<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?php echo $__env->yieldContent('title'); ?></title>

    
    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    
    <?php echo $__env->yieldPushContent('addon-style'); ?>

    <link href="<?php echo e(asset('/style/main.css')); ?>" rel="stylesheet"/>
    
  </head>

  <body>

    
    

    
    <?php echo $__env->yieldContent('content'); ?>


    
    
    
  </body>
</html>
<?php /**PATH /var/www/lahan/resources/views/layouts/pdf.blade.php ENDPATH**/ ?>