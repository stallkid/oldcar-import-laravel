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
    public $timestamps = false;
    protected $primaryKey = 'IDCLIENTE';
    protected $keyType = 'int';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'NOME_CLI',
        'SEXO',
        'TELEFONE'
    ];
}
