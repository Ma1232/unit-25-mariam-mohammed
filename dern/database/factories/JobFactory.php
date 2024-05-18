<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
$randid= Ticket::pluck('id');
        $status=['Scheduled','Completed'];
        return [
            
            'JobName'=>fake()->name(),
            'TicketID'=>fake()->randomElement($randid),
            'scheduled_at'=>fake()->dateTime('now'),
            'Status'=>fake()->randomElement($status)
        ];
    }
}
