<<<<<<< HEAD
@if (empty($level))
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
=======
@empty($level)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria label="Close"><span
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data yang anda cari tidak ditemukan
                </div>
<<<<<<< HEAD
=======
                <a href="{{ url('/level') }}" class="btn btn-warning">Kembali</a>
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
            </div>
        </div>
    </div>
@else
<<<<<<< HEAD
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Level User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column gap-1">
                    <p class="my-0 fs-6 text-secondary">Kode Level</p>
                    <p class="my-0 fs-6">{{ $level->level_kode }}</p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Nama Level</p>
                    <p class="my-0 fs-6">{{ $level->level_nama }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
=======
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Level</h5>
                <button type="button" class="close" data-dismiss="modal" aria label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $level->level_id }}</td>
                    </tr>
                    <tr>
                        <th>Level kode</th>
                        <td>{{ $level->level_kode }}</td>
                    </tr>
                    <tr>
                        <th>Level nama</th>
                        <td>{{ $level->level_nama }}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-warning">Kembali</button>
            </div>
        </div>
    </div>
@endempty
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
