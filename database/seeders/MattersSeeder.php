<?php

namespace Database\Seeders;

use App\Models\Matter;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MattersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $clients = Client::all();

        foreach ($clients as $client) {
            for ($i = 0; $i < 150; $i++) {
                Matter::create([
                    'client_id' => $client->id,
                    'matter_name' => $faker->word,
                    'matter_description' => $faker->paragraphs(3, true), // Generate longer text
                    'matter_status' => $faker->randomElement(['open', 'closed', 'in progress']),
                    'matter_type' => $faker->word,
                    'matter_priority' => $faker->randomElement(['low', 'medium', 'high']),
                    'matter_assignee' => $faker->name,
                    'matter_reporter' => $faker->name,
                    'matter_due_date' => $faker->date,
                    'matter_start_date' => $faker->date,
                    'matter_end_date' => $faker->date,
                    'matter_tags' => $faker->words(3, true),
                    'matter_notes' => $faker->paragraphs(2, true), // Generate longer text
                    'matter_attachments' => $faker->word,
                    'created_by' => 1,
                    'updated_by' => 1,
                ]);
            }
        }
    }
}
