<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exper extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'start_date', 'end_date', 'description'];
}
