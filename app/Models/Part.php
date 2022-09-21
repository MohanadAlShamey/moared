<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Part extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getNameAttribute(): string|null
    {
        return $this->{'name_' . app()->getLocale()};



    }
    public function works(): HasMany
    {
        return $this->hasMany(Work::class);
    }
}
