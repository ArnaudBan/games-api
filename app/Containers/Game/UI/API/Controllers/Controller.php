<?php

namespace App\Containers\Game\UI\API\Controllers;

use App\Containers\Game\UI\API\Requests\CreateGameRequest;
use App\Containers\Game\UI\API\Requests\DeleteGameRequest;
use App\Containers\Game\UI\API\Requests\GetAllGamesRequest;
use App\Containers\Game\UI\API\Requests\FindGameByIdRequest;
use App\Containers\Game\UI\API\Requests\UpdateGameRequest;
use App\Containers\Game\UI\API\Transformers\GameTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Game\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateGameRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createGame(CreateGameRequest $request)
    {
        $game = Apiato::call('Game@CreateGameAction', [$request]);

        return $this->created($this->transform($game, GameTransformer::class));
    }

    /**
     * @param FindGameByIdRequest $request
     * @return array
     */
    public function findGameById(FindGameByIdRequest $request)
    {
        $game = Apiato::call('Game@FindGameByIdAction', [$request]);

        return $this->transform($game, GameTransformer::class);
    }

    /**
     * @param GetAllGamesRequest $request
     * @return array
     */
    public function getAllGames(GetAllGamesRequest $request)
    {
        $games = Apiato::call('Game@GetAllGamesAction', [$request]);

        return $this->transform($games, GameTransformer::class);
    }

    /**
     * @param UpdateGameRequest $request
     * @return array
     */
    public function updateGame(UpdateGameRequest $request)
    {
        $game = Apiato::call('Game@UpdateGameAction', [$request]);

        return $this->transform($game, GameTransformer::class);
    }

    /**
     * @param DeleteGameRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteGame(DeleteGameRequest $request)
    {
        Apiato::call('Game@DeleteGameAction', [$request]);

        return $this->noContent();
    }
}
