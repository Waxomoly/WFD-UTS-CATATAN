<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    use HasUuids;

    protected $fillable = [
        'name',
        'personality'
    ];

    protected $hidden = [

    ];

    public static function relations()
    {
        return ['organizations'];
    }

    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(Organization::class)->withPivot('reason')->withTimestamps();
    }
}
