<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ReservaRepository;
use App\Models\Reserva;
/**
 * Class ReservaRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ReservaRepositoryEloquent extends BaseRepository implements ReservaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Reserva::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
