<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset cached roles and permissions
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

      // create permissions
      Permission::create(['name' => 'crear_citas']);
      Permission::create(['name' => 'editar_citas']);
      Permission::create(['name' => 'cancelar_citas']);
      Permission::create(['name' => 'ver_doctores']);
      Permission::create(['name' => 'registrar_pacientes']);
      Permission::create(['name' => 'editar_pacientes']);
      Permission::create(['name' => 'proximas_citas']);
      Permission::create(['name' => 'gestion_citas']);

      // create roles and assign created permissions

      //recepcion
      $role = Role::create(['name'=> 'recepcion']);
      $role->givePermissionTo('crear_citas');
      $role->givePermissionTo('editar_citas');
      $role->givePermissionTo('cancelar_citas');
      $role->givePermissionTo('ver_doctores');
      $role->givePermissionTo('registrar_pacientes');
      $role->givePermissionTo('editar_pacientes');
      $role->givePermissionTo('proximas_citas');
      $role->givePermissionTo('gestion_citas');

      //doctor
      $role = Role::create(['name'=> 'doctor']);
      $role->givePermissionTo('crear_citas');
      $role->givePermissionTo('editar_citas');
      $role->givePermissionTo('cancelar_citas');
      $role->givePermissionTo('registrar_pacientes');
      $role->givePermissionTo('editar_pacientes');
      $role->givePermissionTo('proximas_citas');
      $role->givePermissionTo('gestion_citas');

      //paciente
      $role = Role::create(['name'=> 'paciente']);

    }
}
