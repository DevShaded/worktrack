<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeePayroll extends Model
{
    protected $fillable = [
        'month',
        'year',
        'regular_hours_worked',
        'overtime_hours_worked',
        'total_earnings',
        'deductions',
        'net_pay',
    ];

    protected function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
