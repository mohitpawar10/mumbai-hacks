<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'mission',
        'vision',
        'values',
        'logo',
        'color_palate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
