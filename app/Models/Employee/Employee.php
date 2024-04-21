<?php

namespace App\Models\Employee;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $fillable = [
        'user_id',
        'team_id',
        'email',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function employeeAttendances(): HasMany
    {
        return $this->hasMany(EmployeeAttendance::class, 'employee_id');
    }

    public function employeeLeaveRequests(): HasMany
    {
        return $this->hasMany(EmployeeLeaveRequest::class, 'employee_id');
    }

    public function employeePayrolls(): HasMany
    {
        return $this->hasMany(EmployeePayroll::class, 'employee_id');
    }
}
