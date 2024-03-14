<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name" => "Admin",
            "identity" => "admin",
            "created_at"=>Carbon::now()
        ]);
        Role::create([
            "name" => "Customer",
            "identity" => "customer",
            "created_at"=>Carbon::now()
        ]);
        Role::create([
            "name" => "Delivery Man",
            "identity" => "deliveryman",
            "created_at"=>Carbon::now()
        ]);
    }
}
