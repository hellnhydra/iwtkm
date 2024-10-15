<!-- resources/views/client/conferences/show.blade.php -->

<h1><?php echo e($conference['name']); ?></h1>

<p><strong>Data:</strong> <?php echo e($conference['date']); ?></p>
<p><strong>Aprasymas:</strong> <?php echo e($conference['description']); ?></p>
<p><strong>Vieta:</strong> <?php echo e($conference['location']); ?></p>

<a href="<?php echo e(url('/client')); ?>">Grizti i konferenciju sarasa</a>
<?php /**PATH C:\xampp\htdocs\armin\resources\views/client/conferences/show.blade.php ENDPATH**/ ?>