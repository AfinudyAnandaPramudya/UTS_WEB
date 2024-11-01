<?php
namespace App\Models;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
class UserModel extends Authenticatable implements JWTSubject
=======

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
{
    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return [];
    }

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
<<<<<<< HEAD

    protected $fillable = ['level_id' , 'username' , 'nama' , 'password'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id' , 'level_id');

=======

    protected $fillable = ['username', 'password', 'nama', 'level_id', 'avatar', 'created_at', 'updated_at'];

    protected $hidden = ['password'];

    protected $casts = [
        'password' => 'hashed'
    ];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }

    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }

    public function getRole()
    {
        return $this->level->level_kode;
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
    }
}