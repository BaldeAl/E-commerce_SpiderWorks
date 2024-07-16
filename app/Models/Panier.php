<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'montant',
        'user_id'
    ];

    public $timestamps = true;

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
