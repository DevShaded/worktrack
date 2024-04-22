<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeAttendance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EmployeeAttendanceFactory extends Factory
{
    protected $model = EmployeeAttendance::class;

    public function definition(): array
    {
        $clockInTime = Carbon::now();
        $clockOutTime = Carbon::now()->addHours($this->faker->randomFloat(1, 1, 12));
        $totalHoursWorked = abs($clockOutTime->diffInHours($clockInTime));

        return [
            'employee_id' => Employee::factory(),
            'clock_in_time' => $clockInTime,
            'clock_out_time' => $clockOutTime,
            'total_hours_worked' => $totalHoursWorked,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
