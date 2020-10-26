

<?php $__env->startSection('title', 'Edit data'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-5">
    <div class="container">
    <h1>Edit Data</h1>
    <hr>
    <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/edit/<?php echo e($d->id); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" value="<?php echo e($d->nis); ?>" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" value="<?php echo e($d->nama); ?>" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="<?php echo e($d->kelas); ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" value="<?php echo e($d->jurusan); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views/edit.blade.php ENDPATH**/ ?>