<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeLeaveRequest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EmployeeLeaveRequestFactory extends Factory
{
    protected $model = EmployeeLeaveRequest::class;

    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'leave_type' => $this->faker->randomElements(['sick', 'vacation', 'personal']),
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays($this->faker->numberBetween(1, 3)),
            'status' => $this->faker->randomElements(['pending', 'approved', 'rejected']),
            'reason' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
