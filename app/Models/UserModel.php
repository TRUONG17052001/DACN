<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'taikhoan';
    protected $primaryKey ='username';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable=[
        'username',
        'password',
        'tenht',
        'diachi',
        'sdt',
        'email',
        'quyen',
    ];

    public function FKHoaDon(){
        return $this->hasMany(BillModel::class,'username','username');
    }
}
