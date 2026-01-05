<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    protected $guarded = ['id'];

    function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class);
    }

    function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
}
