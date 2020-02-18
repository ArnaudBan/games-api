<?php

/**
 * @apiGroup           Game
 * @apiName            updateGame
 *
 * @api                {PATCH} /v1/games/:id Endpoint title here..
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
$router->patch('games/{id}', [
    'as' => 'api_game_update_game',
    'uses'  => 'Controller@updateGame',
    'middleware' => [
      'auth:api',
    ],
]);
