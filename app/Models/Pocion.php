<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pocion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'pociones';

    protected $fillable = [
        'nombre',
    ];

    public function pocionable()
    {
        return $this->morphTo();
    }
}
