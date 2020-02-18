<?php

/**
 * @apiGroup           Game
 * @apiName            getAllGames
 *
 * @api                {GET} /v1/games Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('games', [
    'as' => 'api_game_get_all_games',
    'uses'  => 'Controller@getAllGames',
    'middleware' => [
      'auth:api',
    ],
]);
