<?php

namespace C18app\Cmsx\Seeds;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if role superadmin exists
        if(is_null(\DB::table(\Config::get('cmsx.table_prefix') . 'roles')->where('name', 'superadmin')->first())) {
            \DB::table(\Config::get('cmsx.table_prefix') . 'roles')->insert([
                'name' => 'superadmin'
            ]);
        }
    }
}
