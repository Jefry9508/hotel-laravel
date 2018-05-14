<?php

namespace App\Repositories;

use App\Models\Comentario;
use InfyOm\Generator\Common\BaseRepository;

class ComentarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'comentario',
        'calificacion',
        'id_hotel',
        'id_user'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comentario::class;
    }
}
