<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscription extends Model
{
    use hasFactory;

    protected $fillable = [
        'dateInscription',
        'statusInscription',
    ];

    public function participant():BelongsTo{
        return $this->belongsTo(Participant::class);
    }

    public function evenement():BelongsTo{
        return $this->belongsTo(Evenement::class);
    }
}
