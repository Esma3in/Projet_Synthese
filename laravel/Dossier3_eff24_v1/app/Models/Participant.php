<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Participant extends Model
{
    
    use hasFactory ;

    protected $fillable = [
        'nomPart',
        'prenomPart',
        'sexePart',
        'telPart',
        'emailPart'
    ];

    public function inscription():HasMany{
        return $this->HasMany(Inscription::class);
    }
}
