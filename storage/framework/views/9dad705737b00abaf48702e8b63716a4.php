<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 col-md-5">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h1 class="card-title">Pengaturan Profil</h1>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center">
                        <img id="avatarPreview" src="<?php echo e(asset('storage/profile_pictures/' . Auth::user()->avatar)); ?>"
                            style="width: 96px; height: 96px; border-radius: 50%;">
                        <p class="mb-0 mt-3"><?php echo e(Auth::user()->nama); ?></p>
                        <form action="<?php echo e(url('/profile/avatar/' . Auth::user()->user_id)); ?>" method="POST" class="mt-3"
                            id="formUpdateAvatar">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <div class="form-group">
                                <input type="file" class="form-control" name="avatar" id="avatar">
                                <small id="error-avatar" class="error-text form-text text-danger"></small>
                            </div>
                            <button class="btn btn-primary w-100" type="submit">Update Profil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h1 class="card-title">Pengaturan Akun</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('/profile/account/' . Auth::user()->user_id)); ?>" method="POST" id="formUpdateAccount">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input value="<?php echo e(Auth::user()->nama); ?>" type="text" name="nama" id="nama" class="form-control" required>
                            <small id="error-nama" class="error-text form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input value="<?php echo e(Auth::user()->username); ?>" type="text" name="username" id="username" class="form-control" required>
                            <small id="error-username" class="error-text form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <small id="error-password" class="error-text form-text text-danger"></small>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function() {
            // Update Avatar
            $('#formUpdateAvatar').validate({
                rules: {
                    avatar: {
                        required: true,
                        extension: 'jpg|jpeg|png',
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: new FormData(form),
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message
                                });
                                $('#avatar').val('');
                                $('img#avatarPreview').attr('src', 'storage/profile_pictures/' + response.data.avatar);
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });

            // Update Akun
            $('#formUpdateAccount').validate({
                rules: {
                    nama: {
                        required: true
                    },
                    username: {
                        required: true
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: new FormData(form),
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message
                                });
                                $('#password').val('');
                                $('#username').val(response.data.username);
                                $('#nama').val(response.data.nama);
                            } else {
                                $('.error-text').text('');
                                $.each(response.msgField, function(prefix, val) {
                                    $('#error-' + prefix).text(val[0]);
                                });
                            }
                        }
                    });
                    return false;
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/soncahyo/Workspace/projects/khen-joki/PWL_POS/resources/views/profile/index.blade.php ENDPATH**/ ?>