<?php
use App\Models\Reply;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
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
                'protain_id' => 2,
                
            ],
            [
                'user_id' => 1,
                'protain_id' => 1,]
      ];

      foreach ($dataSet as $data) {
        Reply::create($data);
    }      
    }
}
