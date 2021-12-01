<?php

namespace Database\Seeders;

use App\Models\ViewCount;
use Illuminate\Database\Seeder;

class ViewCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['index', 'package', 'feature', 'about', 'contact', 'user_uuid', 'home', 'profile', 'setting', 'action', 'create_data', 'list', 'verify'];

        foreach ($array as $arr) {
            ViewCount::create([
                'page_name' => $arr
            ]);
        }
    }
}
