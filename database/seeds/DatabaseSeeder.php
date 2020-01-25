<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryPostTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(UserTableSeeder::class);

        //First Role, Permission and then RoleHasPermission need to be seed
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleHasPermissionTableSeeder::class);
    }
}
