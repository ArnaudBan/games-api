<?php

namespace App\Containers\Game\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateGameAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $game = Apiato::call('Game@CreateGameTask', [$data]);

        return $game;
    }
}
