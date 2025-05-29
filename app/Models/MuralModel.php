<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MuralModel extends Model
{
    protected $table = 'murais';

    protected $fillable = [
        'titulo',
        'descricao',
    ];
}
