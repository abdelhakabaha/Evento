<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['description','categorie_id','image' ,'user_id','titre','date','lieu','nbPlace'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
