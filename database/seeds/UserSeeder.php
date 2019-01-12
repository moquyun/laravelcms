<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 2)->create();

        $usera = $users[0];
        $usera->name = 'dbg8685';
        $usera->email = 'dbg@gnics.com';
        $usera->password = bcrypt('dbg8685');
        $usera->remember_token = 'dbg8685';
        $usera->save();

        $userb = $users[1];
        $userb->name = 'admin888';
        $userb->email = 'admin888@admin.com';
        $userb->save();
    }
}
