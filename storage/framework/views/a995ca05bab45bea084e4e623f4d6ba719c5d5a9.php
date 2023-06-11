

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
            <td class="bg-light" id="jurnal_search">
                <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-database-search mr-2"></i> Search</h5>
                <form id="search_form">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'search_tanggal_mulai','caption' => 'Tanggal Mulai']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['prefix' => 'search_','name' => 'tanggal_mulai','class' => 'datepicker']); ?>
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
                        </div>
                        <div class="col-md-4">
                            <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'search_tanggal_sampai','caption' => 'Tanggal Mulai']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['prefix' => 'search_','name' => 'tanggal_sampai','class' => 'datepicker']); ?>
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
                        </div>
                        <div class="col-md-2">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block mt-2">Search</button>
                        </div>
                        <div class="col-md-2">
                            <br>
                            <button type="button" class="btn btn-success btn-block mt-2" onclick="cetak()">Cetak</button>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-database mr-2"></i> Data <?php echo e($title); ?></h5>
                <div id="jurnal_table"></div>
            </td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        init_form_element();

        // search
        $search_form = $('#search_form');
        $jurnal_table = $('#jurnal_table');
        search_jurnal = () => {

            let data = getFormData($search_form);
            $.post("<?php echo e(route('jurnal.search')); ?>", data, (result) => {
                $jurnal_table.html(result);
            }).fail((xhr) => {
                $jurnal_table.html(xhr.responseText);
            });
        }
        search_jurnal();
        $search_form.submit((e) => {
            e.preventDefault();
            search_jurnal();
        });

        cetak = () => {
            let tanggal_mulai = $('#search_tanggal_mulai').val(),
                tanggal_sampai = $('#search_tanggal_sampai').val();
            let params = [
                'tanggal_mulai=' + tanggal_mulai,
                'tanggal_sampai=' + tanggal_sampai,
            ];
            window.open("<?php echo e(route('jurnal.cetak')); ?>?" + params.join('&'), '_blank');
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/jurnal/index.blade.php ENDPATH**/ ?>