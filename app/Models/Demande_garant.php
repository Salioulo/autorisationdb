<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande_garant extends Model
{
    use HasFactory;

    protected $guarded = ['demande_id'];
    protected $guarde= ['garant_id'];
}
