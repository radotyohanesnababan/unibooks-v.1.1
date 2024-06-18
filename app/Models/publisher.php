<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    use HasFactory;

    protected $table = 'tb_penerbit';
    public $timestamps = false;
    protected $fillable = [
        'nama_penerbit',
        'alamat',
        'nomor_telepon',
        'email'
    ];

    public function books(){
        return $this->hasMany(books::class);
    }
}
