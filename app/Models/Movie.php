<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Movie extends Model
{
    use HasFactory;
    use Sluggable;

    public $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }




}
