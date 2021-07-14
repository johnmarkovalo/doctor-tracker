<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalRoom extends Model
{
    protected $fillable = [
        'hospital_id', 'occupant_id', 'name', 'status'
    ];

    protected $hidden = [
        'hospital_id', 'occupant_id', 'created_at', 'updated_at'
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function occupant()
    {
        return $this->belongsTo(Occupant::class);
    }
}
}

