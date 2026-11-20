<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Admin>
 */
class AdminFactory extends Factory
{

// public $status =['Active' , 'Inactive'] ;
public $role =['Admin','Super Admin','Moderator'] ;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
              'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('123456'),
            "phone" => fake()->phoneNumber() ,
            // "status" => $this->status[rand(0,1)] ,
            "role" => $this->role[rand(0,2)] ,
            'img' =>"admins/". rand(1,15) . '.jpg',

        ];
    }
}
