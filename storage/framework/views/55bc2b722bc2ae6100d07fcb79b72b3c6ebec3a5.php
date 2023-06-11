<?php if(!empty($akun)): ?>
    <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-pencil mr-2"></i> Ubah</h5>
<?php else: ?>
    <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-plus mr-2"></i> Tambah</h5>
<?php endif; ?>
<form id="akun_form" method="post">
    <?php echo csrf_field(); ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'error','id' => 'alert_akun']); ?>
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
    <input type="hidden" name="id" value="<?php echo e($akun->id ?? ''); ?>">
    <input type="hidden" name="kode" value="<?php echo e($kode ?? '-'); ?>">
    <input type="hidden" name="parent_kode" value="<?php echo e($parent_kode ?? '-'); ?>">
    <?php if($is_child == true): ?>
        <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'parent','caption' => 'Parent']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'parent','value' => ''.e($parent->nama ?? '').'']); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['readonly' => true]); ?>
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
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal1c669f5858ba8e548f3c58b275327fb2f8e6401a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FormGroup::class, ['id' => 'nama','caption' => 'Nama']); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['name' => 'nama','value' => ''.e($akun->nama ?? '').'']); ?>
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
        <?php if(!empty($akun)): ?>
            <button type="button" class="btn btn-danger px-3 float-left" onclick="confirm_delete(<?php echo e($akun->id); ?>)">Hapus</button>
        <?php endif; ?>
        <button type="button" class="btn btn-default px-3" onclick="clear_form()">Batal</button>
        <button type="submit" class="btn btn-primary px-3">Simpan</button>
        <?php if(!empty($akun)): ?>
            <hr class="border-white">
            <div class="row">
                <div class="col-md-5">
                    <div class="btn-group mr-5" role="group">
                        <button type="button" class="btn btn-primary" onclick="reosisi('down', '<?php echo e($akun->id); ?>')"><i class="bx bx-down-arrow-alt"></i></button>
                        <button type="button" class="btn btn-primary" onclick="reosisi('up', '<?php echo e($akun->id); ?>')"><i class="bx bx-up-arrow-alt"></i></button>
                    </div>
                </div>
                <div class="col-md-7">
                    <?php if($is_child == false): ?>
                        <button type="button" class="btn btn-success btn-block px-3" onclick="add_child('<?php echo e($akun->kode); ?>')">Tambahkan Sub</button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</form>

<script>
    init_form_element();
    $akun_form = $('#akun_form');
    $akun_form.submit((e) => {
        e.preventDefault();
        let data = new FormData($akun_form.get(0));
        $.ajax({
            url: "<?php echo e(route('akun.save')); ?>",
            type: 'post',
            data: data,
            cache: false,
            processData: false,
            contentType: false,
            success: function() {
                search_akun();
                clear_form();
            },
        }).fail((xhr) => {
            let error = JSON.parse(xhr.responseText);
            if (error.errors) {
                displayErrors('alert_akun', error.errors);
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
                delete_akun(id);
            }
        })
    }
    delete_akun = (id) => {
        let data = {_token: '<?php echo e(csrf_token()); ?>', id};
        $.post("<?php echo e(route('akun.delete')); ?>", data, () => {
            search_akun();
            clear_form();
        }).fail((xhr) => {
            console.log(xhr.responseText);
        });
    }
    reosisi = (arah, id) => {
        $.post("<?php echo e(route('akun.reposisi')); ?>", {
            _token: '<?php echo e(csrf_token()); ?>', arah, id
        }, () => {
            search_akun();
            clear_form();
        }).fail((xhr) => {
            console.log(xhr.responseText);
        });
    }
</script>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/akun/_info.blade.php ENDPATH**/ ?>