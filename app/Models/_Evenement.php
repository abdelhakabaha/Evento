<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _Evenement extends Model
{
    protected $table = '_Evenement';
    protected $primaryKey = 'id_evenement';
    public $fillable = ['image', 'titre', 'description' , 'date' ,'lieu','catégorie','nbPlace' ];
    use HasFactory;
}
