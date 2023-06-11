<div class="table-responsive">
    <table class="table table-borderless">
        <tbody>
        <?php ($pos_parent = ''); ?>
        <?php $__currentLoopData = $arus_kas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($value->akun->parent_kode != $pos_parent): ?>
                <tr>
                    <td class="text-nowrap py-1" colspan="2"><b><?php echo e($value->akun->parent->nama); ?></b></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td class="text-nowrap py-1 pl-4"><?php echo e($value->akun->kode . ' - ' . $value->akun->nama); ?></td>
                <td class="text-right py-1" width="150px"><?php echo e(format_number($value->saldo)); ?></td>
            </tr>
            <?php ($pos_parent = $value->akun->parent_kode); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="py-1" colspan="2"><hr class="my-1"></td>
        </tr>
        <tr>
            <td class="text-nowrap py-1"><b>Total Kas</b></td>
            <td class="text-right py-1" width="150px"><b><?php echo e(format_number($arus_kas->sum('saldo'))); ?></b></td>
        </tr>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/arus_kas/_table.blade.php ENDPATH**/ ?>