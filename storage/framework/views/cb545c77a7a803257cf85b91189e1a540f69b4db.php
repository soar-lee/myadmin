<div class="form-group <?php echo !$errors->has($errorKey) ?: 'has-error'; ?>">

    <label for="<?php echo e($id); ?>" class="col-sm-<?php echo e($width['label']); ?> control-label"><?php echo e($label); ?></label>

    <div class="col-sm-<?php echo e($width['field']); ?>">

        <?php echo $__env->make('admin::form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <input type="checkbox" class="<?php echo e($class); ?> la_checkbox" <?php echo e(old($column, $value) == 'on' ? 'checked' : ''); ?> <?php echo $attributes; ?> />
        <input type="hidden" class="<?php echo e($class); ?>" name="<?php echo e($name); ?>" class="" value="<?php echo e(old($column, $value)); ?>" />

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>
