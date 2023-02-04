<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBillModel extends Model
{
    use HasFactory;
    protected $table = 'cthoadon';
    protected $primaryKey ='mact';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable=[
        'mahd',
        'masp',
        'mausac',
        'kichthuoc',
        'soluong',
        'tongtien',
    ];
}
