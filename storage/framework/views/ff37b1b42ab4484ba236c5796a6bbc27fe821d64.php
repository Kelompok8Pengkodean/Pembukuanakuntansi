<div class="table-responsive mt-3">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="30px">No</th>
            <th>Akun</th>
            <th class="text-right">Debit</th>
            <th class="text-right">Kredit</th>
            <th width="30px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if(method_exists($transaksi_detail, 'links')): ?>
            <?php
                $transaksi_detail = $transaksi_detail ?? null;
                $no = (($transaksi_detail->currentPage()-1) * $transaksi_detail->perPage()) + 1
            ?>
        <?php else: ?>
            <?php ($no = 1); ?>
        <?php endif; ?>
        <?php $__currentLoopData = $transaksi_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no++); ?></td>
                <td class="text-nowrap"><?php echo e($value->akun->kode . ' ' . $value->akun->nama); ?></td>
                <td class="text-right"><?php echo e(format_number($value->debit)); ?></td>
                <td class="text-right"><?php echo e(format_number($value->kredit)); ?></td>
                <td class="p-0 text-center vertical-middle" width="30px">
                    <button type="button" class="btn btn-danger btn-sm py-1" onclick="delete_detail(<?php echo e($value->id); ?>)">
                        <i class="mdi mdi-close"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>#</td>
            <td class="p-0 vertical-middle">
                <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, ['name' => 'akun_id','options' => $list_akun,'class' => 'select2']); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>
            </td>
            <td class="p-0 vertical-middle" width="200px">
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'debit','class' => 'autonumeric text-right','value' => '0']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
            </td>
            <td class="p-0 vertical-middle" width="200px">
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'kredit','class' => 'autonumeric text-right','value' => '0']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7)): ?>
<?php $component = $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7; ?>
<?php unset($__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7); ?>
<?php endif; ?>
            </td>
            <td class="p-0 text-center vertical-middle" width="30px">
                <button type="button" class="btn btn-primary btn-sm py-1" onclick="save_detail()">
                    <i class="mdi mdi-plus"></i>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<?php if(method_exists($transaksi_detail, 'links')): ?>
    <?php echo e($transaksi_detail->links('vendor.pagination.custom', ['function' => 'search_transaksi_detail'])); ?>

<?php endif; ?>

<script>
    init_form_element();
</script>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/transaksi/_table_detail.blade.php ENDPATH**/ ?>