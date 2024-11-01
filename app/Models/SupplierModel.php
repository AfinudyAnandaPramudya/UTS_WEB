<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function Laravel\Prompts\password;

class SupplierModel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table ='m_suppliers'; // Mendefinisikan nama tabel
    protected $primaryKey ='supplier_id'; // Mendefinisikan primary key
    protected $fillable = ['supplier_id','supplier_kode','supplier_nama','supplier_alamat'];
=======
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048

    protected $table = 'm_supplier';
    protected $primaryKey = 'supplier_id';
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['supplier_id', 'supplier_kode', 'supplier_nama', 'supplier_alamat'];
}