<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class HotelImagem.
 *
 * @package namespace App\Entities;
 */
class HotelImagem extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'hotel_imagem';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hotel_id',
        'imagem_id'
    ];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function imagem() {
        return $this->belongsTo(Imagem::class);
    }

}
