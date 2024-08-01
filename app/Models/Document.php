<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'file_path', 'document_type_id', 'status', 'session', 'semester', 'uuid'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
