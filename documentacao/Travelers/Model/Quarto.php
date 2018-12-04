<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Quarto.
 *
 * @package namespace App\Entities;
 */
class Quarto extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'quarto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'nome',
        'precoDiaria',
        'url'
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function reserva() {
        return $this->belongsTo(Reserva::class);
    }

}
