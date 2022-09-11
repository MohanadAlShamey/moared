<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded = [];

    public function getNameAttribute(): string
    {
        return $this->name . '_' . app()->getLocale();
    }

    public function getInfoAttribute(): string
    {
        return $this->info . '_' . app()->getLocale();
    }

    public function getImgAttribute(){
        if($this->hasMedia('testimonials')){
            return $this->getFirstMediaUrl('works');
        }

    }
}
