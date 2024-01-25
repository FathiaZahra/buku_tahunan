<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;
    protected $table = 'sambutan';
    protected $fillable = ['jenis_sambuutan','deskripsi','foto_jurusan'];
    protected $primaryKey = 'id_sambutan';
    public $timestamps = false;
}
