<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model{
    protected $table = 'products';

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
}