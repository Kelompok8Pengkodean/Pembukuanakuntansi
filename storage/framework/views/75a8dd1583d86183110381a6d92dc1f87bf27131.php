<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th width="30px">No</th>
            <th>No.Transaksi</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th class="text-right">Nominal</th>
            <th width="30px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if(method_exists($transaksi, 'links')): ?>
            <?php
                $transaksi = $transaksi ?? null;
                $no = (($transaksi->currentPage()-1) * $transaksi->perPage()) + 1
            ?>
        <?php else: ?>
            <?php ($no = 1); ?>
        <?php endif; ?>
        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td class="text-nowrap"><?php echo e($value->no_transaksi); ?></td>
                <td class="text-nowrap"><?php echo e(format_date($value->tanggal)); ?></td>
                <td class="text-nowrap"><?php echo e($value->keterangan); ?></td>
                <td class="text-right"><?php echo e(format_number($value->nominal)); ?></td>
                <td class="p-0 text-center vertical-middle" width="30px">
                    <div class="btn-group dropleft">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle py-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-menu-left"></i>
                        </button>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="javascript:void(0)" onclick="edit_transaksi(<?php echo e($value->id); ?>)">Ubah</a>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php if(method_exists($transaksi, 'links')): ?>
    <?php echo e($transaksi->links('vendor.pagination.custom', ['function' => 'search_transaksi'])); ?>

<?php endif; ?>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/transaksi/_table.blade.php ENDPATH**/ ?>