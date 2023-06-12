<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'vegetarian', 'ingredient'];

    public function ingredients(){
        return $this->belongsToMany(Pizza::class);
    }
}
