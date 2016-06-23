<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('menus')->insert ([
        	'name'=>'Cheese Burger',
        	'price'=>'3.00',
            ]);
        DB::table('menus')->insert ([
            'name'=>'Hamburger',
            'price'=>'3.50',
            ]);
        DB::table('menus')->insert([
            'name'=>'Chicken Burger',
            'price'=>'3.00',
            ]);
        DB::table('menus')->insert([
            'name'=>'Fish Burger',
            'price'=>'3.00',
            ]);
        DB::table('menus')->insert([
            'name'=>'French Fry',
            'price'=>'2.00',
            ]);
        DB::table('menus')->insert([
            'name'=>'Chicken Ngts',
            'price'=>'2.00',
            ]);
        DB::table('menus')->insert([
            'name'=>'Coke Cola',
            'price'=>'1.00',
            ]);
        DB::table('menus')->insert([
            'name'=>'Lemonade',
            'price'=>'1.00',
            ]);
    }
        
}
