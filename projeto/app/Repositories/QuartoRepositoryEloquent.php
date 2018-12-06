<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\QuartoRepository;
use App\Models\Quarto;

/**
 * Class QuartoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class QuartoRepositoryEloquent extends BaseRepository implements QuartoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Quarto::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
