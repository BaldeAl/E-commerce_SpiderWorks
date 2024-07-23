<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    protected $table = "produit";
    protected $fillable = [
        'id',
        'nom',
        'description',
        'prix',
        'stock',
        'pateforme_id'
    ];
    public $timestamps = false;

    public function plateforme() :BelongsTo
    {
        return $this->belongsTo(Plateforme::class);
    }


}