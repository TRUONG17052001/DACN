<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    protected $primaryKey ='masp';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false; 
    protected $fillable=[
        'masp',
        'madm',
        'tensp',
        'donvitinh',
        'giasp',
        'motasp',
        'anhsp'
    ];
    
    
}
