

<?php $__env->startSection('title', 'Data Tentang'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if($message = Session::get('message')): ?>
                    <div class="alert alert-success">
                        <strong>Berhasil</strong>
                        <p><?php echo e($message); ?></p>
                    </div>
                <?php endif; ?>
                <form action="/admin/about/<?php echo e($about->id); ?>" method="POST" enctype="multipart/form-data"
                    <?php if(!$about->id): ?> style="pointer-events:none;opacity:.6" <?php endif; ?>>
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="<?php echo e($about->judul); ?>">
                    </div>
                    <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color:red"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="">Subjudul</label>
                        <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="Subjudul"><?php echo e($about->subjudul); ?></textarea>
                    </div>
                    <?php $__errorArgs = ['subjudul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color:red"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="form-group">
                        <label for="">Kelebihan 1</label>
                        <input type="text" class="form-control" name="kelebihan_1" placeholder="Kelebihan 1"
                            value="<?php echo e($about->kelebihan_1); ?>">
                    </div>
                    <?php $__errorArgs = ['kelebihan_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color:red"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="">Kelebihan 2</label>
                        <input type="text" class="form-control" name="kelebihan_2" placeholder="Kelebihan 2"
                            value="<?php echo e($about->kelebihan_2); ?>">
                    </div>
                    <?php $__errorArgs = ['kelebihan_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color:red"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="form-group">
                        <label for="">Kelebihan 3</label>
                        <input type="text" class="form-control" name="kelebihan_3" placeholder="Kelebihan 3"
                            value="<?php echo e($about->kelebihan_3); ?>">
                    </div>
                    <?php $__errorArgs = ['kelebihan_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color:red"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php if($about->image): ?>
                    <img src="/image/<?php echo e($about->image); ?>" alt="" class="img-fluid mb-2">
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small style="color:red"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projek_Web\laragon\www\Website Bicopi\resources\views/about.blade.php ENDPATH**/ ?>