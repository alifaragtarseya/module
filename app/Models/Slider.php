<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Slider extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title', 'description'];
    protected $fillable = ['image', 'link','status','type'];


    public const TYPE= ['image', 'video'];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
