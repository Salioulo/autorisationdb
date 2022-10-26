<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class typeDocument extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the taches for the document
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function document(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
