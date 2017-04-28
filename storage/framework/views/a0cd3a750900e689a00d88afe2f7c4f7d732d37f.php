<div class="form-group">
    <label for="<?php echo e($id); ?>" class="col-<?php echo e($width['label']); ?> control-label"><?php echo e($label); ?></label>

    <div class="col-sm-<?php echo e($width['field']); ?>">
        <input type="text" id="<?php echo e($id); ?>" name="<?php echo e($name); ?>" value="<?php echo e($value); ?>" class="form-control" readonly <?php echo $attributes; ?> />

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>