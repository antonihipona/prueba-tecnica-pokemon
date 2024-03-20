<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokedex';

    public $timestamps = false;

    protected $fillable = [
        'number',
        'name',
        'type1',
        'type2',
        'total',
        'hp',
        'attack',
        'defense',
        'sp_atk',
        'sp_def',
        'speed',
        'generation',
        'legendary',
    ];


    protected function casts(): array
    {
        return [
            'legendary' => 'boolean',
        ];
    }

    /*** RELATIONS ***/
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_pokemon');
    }

    public function pocion()
    {
        return $this->morphOne(Pocion::class, 'pocionable');
    }

    public function baya()
    {
        return $this->morphOne(Baya::class, 'bayable');
    }
}
