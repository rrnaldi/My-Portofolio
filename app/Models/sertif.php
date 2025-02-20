<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Sertif extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'imagesertif'];
    
    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('imagesertif') && ($model->getOriginal('imagesertif') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('imagesertif'));
            }
        });
    }
}
