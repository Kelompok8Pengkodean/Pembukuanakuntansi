<?php ($fitur_program = $fitur_program ?? array()); ?>
<nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    <div class="collapse navbar-collapse" id="topnav-menu-content">
        <ul class="navbar-nav">
            <?php $__currentLoopData = $fitur_program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($item['children']) == 0): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(has_route($item['url'])); ?>">
                            <?php echo e($item['nama']); ?>

                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" role="button" data-toggle="dropdown">
                            <?php echo e($item['nama']); ?> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu">
                            <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(has_route($sub_item->url)); ?>" class="dropdown-item"><?php echo e($sub_item->nama); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Semester 4\Pengkodean\akuntansi\resources\views/layouts/_navbar.blade.php ENDPATH**/ ?>