<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded = [];

    public function getNameAttribute(): string
    {
        return $this->name . '_' . app()->getLocale();
    }

    public function getJobAttribute(): string
    {
        return $this->name . '_' . app()->getLocale();
    }
    public function getImgAttribute(){
        if($this->hasMedia('teams')){
            return $this->getFirstMediaUrl('teams');
        }

    }
}
