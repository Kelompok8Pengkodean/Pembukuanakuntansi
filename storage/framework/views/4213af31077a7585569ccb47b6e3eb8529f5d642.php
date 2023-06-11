<select
    name="<?php echo e($name); ?>"
    id="<?php echo e($prefix.$name); ?>"
    class="form-control <?php echo e($class); ?>"
    <?php echo e($attributes); ?>

>
    <?php if($default == '1'): ?>
        <option value=""><?php echo e($caption); ?></option>
    <?php endif; ?>
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>" <?php if($key == $value): ?> selected <?php endif; ?>><?php echo e($option); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/components/select.blade.php ENDPATH**/ ?>