<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolio';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_desain','deskripsi','foto_utama'];
    protected $guarded = [];
}
