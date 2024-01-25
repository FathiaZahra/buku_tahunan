<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'fasilitas';
    protected $fillable = ['jenis_fasilitas','deskripsi','foto_fasilitas'];
    protected $primaryKey = 'id_barang';
    public $timestamps = false;
}
