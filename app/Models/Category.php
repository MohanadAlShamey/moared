<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function getNameAttribute(): string|null
    {
        return $this->{"name_".app()->getLocale()};


    }

    public function getInfoAttribute(): string|null
    {
        return $this->{"info_".app()->getLocale()};

    }


    public function getImgAttribute(){
        if($this->hasMedia('categories')){
            return $this->getFirstMediaUrl('categories');
        }

    }
}
