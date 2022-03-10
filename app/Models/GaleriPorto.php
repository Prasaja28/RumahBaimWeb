<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriPorto extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    protected $primaryKey = 'id';
    protected $fillable = ['foto','porto_id'];
    protected $guarded = [];
}
