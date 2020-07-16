<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CashFlowsを読み込むように指定
        $this->call(CashFlowsTableSeeder::class);
        $this->call(ProtainsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RepliesTableSeeder::class);
        $this->call(CalendarsTableSeeder::class); 
    }

}
