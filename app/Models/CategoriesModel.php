<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    use HasFactory;
    protected $table = 'danhmuc';
    protected $primaryKey ='madm';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable=[
        'madm',
        'tendm',
        'soluong'
    ];

    public function FKSanPham(){
        return $this->hasMany(ProductModel::class,'madm','madm');
    }
}
