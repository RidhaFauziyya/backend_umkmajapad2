<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $adminRecords = [
        //     ['id'=>2, 'name'=>'Roti Bakar', 'type'=>'vendor', 'vendorId'=>1, 'email'=>'ridhafauziyyar123@gmail.com', 
        //     'password'=>'$2a$12$fVmO/fG5auHsP6VYr1EZ1eCz3raGfb.A2RhzIWEBeBBqERbT/xFNO', 'status'=>0, 'confirm'=>'Yes'],
        // ];
        // Admin::insert($adminRecords);
    }
}
