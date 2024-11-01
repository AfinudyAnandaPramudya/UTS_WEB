<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table = 'm_barangs';
=======
    protected $table = 'm_barang';
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
    protected $primaryKey = 'barang_id';
    protected $fillable = ['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual'];
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}