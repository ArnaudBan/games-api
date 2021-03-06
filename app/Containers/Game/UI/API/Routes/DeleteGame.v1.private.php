<?php

/**
 * @apiGroup           Game
 * @apiName            deleteGame
 *
 * @api                {DELETE} /v1/games/:id Endpoint title here..
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
$router->delete('games/{id}', [
    'as' => 'api_game_delete_game',
    'uses'  => 'Controller@deleteGame',
    'middleware' => [
      'auth:api',
    ],
]);
