<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert([
            "login" => "admin",
            "email" => "admin@vk.com",
            "password" => Hash::make("password"),
        ]);
    }
}
