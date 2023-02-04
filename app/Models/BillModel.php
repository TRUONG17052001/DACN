<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    use HasFactory;
    protected $table = 'hoadon';
    protected $primaryKey ='mahd';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable=[
        'mahd',
        'username',
        'tongtien',
        'soluong',
        'thanhtoan',
        'tinhtrang'
    ];
}
