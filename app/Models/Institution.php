<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
