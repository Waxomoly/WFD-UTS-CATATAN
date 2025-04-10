<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Organization extends Model
{

    use HasUuids;

    protected $fillable = [
        'name',
        'desc'
    ];

    protected $hidden = [

    ];

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(Participant::class)->withPivot('reason')->withTimestamps();
    }
}
