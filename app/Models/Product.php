<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'user_id'
    ];

    protected $hidden = [
        'user_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
        return $this->belongsTo(User::class);
    }


}
