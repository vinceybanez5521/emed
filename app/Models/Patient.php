<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function user() {
        $this->belongsTo(User::class);
    }

    protected function fullName() : Attribute {
        return new Attribute(
            get: fn () => $this->first_name . " " . $this->last_name,
        );
    }

    protected $appends = ['full_name'];
}
