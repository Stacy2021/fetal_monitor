<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }
}
