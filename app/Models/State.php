<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $fillable = [
        "country_id",
        "name"
    ];

    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function employees():HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
