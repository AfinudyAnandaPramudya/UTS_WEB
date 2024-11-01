<<<<<<< HEAD
@if (empty($kategori))
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
=======
@empty($kategori)
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
<<<<<<< HEAD
                    Data yang anda cari tidak ditemukan
                </div>
=======
                    Data kategori yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('/kategori') }}" class="btn btn-warning">Kembali</a>
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
            </div>
        </div>
    </div>
@else
<<<<<<< HEAD
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column gap-1">
                    <p class="my-0 fs-6 text-secondary">Kode Kategori</p>
                    <p class="my-0 fs-6">{{ $kategori->kategori_kode }}</p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Nama Kategori</p>
                    <p class="my-0 fs-6">{{ $kategori->kategori_nama }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
=======
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID Kategori</th>
                        <td>{{ $kategori->kategori_id }}</td>
                    </tr>
                    <tr>
                        <th>Kode Kategori</th>
                        <td>{{ $kategori->kategori_kode }}</td>
                    </tr>
                    <tr>
                        <th>Nama Kategori</th>
                        <td>{{ $kategori->kategori_nama }}</td>
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
