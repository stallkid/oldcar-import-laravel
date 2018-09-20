<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * Nome da tabela do modelo.
     * @var string
     */
    protected $table = 'USUARIO';

    /**
     * Atributos que podem ser preenchidos em massa.
     * @var array
     */
    protected $fillable = [
        'EMAIL',
        'SENHA'
    ];

    protected $guarded = [
        'IDUSUARIO'
    ];
}
