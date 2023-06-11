<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?><?php echo e(env('APP_NAME')); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="-" name="description" />
    <meta content="-" name="author" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">
    <link href="<?php echo e(asset('assets/libs/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('assets/libs/summernote/summernote-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/libs/dropify/css/dropify.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/bootstrap-dark.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/app-dark.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body data-topbar="dark" data-layout="horizontal">
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <div class="navbar-brand-box">
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?php echo e(asset('assets/images/user.png')); ?>"
                             alt="Avatar">
                        <span class="d-none d-xl-inline-block ml-1">Kelompok 8</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div class="topnav">
        <div class="container-fluid">
            <?php echo $__env->make('layouts._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        Kelompok 8 Cecilia Gabriela A, Syifa Syafira A, Tantri Napitupulu, Talent Angeliq M
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<div class="rightbar-overlay"></div>

<?php echo $__env->yieldPushContent('modals'); ?>

<script src="<?php echo e(asset('assets/libs/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/summernote/summernote-bs4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/dropify/js/dropify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/autoNumeric.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let init_form_element = () => {
        $(".select2").select2();
        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true
        });
        $(".summernote").summernote({
            height: 300,
        });
        $('.dropify').dropify();
        $('.autonumeric').attr('data-a-sep', '.').attr('data-a-dec', ',')
            .autoNumeric({
            mDec: '0',
            vMax:'9999999999999999999999999',
            vMin: '-99999999999999999'
        });
        $('.autonumeric-decimal')
            .attr('data-a-sep','.').attr('data-a-dec',',')
            .autoNumeric({
                mDec: '2',
                vMax:'999'
            });
    }
    let getFormData = ($form) => {
        let unindexed_array = $form.serializeArray();
        let indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }
    let displayErrors = (target_id, errors) => {
        let $target = $('#' + target_id);
        let $content = $('#' + target_id + '_content');
        $content.html('');
        $.each(errors, (i, value) => {
            $content.append('<li>'+ value +'</li>');
        });
        $target.show();
    }
</script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/layouts/index.blade.php ENDPATH**/ ?>