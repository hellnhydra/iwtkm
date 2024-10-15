<!-- resources/views/client/conferences/index.blade.php -->

<?php if(session('success')): ?>
    <p style="color: green;"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<h1>Konferenciju sarasas</h1>

<?php if(!empty($conferences)): ?>
    <ul>
        <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($conference['name']); ?> - <?php echo e($conference['date']); ?>

                <br>
                <a href="<?php echo e(url('/client/conference/' . $conference['id'])); ?>">Perziureti</a> | 
                <form action="<?php echo e(url('/client/conference/register/' . $conference['id'])); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Registracija</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php else: ?>
    <p>Nera konferenciju</p>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\armin\resources\views/client/conferences/index.blade.php ENDPATH**/ ?>