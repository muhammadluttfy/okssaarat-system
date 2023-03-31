<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingImage extends Model
{
    use HasFactory;

    protected $table = 'tracking_images';

    protected $guarded = [''];

    public function tracking()
    {
        return $this->belongsTo(Tracking::class);
    }
}
