<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenjualanDetailModel extends Model
{
    use HasFactory;
    protected $table = 't_penjualan_details'; // Mendefinisikan nama tabel
    protected $primaryKey = 'detail_id'; // Mendefinisikan primary key
    protected $fillable = ['penjualan_id', 'barang_id', 'harga', 'jumlah'];

    // Relasi ke PenjualanModel (belongsTo)
    public function Penjualan(): BelongsTo {
        return $this->belongsTo(PenjualanModel::class, 'penjualan_id','penjualan_id');
    }
    public function Barang(): BelongsTo {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }
}