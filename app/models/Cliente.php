<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'cliente';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'NOME',
        'SEXO',
        'TELEFONE'
    ];
}
