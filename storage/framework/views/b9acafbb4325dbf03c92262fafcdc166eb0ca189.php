

<?php $__env->startSection('title', 'Data Siswa'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
    <h1>LARAVEL CRUD</h1>
    <hr>
        <form class="form-inline" method="GET" action='/index'>
            <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search">
            <input type="submit" class="btn btn-xs btn-primary" value="Search">
        </form>
		<div class="row mt-3">
			<div class="col-md-12">
				<table id="tabelmember" class="table table-striped table-bordered" style="width:100%">
				<thead align="center">
					<tr>
						<th>No</th>
						<th>Nama Siswa</th>
						<th>NIS</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                    <?php $i = 1; ?>
                        <?php $__currentLoopData = $siswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($d->nama); ?></td>
                            <td><?php echo e($d->nis); ?></td>
                            <td><?php echo e($d->kelas); ?></td>
                            <td><?php echo e($d->jurusan); ?></td>
                            <td>
                                <a href="/edit/<?php echo e($d->id); ?>" class="btn btn-xs btn-primary">Edit</a> |
                                <a href="/destroy/<?php echo e($d->id); ?>" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
				</table>
                <a class="btn btn-primary float-right mt-2" href="/create" role="button">Tambah Data</a>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CRUDLaravel\resources\views/index.blade.php ENDPATH**/ ?>