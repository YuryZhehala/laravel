<?php $__env->startSection('content'); ?>
      <h2><?php echo e($obj->name); ?></h2>
      <?php echo $obj->body; ?>   
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>