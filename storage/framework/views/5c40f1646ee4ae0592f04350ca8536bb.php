<?php if(empty($user)): ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data yang anda cari tidak ditemukan
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column gap-1">
                    <p class="my-0 fs-6 text-secondary">Nama</p>
                    <p class="my-0 fs-6"><?php echo e($user->nama); ?></p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Username</p>
                    <p class="my-0 fs-6"><?php echo e($user->username); ?></p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Level</p>
                    <p class="my-0 fs-6"><?php echo e($user->level->level_nama); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /Users/soncahyo/Workspace/projects/khen-joki/PWL_POS/resources/views/user/show_ajax.blade.php ENDPATH**/ ?>