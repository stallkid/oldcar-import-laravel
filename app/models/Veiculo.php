<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'VEICULO';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'MARCA',
        'NOME',
        'PLACA',
        'MODELO',
        'TIPO',
        'VALOR'
    ];
}
