<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブル7のクリア
        DB::table('book')->truncate();

        //初期データのクリア
        $books = [
            ['name'=>'PHP Book',
            'price'=> 2000,
            'author'=>'PHPER'],
            ['name'=>'Laravel Book',
            'price'=>3000,
            'author'=>null],
            ['name'=>'Ruby Book',
            'price'=> 2500,
            'author'=>'Rubyist']
        ];

        //登録
        foreach($book as $book){
            \App\Book::create($book);
        }
    }
}
