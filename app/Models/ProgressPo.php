<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressPo extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }
}
