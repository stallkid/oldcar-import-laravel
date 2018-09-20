<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'COLABORADOR';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'NOME',
        'SETOR',
        'SEXO',
        'TELEFONE'
    ];
}
