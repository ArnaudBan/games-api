<?php

namespace App\Containers\Game\Models;

use App\Ship\Parents\Models\Model;

class Game extends Model
{
    protected $fillable = [
      'title', 'description', 'ean'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'games';
}
