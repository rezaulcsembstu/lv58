<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Spatie\Permission\Models\Role as Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /**
         * By Default Administrative roles.
         */
        $faker = Faker::create();

        $faker->addProvider(new \CategoryNameGenerator\Provider\en_US\Category($faker));

        for ($i=0; $i < 3; $i++) {
            Role::create([
                'name' => $faker->administrator($i),
                'guard_name' => 'web'
            ]);
        }

        factory(Spatie\Permission\Models\Role::class, 5)->create();

    }
}
