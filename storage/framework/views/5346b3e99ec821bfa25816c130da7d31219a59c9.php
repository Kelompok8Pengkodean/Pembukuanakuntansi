<div class="table-responsive">
    <table class="table table-bordered">
        <tbody>
        <?php $__currentLoopData = $jurnal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="background-color: #eaeaea;">
                <td class="text-nowrap py-1" width="150px"><b><?php echo e(format_date($value->tanggal)); ?></b></td>
                <td class="text-nowrap py-1" colspan="4"><b><?php echo e($value->keterangan); ?></b></td>
            </tr>
            <?php $__currentLoopData = $value->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-nowrap py-1" width="100px"></td>
                    <td class="text-nowrap py-1"><?php echo e($item->akun->kode . ' - ' . $item->akun->nama); ?></td>
                    <td class="text-nowrap py-1 text-right"><?php echo e(format_number($item->debit)); ?></td>
                    <td class="text-nowrap py-1 text-right"><?php echo e(format_number($item->kredit)); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="py-1" colspan="5"></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/jurnal/_table.blade.php ENDPATH**/ ?>