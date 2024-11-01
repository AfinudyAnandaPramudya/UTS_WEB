<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level';

    public function user(): HasOne{
        return $this -> hasOne(userModel::class);
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> c2c3e1af72c2f499dc9a8e7de6d07abe24986048
