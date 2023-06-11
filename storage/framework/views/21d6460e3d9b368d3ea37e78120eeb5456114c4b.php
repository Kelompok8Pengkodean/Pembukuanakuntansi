

<?php $__env->startSection('title'); ?>
    Jurnal - PT. Sumo Warna Indonesia -
    <?php if($tanggal_mulai != '' && $tanggal_sampai != ''): ?>
        <?php echo e(fulldate($tanggal_mulai)); ?> s/d <?php echo e(fulldate($tanggal_sampai)); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h4 class="text-center mb-0">PT. Sumo Warna Indonesia</h4>
    <p class="text-center">Jl. Margomulyo Blok J No. 19, Pergudangan Margomulyo Permai, Surabaya, Jawa Timur - Indonesia<br>email : info.sumowarna@gmail.com</p>
    <h4 class="text-center mb-0">Laporan Jurnal</h4>
    <?php if($tanggal_mulai != '' && $tanggal_sampai != ''): ?>
        <h5 class="text-center mb-0"><?php echo e(fulldate($tanggal_mulai)); ?> &nbsp; s/d &nbsp; <?php echo e(fulldate($tanggal_sampai)); ?></h5>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <hr>
                <?php echo $__env->make('jurnal._table', ['jurnal' => $jurnal], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/jurnal/cetak.blade.php ENDPATH**/ ?>