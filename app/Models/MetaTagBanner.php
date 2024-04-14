<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTagBanner extends Model
{
    use HasFactory;

    protected $table = 'meta_tag_banners';

    protected $fillable = [
        'page',
        'title',
        'title_en',
        'keywords',
        'description',
        'description_en',
        'image',
    ];

    public const PAGE = [
        'home' , 'about', 'contact', 'products', 'services', 'projects',
    ];
}

