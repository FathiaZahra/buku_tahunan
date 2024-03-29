<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    protected $fillable = ['nama_sekolah','visi_misi'];
    protected $primaryKey = 'id_sekolah';
    public $timestamps = false;
}
