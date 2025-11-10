<?php $__currentLoopData = $JobList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserRegistration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <?php echo e($UserRegistration->fullname); ?> : <?php echo e($UserRegistration->email); ?> : <?php echo e($UserRegistration->password); ?> : <?php echo e($UserRegistration->role); ?> : <?php echo e($UserRegistration->phone); ?>

        : <?php echo e($UserRegistration->city); ?> : <?php echo e($UserRegistration->qualification); ?> : <?php echo e($UserRegistration->experience); ?> : <?php echo e($UserRegistration->languages); ?>

    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\yadav\OneDrive\Documents\Desktop\Laravelandcomposer\mini_project\resources\views/JobListpage.blade.php ENDPATH**/ ?>