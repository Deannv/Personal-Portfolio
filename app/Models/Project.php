<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    protected $guarded = ['id'];

    function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }
}
