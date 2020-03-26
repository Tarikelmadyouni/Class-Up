<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
Use App\User;
Use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       User::truncate();
       DB::table('role_user')->truncate();

        $adminRole = Role::where('role','Admin')->first();
        $professeurRole = Role::where('role','Professeur')->first();
        $studentRole = Role::where('role','Student')->first();

        $professeur = User::create([
            'name'=>'Professeur User',
            'role'=>'Professeur',
            'email'=> 'professeur@professeur.com',
            'password'=> Hash::make('passeword')
        ]);

        $student = User::create([
            'name'=>'Student User',
            'role'=>'Student',
            'email'=> 'student@student.com',
            'password'=> Hash::make('student')
        ]);



        $admin = User::create([
            'name'=>'Admin User',
            'role'=>'Admin',
            'email'=> 'Admin@admin.com',
            'password'=> Hash::make('adminadmin')
        ]);

        $admin->roles()->attach($adminRole);
        $professeur->roles()->attach($professeurRole);
        $student->roles()->attach($studentRole);

    }
}

