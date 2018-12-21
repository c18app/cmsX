<?php

namespace C18app\Cmsx\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if role owner exists
        if(is_null(\DB::table(\Config::get('cmsx.table_prefix') . 'roles')->where('name', 'owner')->first())) {
            \DB::table(\Config::get('cmsx.table_prefix') . 'roles')->insert([
                ['name' => 'owner', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'guest', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ]);
        }
    }
}
