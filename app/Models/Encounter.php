<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Encounter extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'doctor_id',
        'patient_first_name',
        'patient_last_name',
        'patient_birth_date',
        'patient_gender',
        'patient_email',
        'patient_phone',
        'scheduled_at',
        'encounter_type',
        'status',
        'duration_minutes',
        'requires_follow_up',
        'follow_up_at',
        'reason',
        'notes',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'patient_birth_date' => 'date',
        'scheduled_at' => 'datetime',
        'follow_up_at' => 'datetime',
        'requires_follow_up' => 'boolean',
        'duration_minutes' => 'integer',
    ];

    /**
     * Get the doctor responsible for the encounter.
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
