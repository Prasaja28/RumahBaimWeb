<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoHome extends Model
{
    use HasFactory;
    protected $table = 'foto_home';
    protected $primaryKey = 'id';
    protected $fillable = ['foto','status'];
    protected $guarded = [];
}
