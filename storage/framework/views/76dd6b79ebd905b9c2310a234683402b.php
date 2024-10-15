<h1><?php echo e($conference['name']); ?></h1>
<p><?php echo e($conference['description']); ?></p>
<h2>Uzsiregistrave dalyviai:</h2>
<ul>
    <?php $__currentLoopData = $participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($participant['name']); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\xampp\htdocs\armin\resources\views/employee/conference.blade.php ENDPATH**/ ?>