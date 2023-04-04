<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'address', 'gender', 'civil_status', 'date_of_birth', 'phone_number', 'user_id', 'photo', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected function fullName() : Attribute {
        $middleInitial = empty($this->middle_name) ? '' : $this->middle_name[0].'.';
        return new Attribute(
            get: fn () => $this->first_name . " " . $middleInitial. " " . $this->last_name,
        );
    }

    protected $appends = ['full_name'];
}
