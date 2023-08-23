<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "address",
        "country_id",
        "city_id",
        "state_id",
        "department_id",
        "zip_code",
        "birth_date",
        "date_hired"
    ];

    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city():BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function department():BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
