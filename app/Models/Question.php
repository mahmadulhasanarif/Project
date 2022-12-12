<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function questionOptions(){
        return $this->hasMany(Option::class);
    }
}
