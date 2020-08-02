<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
   
    public function run()
    {
        // array de permisos 
        $permission_array = [];
        array_push($permission_array, Permission::create(['name' => 'users_edit']));
        array_push($permission_array, Permission::create(['name' => 'users_show']));
        array_push($permission_array, Permission::create(['name' => 'users_delete']));
        array_push($permission_array, Permission::create(['name' => 'users_create']));

        //permisos rol vendedor
        $permission_vendedor =          Permission::create(['name' => 'vender']);
        array_push($permission_array, $permission_vendedor);

        // role super-admin
        $roleSuperAdmin = Role::create(['name' => 'super-admin']);
        //asignacion de permisos añ rol super-admin
        $roleSuperAdmin->syncPermissions($permission_array);
        //rol asesor 
        $rolevendedor = Role::create(['name' => 'vendedor']);
        //asignacion de permisos al rol vendedor 
        $rolevendedor->givePermissionTo($permission_vendedor);

        //creacion de usuario super admin
        $superAdminUser =  User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        //asignacion de rol a usuario admin
        $superAdminUser->assignRole('super-admin');

        //creacion de usuario vendedor
        $vendedorUser =  User::create([
            'name' => 'vendedor',
            'email' => 'vendedor@gmail.com',
            'password' => Hash::make('vendedor'),
        ]);
        //asignacion de role a usuario vendedor 
        $vendedorUser->assignRole('vendedor');
    }
}
