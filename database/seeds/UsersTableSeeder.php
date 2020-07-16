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
        User::create([
            'name' =>'トム',
            'email' =>'tom@example.com',
            'password' =>bcrypt('tomtompurin')
        ]);
        User::create([
            'name' =>'ひろ',
            'email' =>'hiro@gmail.com',
            'password' =>bcrypt('hiro884')
        ]);
        User::create([
            'name' =>'たろ',
            'email' =>'taro@example.com',
            'password' =>bcrypt('tarotaro')
        ]);
        User::create([
            'name' =>'はな',
            'email' =>'hana@example.com',
            'password' =>bcrypt('hanahana')
        ]);
    }
}
