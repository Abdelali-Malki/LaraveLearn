<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($task->name); ?></h1>
<?php $__currentLoopData = $task->omar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($item->name); ?></h1>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\laravel_autoFormation\eloquent2\resources\views/welcome.blade.php ENDPATH**/ ?>