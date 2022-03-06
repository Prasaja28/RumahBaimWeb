<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_profil extends Model
{
    use HasFactory;
    protected $table = 'video_profil';
    protected $primaryKey = 'id';
    protected $fillable = ['link'];
    protected $guarded = [];
}
