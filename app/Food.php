<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Food extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'image'
    ];
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
