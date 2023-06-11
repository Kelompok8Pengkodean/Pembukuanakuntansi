

<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?> -
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"><?php echo e($title); ?></h4>
            </div>
        </div>
    </div>
    <table class="table bg-main" >
        <tr>
            <td class="bg-light" id="transaksi_info">
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-sm btn-success float-right px-3" onclick="add_new()">Tambah</button>
                <button class="btn btn-sm btn-info float-right px-3 mr-3" onclick="toggle_search()">search</button>
                <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-database mr-2"></i> Data <?php echo e($title); ?></h5>
                <div id="transaksi_table"></div>
            </td>
            <td class="bg-light" id="transaksi_search" width="350px">
                <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-database-search mr-2"></i> Search</h5>
                <form id="search_form">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'search_keterangan','caption' => 'Keterangan']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['prefix' => 'search_','name' => 'keterangan','caption' => 'Pencarian keterangan']); ?>
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
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a)): ?>
<?php $component = $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a; ?>
<?php unset($__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'search_no_transaksi','caption' => 'No.Transaksi']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['prefix' => 'search_','name' => 'no_transaksi','caption' => 'Pencarian no_transaksi']); ?>
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
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a)): ?>
<?php $component = $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a; ?>
<?php unset($__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'search_tanggal','caption' => 'Tanggal']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['prefix' => 'search_','name' => 'tanggal','caption' => 'Pencarian tanggal','class' => 'datepicker']); ?>
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
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a)): ?>
<?php $component = $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a; ?>
<?php unset($__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a); ?>
<?php endif; ?>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
            </td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        init_form_element();

        // manage ui
        $transaksi_data = $('#transaksi_data');
        $transaksi_search = $('#transaksi_search');
        $transaksi_search.hide();
        toggle_search = () => {
            $transaksi_search.toggle();
        }

        // search
        let selected_page = 1;
        $search_form = $('#search_form');
        $transaksi_table = $('#transaksi_table');
        search_transaksi = (page = 1) => {
            if (page.toString() === '+1') selected_page++;
            else if (page.toString() === '-1') selected_page--;
            else selected_page = page;

            let data = getFormData($search_form);
            data.paginate = 10;
            $.post("<?php echo e(route('transaksi.search')); ?>?page=" + selected_page, data, (result) => {
                $transaksi_table.html(result);
            }).fail((xhr) => {
                $transaksi_table.html(xhr.responseText);
            });
        }
        search_transaksi();
        $search_form.submit((e) => {
            e.preventDefault();
            search_transaksi();
        })

        // crud
        $transaksi_info = $('#transaksi_info');
        $transaksi_info.hide();
        add_new = () => {
            let data = {_token: '<?php echo e(csrf_token()); ?>'};
            $.post("<?php echo e(route('transaksi.info')); ?>", data, (result) => {
                $transaksi_info.html(result);
                $transaksi_info.show();
            }).fail((xhr) => {
                $transaksi_info.html(xhr.responseText);
                $transaksi_info.show();
            });
        }
        edit_transaksi = (id) => {
            let data = {_token: '<?php echo e(csrf_token()); ?>', id};
            $.post("<?php echo e(route('transaksi.info')); ?>", data, (result) => {
                $transaksi_info.html(result);
                $transaksi_info.show();
            }).fail((xhr) => {
                $transaksi_info.html(xhr.responseText);
                $transaksi_info.show();
            });
        }
        clear_form = () => {
            $transaksi_info.html('');
            $transaksi_info.hide();
        }

        let _token = '<?php echo e(csrf_token()); ?>';
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/transaksi/index.blade.php ENDPATH**/ ?>