<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Work extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $guarded=[];

    public function getTitleAttribute(): string|null
    {
        return $this->{'title_'.app()->getLocale()};
    }

    public function getInfoAttribute(): string|null
    {
        return $this->{'info_'.app()->getLocale()}??'';
    }

    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class);
    }

    public function getImgAttribute(){
        if($this->hasMedia('works')){
            return $this->getFirstMediaUrl('works');
        }

    }
}
