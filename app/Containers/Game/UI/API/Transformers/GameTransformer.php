<?php

namespace App\Containers\Game\UI\API\Transformers;

use App\Containers\Game\Models\Game;
use App\Ship\Parents\Transformers\Transformer;

class GameTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Game $entity
     *
     * @return array
     */
    public function transform(Game $entity)
    {
        $response = [
            'object' => 'Game',
            'id' => $entity->getHashedKey(),
            'title' => $entity->title,
            'description' => $entity->description,
            'ean' => $entity->ean,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
