<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      for($i=1 ; $i<=10 ; $i++){
        // DB::table('users')->insert([
          DB::table('users')->insert([
          'name' => 'testuser'.$i,
          'email' => 'testuser'.$i.'@gmail.com',
          'email_verified_at' => Carbon::now(),
          'password' => Hash::make('password'),
          'age' => 0,
          'gender' => 0,
          'created_at' => Carbon::now(),
          'update_at' => Carbon::now()
        ]);
      }
    }
}
