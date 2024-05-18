<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

$status=['Open','Closed'];
        $randcustid= Customer::pluck('id');
        return [
            'CustomerID'=>fake()->randomElement($randcustid),
            'IssueDescription'=>fake()->sentence(),
            'status'=>fake()->randomElement($status)

        ];
    }
}
