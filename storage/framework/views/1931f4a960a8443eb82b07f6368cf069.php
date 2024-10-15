

<!-- resources/views/admin/index.blade.php -->



<?php $__env->startSection('content'); ?>
<h1>Conferences</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($conferences) && count($conferences) > 0): ?>
            <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($conference->id); ?></td>
                    <td><?php echo e($conference->name); ?></td>
                    <td><?php echo e($conference->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('conferences.edit', $conference->id)); ?>">Edit</a>
                        <!-- You can also add a "Delete" link here if needed -->
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No conferences found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<a href="<?php echo e(route('conferences.create')); ?>">Create New Conference</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kysv2\resources\views/admin/index.blade.php ENDPATH**/ ?>