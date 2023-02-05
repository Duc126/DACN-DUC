
<?php $__env->startSection('content'); ?>
    <div class="b-container">
        <div class="b-panel">
            <?php switch($to):
                case ('admin'): ?>
                <h3 class="email-headline"><strong><?php echo e(__('Hello Administrator')); ?></strong></h3>
                <?php break; ?>
                <?php case ('customer'): ?>
                <h3 class="email-headline"><strong><?php echo e(__('Hello :name',['name'=>$user->getDisplayName() ?? ''])); ?></strong></h3>
                <?php break; ?>

            <?php endswitch; ?>
            <?php echo $content; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Email::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/DACN_LV/modules/User/Views/emails/registered.blade.php ENDPATH**/ ?>