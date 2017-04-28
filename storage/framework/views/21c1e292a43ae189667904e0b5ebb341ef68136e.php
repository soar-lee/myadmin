<div class="form-group <?php echo !$errors->has($errorKey) ?: 'has-error'; ?>">

    <label for="<?php echo e($id['lat']); ?>" class="col-sm-<?php echo e($width['label']); ?> control-label"><?php echo e($label); ?></label>

    <div class="col-sm-<?php echo e($width['field']); ?>">

        <?php echo $__env->make('admin::form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div id="map_<?php echo e($id['lat'].$id['lng']); ?>" style="width: 100%;height: 300px"></div>
        <input type="hidden" id="<?php echo e($id['lat']); ?>" name="<?php echo e($name['lat']); ?>" value="<?php echo e(old($column['lat'], $value['lat'])); ?>" <?php echo $attributes; ?> />
        <input type="hidden" id="<?php echo e($id['lng']); ?>" name="<?php echo e($name['lng']); ?>" value="<?php echo e(old($column['lng'], $value['lng'])); ?>" <?php echo $attributes; ?> />

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>
