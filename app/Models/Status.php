<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Status extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $KeyType = 'string';
    protected $table='status';
    // protected $fillable =   [
    //     'statusmhs',
    //     'namastatus'
    // ];
    
    protected $primaryKey = 'StatusId'; // or null

    // protected $keyType = 'string';

    // public $incrementing = false;
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function($model) {
    //         if($model->get() == null) {
    //             $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
    //         }
    //     });
    // }
}