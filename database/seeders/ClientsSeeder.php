<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            Client::create([
                'client_name' => $faker->company,
                'company_title' => $faker->companySuffix,
                'phone' => $faker->phoneNumber,
                'mobile' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber,
                'email' => $faker->companyEmail,
                'secondary_email' => $faker->companyEmail,
                'address' => $faker->address,
                'city' => $faker->city,
                'postal_code' => $faker->postcode,
                'country' => $faker->country,
                'contact_person' => $faker->name,
                'website' => $faker->url,
                'industry' => $faker->word,
                'registration_number' => $faker->randomNumber(8),
                'tax_number' => $faker->randomNumber(8),
                'legal_status' => $faker->word,
                'client_type' => $faker->randomElement(['Individual', 'Company']),
                'preferred_contact_method' => $faker->randomElement(['Email', 'Phone', 'Mobile']),
                'status' => 'active',
                'notes' => $faker->paragraph,
                'billing_address' => $faker->address,
                'billing_email' => $faker->companyEmail,
                'created_by' => 1,
                'updated_by' => 1,
            ]);
        }
    }
}
