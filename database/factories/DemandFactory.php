<?php

namespace Database\Factories;

use App\Models\Demand;
use App\Models\ProjectType;
use App\Models\ServiceType;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'email' =>$this->faker->safeEmail(),
            'phone' =>$this->faker->phoneNumber(),
            'project_type_id' =>ProjectType::all()->random()->id,
            'service_type_id' =>ServiceType::all()->random()->id,
            'subject_id' =>Subject::all()->random()->id,
            'pageNbr' =>$this->faker->randomDigit(1, true),
            'limitdate' =>$this->faker->date(),
            'topic' =>$this->faker->sentence(),
            'remark'=>$this->faker->paragraph(),
        ];
    }
}
