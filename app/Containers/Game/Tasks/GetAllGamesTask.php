<?php

namespace App\Containers\Game\Tasks;

use App\Containers\Game\Data\Repositories\GameRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllGamesTask extends Task
{

    protected $repository;

    public function __construct(GameRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
