<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function Laravel\Prompts\password;

class KategoriModel extends Model
{
<<<<<<< HEAD
    protected $table = 'm_kategoris';
=======
    use HasFactory;

    protected $table = 'm_kategori';
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
    protected $primaryKey = 'kategori_id';
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['kategori_id', 'kategori_kode', 'kategori_nama'];
}