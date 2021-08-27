<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Assad Yaqoob',
            'email' => 'assad2595@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'System User',
            'status' => 'Active',
            'country_id' => 237,
            'mobile_number' => '0123456789',
            'office_number' => '0123456789',
            'company_name' => 'XYZ',
            'address' => 'XYZ',
            'unique_id' => uniqid(time()),

        ]);

        User::create([
            'name' => 'Asim Khan',
            'email' => 'deeds2595@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'System User',
            'status' => 'Active',
            'country_id' => 237,
            'mobile_number' => '0123456789',
            'office_number' => '0123456789',
            'company_name' => 'XYZ',
            'address' => 'XYZ',
            'unique_id' => uniqid(time()),

        ]);
        User::create([
            'name' => 'Asim Khan',
            'email' => 'webtimecreative@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'System User',
            'status' => 'Active',
            'country_id' => 237,
            'mobile_number' => '0123456789',
            'office_number' => '0123456789',
            'company_name' => 'XYZ',
            'address' => 'XYZ',
            'unique_id' => uniqid(time()),

        ]);
        User::create([
            'name' => 'Asim Khan',
            'email' => 'basitawan.abdul@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'System User',
            'status' => 'Active',
            'country_id' => 237,
            'mobile_number' => '0123456789',
            'office_number' => '0123456789',
            'company_name' => 'XYZ',
            'address' => 'XYZ',
            'unique_id' => uniqid(time()),

        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@menainsurance.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'type' => 'Admin',
            'status' => 'Active',
            'country_id' => 237,
            'mobile_number' => '0123456789',
            'office_number' => '0123456789',
            'company_name' => 'XYZ',
            'address' => 'XYZ',
            'unique_id' => uniqid(time()),

        ]);
    }
}
