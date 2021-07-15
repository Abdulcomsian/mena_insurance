<?php

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
              'name' => 'Silver',
              'description' => 'None',
              'price' => '100',
              'sanctions' => '10',
            ],
            [
              'name' => 'Gold',
              'description' => 'None',
              'price' => '200',
              'sanctions' => '20',
            ],
            [
              'name' => 'Platinum',
              'description' => 'none',
              'price' => '300',
              'sanctions' => '30',
            ],
        ];

        foreach($items as $item){
            Package::create($item);
        }
    }
}
