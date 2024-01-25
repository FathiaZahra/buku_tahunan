<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $fillable = ['nama_event','harga_barang','foto_event'];
    protected $primaryKey = 'id_event';
    public $timestamps = false;
}
