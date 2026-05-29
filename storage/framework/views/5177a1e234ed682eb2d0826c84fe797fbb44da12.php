

<?php $__env->startSection('title', 'Data Slider'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <a href="/admin/sliders/create" class="btn btn-primary mb-1">Tambah Data</a>

    <?php if($message = Session::get('message')): ?>
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1
                ?>
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($slider->title); ?></td>
                    <td><?php echo e($slider->description); ?></td>
                    <td>
                        <img src="/image/<?php echo e($slider->image); ?>" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="<?php echo e(route('sliders.edit', $slider->id)); ?>" class="btn btn-warning">Ubah</a>
                        <form action="<?php echo e(route('sliders.destroy', $slider->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>    
                        <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>      
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek_Web\laragon\www\Website Bicopi\resources\views/slider/index.blade.php ENDPATH**/ ?>