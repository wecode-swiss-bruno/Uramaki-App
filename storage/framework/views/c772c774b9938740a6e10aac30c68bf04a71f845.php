<ol class="breadcrumb py-2">
    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key == count($breadcrumbs) - 1): ?>
            <li class="breadcrumb-item active"><?php echo $breadcrumb['name']; ?></li>
        <?php else: ?>
            <li class="breadcrumb-item"><?php echo $breadcrumb['name']; ?></li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/main/widgets/mediamanager/breadcrumb.blade.php ENDPATH**/ ?>