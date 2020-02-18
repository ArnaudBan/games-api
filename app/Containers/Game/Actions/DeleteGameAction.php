<?php

namespace App\Containers\Game\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteGameAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Game@DeleteGameTask', [$request->id]);
    }
}
