<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\HotelImagemRepository;
use App\Models\HotelImagem;

/**
 * Class HotelImagemRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class HotelImagemRepositoryEloquent extends BaseRepository implements HotelImagemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return HotelImagem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
