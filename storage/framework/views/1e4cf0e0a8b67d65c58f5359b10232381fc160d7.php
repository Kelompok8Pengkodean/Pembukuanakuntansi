

<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?> -
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link href="<?php echo e(asset('assets/libs/jstree/jstree.bundle.css?v=7.0.9')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopPush(); ?>

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
            <td>
                <button class="btn btn-sm btn-success float-right px-3" onclick="add_new()">Tambah</button>
                <h5 class="mt-0 mb-4 text-white"><i class="mdi mdi-database mr-2"></i> Data <?php echo e($title); ?></h5>
                <div id="akun_table">
                    <?php if (isset($component)) { $__componentOriginal11c02d5af8eef3b9ca8b54c54983d5cb581e68d7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Input::class, ['prefix' => 'search_','name' => 'nama','caption' => 'Pencarian nama']); ?>
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
                    <div id="tree_view_akun" class="tree-demo mb-5" style="overflow-x: scroll;">
                    </div>
                </div>
            </td>
            <td class="bg-light" id="akun_info" width="350px">
            </td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('assets/libs/jstree/jstree.bundle.js?v=7.0.9')); ?>"></script>
    <script>
        init_form_element();

        // manage ui
        $akun_data = $('#akun_data');
        $search_nama = $('#search_nama')

        // search
        $akun_table = $('#akun_table');
        divTree = $("#tree_view_akun");
        divTree.jstree({
            core: {
                themes: { responsive: false },
                check_callback: true,
                data: [],
            },
            types: {
                default: {
                    icon: "fa fa-folder text-primary"
                },
            },
            plugins: ["types", "search"],
            "search" : { "show_only_matches" : true }
        }).on("refresh.jstree", function () {
            $(this).jstree("open_all");
        }).on("select_node.jstree", function (e, data) {
            on_click_tree_view_akun(data.node.original);
        });
        let to = true;
        $search_nama.keyup(function () {
            if(to) clearTimeout(to);
            to = setTimeout(function () {
                divTree.jstree(true).search($search_nama.val());
            }, 250);
        });
        function search_akun() {
            $.post("<?php echo e(route('akun.search')); ?>", {
                _token: '<?php echo e(csrf_token()); ?>', ajax: true
            }, function (result) {
                divTree.jstree(true).settings.core.data = result;
                divTree.jstree(true).refresh(true);
            }).fail(function (xhr) {
                console.log(xhr.responseText);
            });
        }
        search_akun();

        // crud
        $akun_info = $('#akun_info');
        $akun_info.hide();
        add_new = () => {
            let data = {_token: '<?php echo e(csrf_token()); ?>'};
            $.post("<?php echo e(route('akun.info')); ?>", data, (result) => {
                $akun_info.html(result);
                $akun_info.show();
            }).fail((xhr) => {
                $akun_info.html(xhr.responseText);
                $akun_info.show();
            });
        }
        edit_akun = (id) => {
            let data = {_token: '<?php echo e(csrf_token()); ?>', id};
            $.post("<?php echo e(route('akun.info')); ?>", data, (result) => {
                $akun_info.html(result);
                $akun_info.show();
            }).fail((xhr) => {
                $akun_info.html(xhr.responseText);
                $akun_info.show();
            });
        }
        clear_form = () => {
            $akun_info.html('');
            $akun_info.hide();
        }
        add_child = (kode) => {
            let data = {_token: '<?php echo e(csrf_token()); ?>', parent_kode: kode};
            $.post("<?php echo e(route('akun.info')); ?>", data, (result) => {
                $akun_info.html(result);
                $akun_info.show();
            }).fail((xhr) => {
                $akun_info.html(xhr.responseText);
                $akun_info.show();
            });
        }

        //treeview actions
        on_click_tree_view_akun = (data) => {
            edit_akun(data.id);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/akun/index.blade.php ENDPATH**/ ?>