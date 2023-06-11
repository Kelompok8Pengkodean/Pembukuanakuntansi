<?php $__currentLoopData = $akun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="table-responsive">
    <table class="table table-borderless">
        <tbody>
        <tr>
            <td class="py-1" colspan="6" style="background-color: #eaeaea;"><b><?php echo e($value->kode . ' - ' . $value->nama); ?></b></td>
        </tr>
        <?php ($saldo = 0); ?>
        <?php $__currentLoopData = $value->transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($saldo = $saldo + ($item->debit - $item->kredit)); ?>
            <tr>
                <td class="text-nowrap py-1" width="120px"><?php echo e(format_date($item->transaksi->tanggal)); ?></td>
                <td class="text-nowrap py-1" width="120px"><?php echo e($item->transaksi->no_transaksi); ?></td>
                <td class="text-nowrap py-1"><?php echo e($item->transaksi->keterangan); ?></td>
                <td class="text-nowrap py-1 text-right" width="170px"><?php echo e(format_number($item->debit)); ?></td>
                <td class="text-nowrap py-1 text-right" width="170px"><?php echo e(format_number($item->kredit)); ?></td>
                <td class="text-nowrap py-1 text-right" width="170px"><?php echo e(format_number($saldo)); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="py-1 border-top" colspan="3"></td>
            <td class="py-1 border-top text-right"><?php echo e(format_number($value->transaksi->sum('debit'))); ?></td>
            <td class="py-1 border-top text-right"><?php echo e(format_number($value->transaksi->sum('kredit'))); ?></td>
            <td class="py-1 border-top"></td>
        </tr>
        </tbody>
    </table>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/buku_besar/_table.blade.php ENDPATH**/ ?>