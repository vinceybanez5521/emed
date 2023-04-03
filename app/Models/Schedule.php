<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'doctor_id'];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    protected function status() : Attribute {
        return new Attribute(
            get: fn ($status) => ['Ongoing', 'Done', 'Cancelled'][$status],
        );
    }

    // protected function date() : Attribute {
    //     return new Attribute(
    //         get: fn ($date) => Carbon::createFromFormat('Y-m-d', $date)->format('F j, Y'),
    //     );
    // }

}
