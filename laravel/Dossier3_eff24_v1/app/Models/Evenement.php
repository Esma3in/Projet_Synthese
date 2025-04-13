<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Evenement extends Model
{
    use hasFactory ;

    protected $fillable = [
        'theme',
        'date_debut',
        'date_fin',
        'description',
        'cout_journalier'
    ];

    public function expert():HasOne{
        return $this->HasOne(Expert::class);
    }

    public function atelier():HasMany{
        return $this->HasMany(Atelier::class);
    }

    public function inscription():HasMAny{
        return $this->HasMany(Evenement::class);
    }

}
