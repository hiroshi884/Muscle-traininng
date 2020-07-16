<?php

use App\Models\Calendar;
use Illuminate\Database\Seeder;

class CalendarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [
                'user_id' => 2,
                'protain_name' => '胸',
            ],
            [
                'user_id' => 1,
                'protain_name' => '腕',
            ],
           
        ];

        foreach ($dataSet as $data) {
            Calendar::create($data);
        }
    }
}
