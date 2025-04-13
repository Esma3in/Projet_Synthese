<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expert extends Model
{
    use HasFactory ;
    protected $fillable = [
        'nomExp',
        'prenomExp',
        'telExp',
        'SpecialiteExp',
        'EmailExp'
    ];

    public function evenement():HasMany{
        return $this->HasMany(Evenement::class);
    }
}
