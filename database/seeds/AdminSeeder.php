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

        $user = $users[0];
        $user->name = 'admin';
        $user->nickname = '超级管理员';
        $user->save();

        $usera = $users[1];
        $usera->name = 'dbg8685';
        $usera->password = bcrypt('dbg8685');
        $usera->nickname = '***维护***';
        $usera->remember_token = 'dbg8685';
        $usera->save();

        \Spatie\Permission\Models\Role::create([
            'title' => '管理员',
            'name' => 'admin',
            'guard_name' => 'admin'
        ]);
        $user->assignRole('admin');
        //$usera->assignRole('admin');
    }
}
