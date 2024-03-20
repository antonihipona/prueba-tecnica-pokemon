<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baya extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];

    public function bayables()
    {
        return $this->morphTo();
    }
}
