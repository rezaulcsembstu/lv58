<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Get array of ids
        $permissionIds = DB::table('permissions')->pluck('id')->toArray();
        $roleIds = DB::table('roles')->pluck('id')->toArray();

        //Seed role_has_permissions table with 20 entries
        foreach ($roleIds as $role) {
            $tempPermissionIds = $permissionIds;
            foreach ((range(1, 20)) as $index) {
                $randomKey = array_rand($tempPermissionIds);
                DB::table('role_has_permissions')->insert(
                    [
                        'role_id' => $role,
                        'permission_id' => $permissionIds[$randomKey]
                    ]
                );
                if (empty($tempPermissionIds)) {
                    break;
                } else {
                    unset($tempPermissionIds[$randomKey]);
                }

            }
        }
    }
}
