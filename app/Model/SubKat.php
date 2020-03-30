<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubKat extends Model
{
    protected $table = 'subkategori_product';
    public $primaryKey = 'id_subKategori';
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(KatProd::class , 'kategori_id');
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_subkategori','product_id','subKategori_id');
    }

}
