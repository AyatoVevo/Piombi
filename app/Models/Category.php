<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
        
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
