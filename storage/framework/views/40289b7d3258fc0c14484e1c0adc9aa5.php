<?php $__env->startSection('content'); ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><?php echo e($page->title); ?></h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="<?php echo e(url('level/create')); ?>">Tambah</a>
                <button onclick="modalAction('<?php echo e(url('level/create_ajax')); ?>')" class="btn btn-sm btn-success mt-1">Tambah
                    Ajax</button>
            </div>
        </div>
        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
            <div class="row">

            </div>
            <table class="table-bordered table-striped table-hover table-sm table" id="table_stok">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Nama User</th>
                        <th>Nama Supplier</th>
                        <th>Stok Tanggal</th>
                        <th>Jumlah Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
        data-keyboard="false" data-width="75%" aria-hidden="true"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            })
        }

        var dataStok;
        $(document).ready(function() {
            $dataStok = $('#table_stok').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "<?php echo e(url('stok/list')); ?>",
                    "dataType": "json",
                    "type": "POST",
                    "data": function(d) {
                        d.barang_id = $('#barang_id').val();
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "barang.barang_nama",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "user.username",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "supplier.supplier_nama",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "stok_tanggal",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "stok_jumlah",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "action",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#level_kode').on('change', function() {
                dataLevel.ajax.reload();
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/soncahyo/Workspace/projects/khen-joki/PWL_POS/resources/views/stok/index.blade.php ENDPATH**/ ?>