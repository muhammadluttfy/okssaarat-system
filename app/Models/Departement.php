<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
