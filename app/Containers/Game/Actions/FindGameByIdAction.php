<?php

namespace App\Containers\Game\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindGameByIdAction extends Action
{
    public function run(Request $request)
    {
        $game = Apiato::call('Game@FindGameByIdTask', [$request->id]);

        return $game;
    }
}
