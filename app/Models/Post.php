<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded = [];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getTitleAttribute(): string
    {
        return $this->title . '_' . app()->getLocale();
    }

    public function getInfoAttribute(): string
    {
        return $this->title . '_' . app()->getLocale();
    }
    public function getImgAttribute(){
        if($this->hasMedia('posts')){
            return $this->getFirstMediaUrl('posts');
        }

    }
}
