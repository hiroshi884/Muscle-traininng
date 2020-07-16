<?php
use App\Models\Protain;
use Illuminate\Database\Seeder;

class ProtainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //初期データ用意
        
            $dataSet= [
                ['name' => '腕',
                'user_id' => 1,
                 'things' =>'腕立て伏せ' ,
                 'weights' =>null,
                 'how_many' => 2,
                 'sets' => 2,
                 'date' => '2020-06-23',
                 'body' => '追い込めたぁぁ'
                ],
               
                 
                    ['name' => '胸',
                    'user_id' => 2,
                     'things' =>'ベンチプレス' ,
                     'weights' =>null,
                     'how_many' => 3,
                     'sets' => 3,
                     'date' =>'2020-06-23',
                     'body' => '疲れたぁぁ'
                    ],
                   
                ];

  // 登録
  foreach($dataSet as $data) {
    Protain::create($data);
  }
    }
}
