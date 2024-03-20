<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPokemon extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'user_pokemon';

    protected $fillable = [
        'user_id',
        'pokemon_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
}
