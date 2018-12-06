<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Hotel.
 *
 * @package namespace App\Entities;
 */
class Hotel extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'hotel';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'valor',
        'nota',
        'endereco',
        'descricao'
    ];

    public function quarto() {
        return $this->hasMany(Quarto::class);
    }

    public function hotelImagem() {
        return $this->hasMany(HotelImagem::class);
    }
}
