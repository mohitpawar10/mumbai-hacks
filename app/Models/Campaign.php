<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{

    protected $fillable = ['name', 'prompt', 'banner_image', 'meta'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
