<?php

namespace App\Containers\Game\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class GameRepository
 */
class GameRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'  => '=',
        'ean' => '='
    ];

}
