<?php

namespace App\Models;

use App\Models\Agama;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentsSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agama extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $table = 'agama';

    protected $fillable = [
        'kodeagama',
        'namaagama',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'kodeagama',
                'source' => 'namaagama',
            ]
        ];
    }
}