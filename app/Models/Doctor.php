<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'address', 'gender', 'civil_status', 'date_of_birth', 'phone_number', 'prc_license_number', 'user_id', 'photo', 'prc_photo', 'status', 'specialty_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function specialty() {
        return $this->belongsTo(Specialty::class);
    }

    protected function fullName() : Attribute {
        return new Attribute(
            get: fn () => $this->first_name . " " . $this->last_name,
        );
    }

    protected function status() : Attribute {
        return new Attribute(
            get: fn ($status) => ['Pending', 'Approved', 'Rejected'][$status],
        );
    }

    protected $appends = ['full_name'];
}
