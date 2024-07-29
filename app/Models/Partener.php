<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Partener extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title'];
    protected $fillable = ['image'];
}



class PartenerTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title'];
}
