<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Task;
use App\Models\Role;
use App\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'mubarek',
        //     'email' => 'manager@example.com',
        //     'password' => 'password',
        //     'role_id' => 3,
        // ]);

        Task::create([
            'title'=>'Task 3',
            'description'=>'Task 1 description',
            'duedate'=>date('y-m-d'),
            'status'=>'0',
            'user_id'=>5,
        ]);

        // Role::create([
        //     'name'=>'Manager',
        //     'description'=>'Project and Task Manager'
        // ]);

        Permission::create([
            'name'=>'Submit_task',
            'description'=>'Able to submit tasks',
        ]);

    }
}
