<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Reserva.
 *
 * @package namespace App\Entities;
 */
class Reserva extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'reserva';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'quarto_id',
        'total'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function quarto() {
        return $this->hasOne(Quarto::class);
    }

}
