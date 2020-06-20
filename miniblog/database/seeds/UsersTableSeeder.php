<?php
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [ 'name' => 'ぱな',
            'email' => 'hana0829@gmail.com',
            'password' =>bcrypt(' hana0829'),
        ],
        
        [
            'name' => 'ぴろ',
            'email' => 'hiri8843313@icloud.com',
            'password' =>bcrypt ('hiroshi8843313'),
        ],
    ];

    foreach($dataSet as $data){
        User ::create($data);
    }    
    }
}
