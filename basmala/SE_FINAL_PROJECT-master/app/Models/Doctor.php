<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dep_id',
        'name',
        'gender',
        'salary',
        'phone',
        'address',
        'period',
        'dateofbirth'
    ];

    // Relationship to User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship to Department
    public function department(){
        return $this->belongsTo(Department::class, 'dep_id');
    }

    // Relationship to Prescription
    public function prescription(){
        return $this->hasMany(Prescription::class, 'doc_id');
    }

    // Relationship to Appointment
    public function appointment(){
        return $this->hasMany(Appointment::class, 'doc_id');
    }
}
