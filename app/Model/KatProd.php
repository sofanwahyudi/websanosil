<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KatProd extends Model
{
protected $table ="kategori_product";
public $timestamps = false;

public function application()
{
    return $this->belongsTo(KatApp::class);
}
public function product()
{
     return $this->belongsToMany(Product::class, 'product_kategori','product_id','kategori_id');
}
public function subkat()
{
    return $this->belongsTo(SubKat::class, 'kategori_id');
}

}
