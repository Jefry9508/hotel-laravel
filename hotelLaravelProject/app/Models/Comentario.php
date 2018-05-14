<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comentario
 * @package App\Models
 * @version May 8, 2018, 2:30 pm UTC
 */
class Comentario extends Model
{
    use SoftDeletes;

    public $table = 'comentarios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'comentario',
        'calificacion',
        'id_hotel',
        'id_user'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'comentario' => 'string',
        'calificacion' => 'integer',
        'id_hotel' => 'integer',
        'id_user' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }


}
