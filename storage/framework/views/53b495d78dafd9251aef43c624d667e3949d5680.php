<div class="dashboard-widget widget-activities">
    <h6 class="widget-title"><?php echo app('translator')->get($this->property('title')); ?></h6>

    <div class="row">
        <div class="list-group list-group-flush w-100">
            <?php $__empty_1 = true; $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="list-group-item bg-transparent">
                    <i class="<?php echo e($activity['icon']); ?> fa-fw bg-primary"></i>
                    <b><?php echo e($activity['causer']['staff_name'] ?? null); ?></b>
                    <?php echo $activity['message']; ?>

                    <em class="pull-right small"><?php echo e(time_elapsed($activity['created_at'])); ?></em>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="list-group-item bg-transparent"><?php echo app('translator')->get('admin::lang.dashboard.text_no_activity'); ?></div>
            <?php endif; ?>
        </div>

        <div class="text-right pt-3 px-3 w-100">
            <a href="<?php echo e(admin_url('activities')); ?>">
                <?php echo app('translator')->get('admin::lang.text_see_all_activity'); ?>&nbsp;<i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/system/dashboardwidgets/activities/activities.blade.php ENDPATH**/ ?>