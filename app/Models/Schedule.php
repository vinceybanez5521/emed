<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'doctor_id'];

    protected function status() : Attribute {
        return new Attribute(
            get: fn ($status) => ['Ongoing', 'Done', 'Cancelled'][$status],
        );
    }
}
