<?php

namespace App\Modules\ArmaLife\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Modules\ArmaLife\Repositories\HouseRepository as HouseInterface;
use App\Modules\ArmaLife\Models\House;

/**
 * Class HouseRepository
 * @package namespace App\Modules\ArmaLife\Repositories;
 */
class HouseRepository extends BaseRepository implements HouseInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return House::class; 
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
