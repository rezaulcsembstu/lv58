<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [];

        foreach (Route::getRoutes() as $route) {
            $action = $route->getAction();

            if (array_key_exists('controller', $action)) {
                // You can also use explode('@', $action['controller']);
                // here to separate the class name from the method
                $controllersExploded = explode('@', $action['controller']);

                $actionName = end($controllersExploded);

                $controllersNameParted = explode('\\', $controllersExploded[0]);
                $controllersName = end($controllersNameParted);

                $originName = explode('Controller', $controllersName, -1);

                $permissions[] = $actionName . ' ' . $originName[0];
            }
        }

        $uniquePermissions = array_unique($permissions);

        foreach ($uniquePermissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web'
            ]);
        }
    }
}
