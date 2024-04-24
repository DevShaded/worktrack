<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeePayroll;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EmployeePayrollFactory extends Factory
{
    protected $model = EmployeePayroll::class;

    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'month' => $this->faker->numberBetween(0, 11),
            'year' => $this->faker->year(),
            'regular_hours_worked' => $this->faker->randomFloat(),
            'overtime_hours_worked' => $this->faker->randomFloat(),
            'total_earnings' => $this->faker->randomFloat(null, 0, 1000),
            'deductions' => $this->faker->randomFloat(null, 0, 1000),
            'net_pay' => $this->faker->randomFloat(null, 0, 1000),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
