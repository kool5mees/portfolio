<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function frameworks(): BelongsToMany{
        return $this->belongsToMany(Framework::class);
    }
    public $timestamps = false;
}
