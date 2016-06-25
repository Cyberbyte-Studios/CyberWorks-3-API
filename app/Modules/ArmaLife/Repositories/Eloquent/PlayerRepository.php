<?php

namespace App\Modules\ArmaLife\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Modules\ArmaLife\Repositories\PlayerRepository as PlayerInterface;
use App\Modules\ArmaLife\Models\Player;

/**
 * Class PlayerRepository
 * @package namespace App\Modules\ArmaLife\Repositories;
 */
class PlayerRepository extends BaseRepository implements PlayerInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Player::class; 
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
