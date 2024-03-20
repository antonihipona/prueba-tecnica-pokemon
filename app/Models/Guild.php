<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'guild';

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function pokemons()
    {
        return $this->hasManyThrough(UserPokemon::class, User::class)
            ->with('pokemon');
    }
}
