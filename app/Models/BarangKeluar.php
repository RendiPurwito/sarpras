<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    public function keluarbarang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

    public function operatorkeluar(){
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }

    
}
