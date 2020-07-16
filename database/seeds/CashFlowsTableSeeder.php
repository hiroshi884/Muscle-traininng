<?php

use Illuminate\Database\Seeder;

class CashFlowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cash_flows')->truncate();

        //初期データ用意
        $CashFlows =[
        [
            'amount'=> 2000,
            'title'=>'book',
        ],
           [
               'amount'=> 3000,
               'title'=>'CD',
           ]
        ];
        

        //登録
        foreach($CashFlows as $CashFlow){
            \App\CashFlow::create($CashFlow);
        }
    }
    
}
