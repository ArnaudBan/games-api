<?php

namespace App\Containers\Game\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllGamesAction extends Action
{
    public function run(Request $request)
    {
        $games = Apiato::call('Game@GetAllGamesTask', [], ['addRequestCriteria']);

        return $games;
    }
}
