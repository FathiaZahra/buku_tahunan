<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    use HasFactory;
    protected $table = 'pengelola';
    protected $fillable = ['nama_pengelola','foto_pengelola'];
    protected $primaryKey = 'id_pengelola';
    public $timestamps = false;
}
