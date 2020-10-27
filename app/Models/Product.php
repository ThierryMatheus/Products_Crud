<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'value',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function image()
    {
        return $this->hasOne('App\Models\Image');
    }
}
