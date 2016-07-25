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
            ['username' => 'admin001', 'name' => 'Ben'],
            ['username' => 'admin002', 'name' => 'James'],
            ['username' => 'admin003', 'name' => 'Maggie'],
        ];

        Users::truncate();
        foreach ($users as $val) {
            Users::create([
                'username' => $val['username'],
                'password' => Hash::make( $val['username']),
                'name'     => $val['name'],
            ]);
        }
    }
}
