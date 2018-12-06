<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ImagemRepository;
use App\Models\Imagem;

/**
 * Class ImagemRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ImagemRepositoryEloquent extends BaseRepository implements ImagemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Imagem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
