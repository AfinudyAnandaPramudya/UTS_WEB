<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StokModel extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table ='t_stoks'; // Mendefinisikan nama tabel
    protected $primaryKey ='stok_id'; // Mendefinisikan primary key
    protected $fillable = ['barang_id', 'user_id', 'stok_tanggal', 'stok_jumlah'];

    public function user(): BelongsTo {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }
    public function barang(): BelongsTo {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }
    public function supplier(): BelongsTo {
        return $this->belongsTo(SupplierModel::class,'supplier_id','supplier_id'); // Mendefinisikan foreign key
=======
    protected $table = 't_stok';
    protected $primaryKey = 'stok_id';

    protected $fillable = ['supplier_id', 'barang_id', 'user_id', 'stok_tanggal', 'stok_jumlah', 'created_at', 'updated_at'];
    protected $casts = [
        'stok_tanggal' => 'datetime', // or 'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(SupplierModel::class, 'supplier_id', 'supplier_id');
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
    }
}