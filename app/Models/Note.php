<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $dates = [
        'updated_at'
    ];

    public function getCreatedFormatAttribute()
    {
        return $this->updated_at->format('d-m-Y');
    }

    protected $appends = ['created_format'];
}
