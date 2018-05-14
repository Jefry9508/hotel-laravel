<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hotel
 * @package App\Models
 * @version May 8, 2018, 1:16 pm UTC
 */
class Hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ubicacion',
        'ciudad',
        'costo',
        'estrellas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'ubicacion' => 'string',
        'ciudad' => 'string',
        'costo' => 'integer',
        'estrellas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function comentarioshotel(){
        return $this->hasMany('App\Models\Comentario', 'id_hotel');
    }

    
}
