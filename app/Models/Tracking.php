<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function images()
    {
        return $this->hasMany(TrackingImage::class);
    }

    public function progress_po()
    {
        return $this->belongsTo(ProgressPo::class);
    }

    public function production_po()
    {
        return $this->belongsTo(ProductionPo::class);
    }

    public function finance_po()
    {
        return $this->belongsTo(FinancePo::class);
    }

    public function marketing_po()
    {
        return $this->belongsTo(MarketingPo::class);
    }
}
