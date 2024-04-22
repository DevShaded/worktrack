<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeAttendance extends Model
{
    protected $fillable = [
        'employee_id',
        'clock_in_time',
        'clock_out_time',
        'total_hours_worked',
    ];

    protected function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    protected function casts(): array
    {
        return [
            'clock_in_time' => 'datetime',
            'clock_out_time' => 'datetime',
        ];
    }
}
