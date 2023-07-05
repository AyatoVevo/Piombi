<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'name',
        'img',
        'description',
        'category_id',
        'user_id'
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
