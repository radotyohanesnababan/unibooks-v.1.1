<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';
    protected $guarded = [];
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'genre',
        'deskripsi',
        'stok',
        'isbn',
        'coverimage'
    ];
    public function publisher(){
        return $this->belongsTo(publisher::class, 'id_penerbit', 'id_penerbit');
    }

}
