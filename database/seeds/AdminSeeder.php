<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Admin::class, 2)->create();

        $usera = $users[0];
        $usera->name = 'dbg8685';
        $usera->password = bcrypt('dbg8685');
        $usera->nickname = '***维护***';
        $usera->remember_token = 'dbg8685';
        $usera->save();

        $userb = $users[1];
        $userb->name = 'admin888';
        $userb->nickname = '超级管理员';
        $userb->save();
    }
}
