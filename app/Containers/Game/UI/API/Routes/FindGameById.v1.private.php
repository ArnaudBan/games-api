<?php

/**
 * @apiGroup           Game
 * @apiName            findGameById
 *
 * @api                {GET} /v1/games/:id Endpoint title here..
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
$router->get('games/{id}', [
    'as' => 'api_game_find_game_by_id',
    'uses'  => 'Controller@findGameById',
    'middleware' => [
      'auth:api',
    ],
]);
