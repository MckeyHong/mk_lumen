<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\Model\Users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['email' => 'admin001@mk.com', 'name' => 'Ben'],
            ['email' => 'admin002@mk.com', 'name' => 'James'],
            ['email' => 'admin003@mk.com', 'name' => 'Maggie'],
        ];

        Users::truncate();
        foreach ($users as $val) {
            Users::create([
                'email'    => $val['email'],
                'password' => Hash::make('test12345'),
                'name'     => $val['name'],
            ]);
        }
    }
}
