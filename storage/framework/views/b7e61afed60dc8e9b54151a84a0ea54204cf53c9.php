<?php if(!empty($transaksi)): ?>
    <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-pencil mr-2"></i> Ubah</h5>
<?php else: ?>
    <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-plus mr-2"></i> Tambah</h5>
<?php endif; ?>
<form id="transaksi_form" method="post">
    <?php echo csrf_field(); ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'error','id' => 'alert_transaksi']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
    <input type="hidden" name="id" value="<?php echo e($transaksi->id ?? ''); ?>">
    <div class="row">
        <div class="col-md-2">
            <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'no_transaksi','caption' => 'No.Transaksi']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'no_transaksi','value' => ''.e($no_transaksi).'']); ?>
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
            <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'tanggal','caption' => 'Tanggal']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'tanggal','value' => ''.e(format_date($transaksi->tanggal ?? date('Y-m-d'))).'','class' => 'datepicker']); ?>
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
        <div class="col-md-8">
            <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'keterangan','caption' => 'Keterangan']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'keterangan','value' => ''.e($transaksi->keterangan ?? '').'']); ?>
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
    </div>
    <div class="text-right">
        <?php if(!empty($transaksi)): ?>
            <button type="button" class="btn btn-danger px-3 float-left" onclick="confirm_delete(<?php echo e($transaksi->id); ?>)">Hapus</button>
        <?php endif; ?>
        <button type="button" class="btn btn-default px-3" onclick="clear_form()">Batal</button>
        <button type="submit" class="btn btn-primary px-3"><?php echo e(!empty($transaksi) ? 'Simpan' : 'Lanjutkan'); ?></button>
    </div>
</form>
<div id="transaksi_detail_table"></div>

<script>
    init_form_element();
    $transaksi_form = $('#transaksi_form');
    $transaksi_form.submit((e) => {
        e.preventDefault();
        let data = new FormData($transaksi_form.get(0));
        $.ajax({
            url: "<?php echo e(route('transaksi.save')); ?>",
            type: 'post',
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result) {
                <?php if(empty($transaksi)): ?>
                    edit_transaksi(result.id);
                <?php endif; ?>
                search_transaksi(selected_page);
                clear_form();
            },
        }).fail((xhr) => {
            let error = JSON.parse(xhr.responseText);
            if (error.errors) {
                displayErrors('alert_transaksi', error.errors);
            } else {
                console.log(xhr.responseText);
            }
        });
    });
    confirm_delete = (id) => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
            console.log(result);
            if (result.value === true) {
                delete_transaksi(id);
            }
        })
    }
    delete_transaksi = (id) => {
        let data = {_token: '<?php echo e(csrf_token()); ?>', id};
        $.post("<?php echo e(route('transaksi.delete')); ?>", data, () => {
            search_transaksi(selected_page);
            clear_form();
        }).fail((xhr) => {
            console.log(xhr.responseText);
        });
    }
    <?php if(!empty($transaksi)): ?>
        $transaksi_detail_table = $('#transaksi_detail_table');
        search_detail = (transaksi_id) => {
            $.post("<?php echo e(route('transaksi.search_detail')); ?>", {
                _token: '<?php echo e(csrf_token()); ?>', transaksi_id
            }, (result) => {
                $transaksi_detail_table.html(result);
            }).fail((xhr) => {
                $transaksi_detail_table.html(xhr.responseText);
            });
        }
        search_detail('<?php echo e($transaksi->id ?? ''); ?>');

    save_detail = () => {
        $akun_id = $('#akun_id');
        $debit = $('#debit');
        $kredit = $('#kredit');
        $.post("<?php echo e(route('transaksi.save_detail')); ?>", {
            _token : '<?php echo e(csrf_token()); ?>',
            transaksi_id: '<?php echo e($transaksi->id); ?>',
            akun_id: $akun_id.find('option:selected').val(),
            debit: $debit.val(),
            kredit: $kredit.val(),
        }, () => {
            search_detail('<?php echo e($transaksi->id); ?>');
        }).fail((xhr) => {
            let error = JSON.parse(xhr.responseText);
            if (error.errors) {
                displayErrors('alert_transaksi', error.errors);
            } else {
                console.log(xhr.responseText);
            }
        });
    }
    delete_detail = (id) => {
        $.post("<?php echo e(route('transaksi.delete_detail')); ?>", {
            _token : '<?php echo e(csrf_token()); ?>', id
        }, () => {
            search_detail('<?php echo e($transaksi->id); ?>');
        }).fail((xhr) => {
            console.log(xhr.responseText);
        });
    }
    <?php endif; ?>
</script>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/transaksi/_info.blade.php ENDPATH**/ ?>