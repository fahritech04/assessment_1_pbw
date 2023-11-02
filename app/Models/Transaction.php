<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class, 'vehicleId');
    }
}
