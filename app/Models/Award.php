<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Award extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;


    public $translatedAttributes = ['title', 'description','short_description'];
    protected $fillable = ['image'];

    public function images(){
        return $this->hasMany(AwardImage::class);
    }

}




class AwardTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['title', 'description','short_description'];
}
