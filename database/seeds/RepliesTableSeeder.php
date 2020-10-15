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
                'protain_id' =>1,
                'body' =>'お疲れ様'
                
            ],
            [
                'user_id' => 1,
                'protain_id' => 1,
                'body' =>'ありがとう'
            ],
            [
                'user_id' => 1,
                'protain_id' => 2,
                'body' =>'どすこい'
            ]
      ];

      foreach ($dataSet as $data) {
        Reply::create($data);
    }      
    }
}
