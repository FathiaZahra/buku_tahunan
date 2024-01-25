<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memories extends Model
{
    use HasFactory;
    protected $table = 'memories';
    protected $fillable = ['keterangan','foto_memories'];
    protected $primaryKey = 'id_memories';
    public $timestamps = false;
}
