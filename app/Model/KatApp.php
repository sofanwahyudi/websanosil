<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KatApp extends Model
{
    protected $table = 'kategori_application';
    public $primaryKey = 'id_app';
    public $timestamps = false;
    

    public function kategori()
    {
        return $this->belongsTo(KatProd::class , 'kategori_id');
    }
}
