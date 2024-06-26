<?php echo form_open(current_url(),
    [
        'id' => 'list-form',
        'role' => 'form',
        'method' => 'POST',
    ]
); ?>


<div class="list-extensions pt-3 px-3 pb-0">
    <?php if(count($records)): ?>
        <?php echo $this->makePartial('lists/list_body'); ?>

    <?php else: ?>
        <div class="card bg-light border-none">
            <div class="card-body p-3"><?php echo e($emptyMessage); ?></div>
        </div>
    <?php endif; ?>
</div>

<?php echo form_close(); ?>


<?php echo $this->makePartial('lists/list_pagination'); ?>


<?php echo $this->makePartial('updates/recommended', ['itemType' => 'extension']); ?>

<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/system/views/extensions/lists/list.blade.php ENDPATH**/ ?>