<h1>Visos konferencijos</h1>
<ul>
    <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <a href="/employee/conference/<?php echo e($conference['id']); ?>"><?php echo e($conference['name']); ?></a>
            <p><?php echo e($conference['description']); ?></p>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\xampp\htdocs\kysv2\resources\views/employee/conferences.blade.php ENDPATH**/ ?>