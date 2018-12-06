<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Imagem.
 *
 * @package namespace App\Entities;
 */
class Imagem extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'imagem';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url'
    ];

    public function hotelImagem() {
        return $this->hasOne(HotelImagem::class);
    }

}
