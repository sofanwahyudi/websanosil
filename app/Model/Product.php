<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public function categories()
    {
         return $this->belongsToMany(KatProd::class, 'product_kategori','product_id','kategori_id');
    }
    public function subcategories()
    {
         return $this->belongsToMany(SubKat::class, 'product_subkategori','product_id','subKategori_id');
    }
    public function sub2categories()
    {
     return $this->belongsToMany(SubKatProd::class, 'product_subsubkategori','product_id','subsubKategori_id');
    }
}
