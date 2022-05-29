<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doc_id',
        'time'
    ];

    // Relationship to Doctor
    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doc_id');
    }

    // Relationship to Patient
    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
