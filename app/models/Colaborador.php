<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'colaborador';
    public $timestamps = false;
    protected $primaryKey = 'IDCOLABORADOR';
    protected $keyType = 'int';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'NOME_COLAB',
        'SETOR',
        'SEXO',
        'TELEFONE'
    ];
}
