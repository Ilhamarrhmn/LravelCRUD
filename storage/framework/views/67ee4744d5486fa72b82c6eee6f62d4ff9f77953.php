

<?php $__env->startSection('title', 'Tambah Data'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-5">
    <div class="container">
    <h1>Tambah Data</h1>
    <hr>
        <form action="/save" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Siswa</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views/create.blade.php ENDPATH**/ ?>