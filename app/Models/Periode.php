<?php

namespace App\Models;

use App\Models\Periode;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentsSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Periode extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $table = 'agama';

    protected $fillable = [
        'periode',
        'bulanawal',
        'bulanakhir',
        'tgl_awal',
        'tgl_akhir',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'periode',
                'source' => 'bulanawal',
                'source' => 'bulanakhir',
                'source' => 'tgl_awal',
                'source' => 'tgl_akhir',
            ]
        ];
    }
}