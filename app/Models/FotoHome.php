<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class FotoHome extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $table = 'foto_home';
    protected $primaryKey = 'id';
    protected $fillable = ['foto','status'];
    // protected $guarded = [];

    public function photos()
    {
        return $this->morphMany(Media::class, 'model');
    }
}
