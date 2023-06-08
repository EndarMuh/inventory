<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "Kategori"; // Eloquent akan membuat model Kategori menyimpan record di tabel Kategori
    protected $primaryKey = 'idKategori'; // Memanggil isi DB Dengan primarykey
    public $incrementing  = false;
    public $timestamps = false;

    protected $fillable = [
        'idKategori',
        'namaKategori'
    ];

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
