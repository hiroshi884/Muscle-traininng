<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Protain;
use Illuminate\Http\Request;

class UserController extends Controller
{   
    
    public function index()
    {  
        $users= User::all();
    return view('users.index',['users'=>$users,]);
    }
  
    public function show(User $user)
{  $user->load(['protains' => function ($query) {
    $query->orderBy('date', 'desc');
        }]);
    return view('users.show', ['user' => $user]);
}

public function delete(Protain $protain)
{
   if(Auth::id() !==$protain ->user_id)
    {
    abort(403);
    }
  
    $protain->delete();

    return redirect()->to('/');
}

}
