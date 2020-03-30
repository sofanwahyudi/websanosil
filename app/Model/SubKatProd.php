<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubKatProd extends Model
{
    protected $table = 'subsubkategori_product';
    public $primaryKey = 'id_subsubKategori';
    public $timestamps = false;

    public function getGambar(){
        if(!$this->image){
            return asset('image/placeholder.png');
        }
        return asset('/uploads/subsubkategori/' .$this->image);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_subsubkategori','product_id','subsubKategori_id');
    }
    public function subkategori()
    {
        return $this->belongsTo(SubKat::class , 'subKategori_id');
    }
}
