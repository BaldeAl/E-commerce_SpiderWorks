<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plateforme extends Model
{
    use HasFactory;

    protected $table = 'plateforme';

    protected $fillable = [
        'id',
        'nom'
    ];
      public $timestamps = false;

}