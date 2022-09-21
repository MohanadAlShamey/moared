<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];



    public function getInfoAttribute(): string|null
    {
        return $this->{"caption_".app()->getLocale()};

    }
    public function getImgAttribute(){
        if($this->hasMedia('sliders')){
            return $this->getFirstMediaUrl('sliders');
        }

    }

}
