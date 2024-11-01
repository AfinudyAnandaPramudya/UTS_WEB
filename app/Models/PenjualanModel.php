<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PenjualanModel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 't_penjualans'; // Mendefinisikan nama tabel
    protected $primaryKey = 'penjualan_id'; // Mendefinisikan primary key
    protected $fillable = ['user_id','pembeli','user_id', 'penjualan_tanggal'];

    // Relasi ke UserModel (belongsTo)
    public function user(): BelongsTo {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id'); // Mendefinisikan foreign key
    }
    public function penjualan_details(): BelongsTo {
        return $this->belongsTo(PenjualanDetailModel::class, 'penjualan_id', 'penjualan_id'); // Mendefinisikan foreign key
=======
    protected $table = 't_penjualan'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'penjualan_id'; // Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable = ['user_id','pembeli','penjualan_kode', 'penjualan_tanggal'];

    public function user():BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id','user_id');
    }
    public function transaksi():HasMany
    {
        return $this->hasMany(DetailModel::class, 'detail_id','detail_id');
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
    }
}