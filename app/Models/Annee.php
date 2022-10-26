<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Annee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    /**
     * Get all of the taches for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function demande(): HasMany
    {
        return $this->hasMany(Demande::class);
    }

}
