<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gender';

    /**
     * Get the User gender.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
