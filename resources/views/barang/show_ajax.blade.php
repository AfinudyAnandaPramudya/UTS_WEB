<<<<<<< HEAD
@if (empty($barang))
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kesalahan!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
=======
@empty($barang)
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
                <a href="{{ url('/barang') }}" class="btn btn-warning">Kembali</a>
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
            </div>
        </div>
    </div>
@else
<<<<<<< HEAD
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column gap-1">
                    <p class="my-0 fs-6 text-secondary">Kode Barang</p>
                    <p class="my-0 fs-6">{{ $barang->barang_kode }}</p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Nama Barang</p>
                    <p class="my-0 fs-6">{{ $barang->barang_nama }}</p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Kategori Barang</p>
                    <p class="my-0 fs-6">{{ $barang->kategori->kategori_nama }}</p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Harga Beli</p>
                    <p class="my-0 fs-6">{{ $barang->harga_beli }}</p>
                </div>
                <div class="d-flex flex-column gap-1 mt-2">
                    <p class="my-0 fs-6 text-secondary">Harga Jual</p>
                    <p class="my-0 fs-6">{{ $barang->harga_jual }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
=======
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID</th>
                        <td>{{ $barang->barang_id }}</td>
                    </tr>
                    <tr>
                        <th>Barang kode</th>
                        <td>{{ $barang->barang_kode }}</td>
                    </tr>
                    <tr>
                        <th>Barang nama</th>
                        <td>{{ $barang->barang_nama }}</td>
                    </tr>
                    <tr>
                        <th>Harga beli</th>
                        <td>{{ $barang->harga_beli }}</td>
                    </tr>
                    <tr>
                        <th>Harga jual</th>
                        <td>{{ $barang->harga_jual }}</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>{{ $barang->kategori->kategori_nama }}</td>
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
