<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angket extends Model
{
    use HasFactory;
    protected $table = 'angket';
    protected $fillable = ['jenis_angket','foto_angket'];
    protected $primaryKey = 'id_angket';
    public $timestamps = false;}
