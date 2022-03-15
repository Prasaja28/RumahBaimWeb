<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang_Kami extends Model
{
    use HasFactory;
    protected $table = 'tentang_kami';
    protected $primaryKey = 'id';
    protected $fillable = ['paragraf','deskripsi'];
    protected $guarded = [];
}
