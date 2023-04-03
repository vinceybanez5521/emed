<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'schedule_id', 'status'];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    protected function status() : Attribute {
        return new Attribute(
            get: fn ($status) => ['Pending', 'Cancelled', 'Done'][$status],
        );
    }
}
