<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => Role::where('name',"Student")->first()->id,],
            ['name' => "Coco",
            'email' => "coco@gmail.com",
            'password' => bcrypt(12345678), //bcrypt pour crypter le mot de passe dans la base de donné sinon non valide
            'role_id' => Role::where('name',"Admin")->first()->id,]

        ]);
    }
}
