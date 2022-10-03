<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
class Product extends Model implements HasMedia
{

    use HasFactory,InteractsWithMedia;

    protected $guarded = [];
}