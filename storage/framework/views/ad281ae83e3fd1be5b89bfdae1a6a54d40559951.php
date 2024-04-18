<div
    id="<?php echo e($toolbarId); ?>"
    class="toolbar btn-toolbar <?php echo e($cssClasses); ?>"
>
    <?php if($availableButtons): ?>
        <div class="toolbar-action">
            <div class="progress-indicator-container">
                <?php $__currentLoopData = $availableButtons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buttonObj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $this->renderButtonMarkup($buttonObj); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/admin/widgets/toolbar/toolbar.blade.php ENDPATH**/ ?>