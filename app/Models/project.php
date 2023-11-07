<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'image',
        'name',
        'url',
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
