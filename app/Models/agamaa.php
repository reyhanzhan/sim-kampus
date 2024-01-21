<?php

namespace App\Models;

use App\Models\agamaa;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agamaa extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $table = 'agamaa';

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
