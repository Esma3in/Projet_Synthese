<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Atelier extends Model
{
    use hasFactory ;

    protected $fillable = [
        'nomAtelier',
        'descriptionAtelier',
    ];

    public function evenement():BelongsTo{
        return $this -> belongsTo(Evenement::class);
    }
}
