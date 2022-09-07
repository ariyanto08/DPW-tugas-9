<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class product extends Model {
    protected $table = 'product';

    protected $casts = ['created_at'=>'datetime'];

    function seller(){
        return $this->belongsTo(User::class,'id_user');
    }
    function getHargaAttribute(){
        return "Rp. ".number_format($this->attributes['harga']);
    }
}
