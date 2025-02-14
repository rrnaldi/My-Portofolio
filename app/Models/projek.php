<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class projek extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'imgprojek', 'deskripsi'];
    
    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('imgprojek') && ($model->getOriginal('imgprojek') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('imgprojek'));
            }
        });
    }
}
