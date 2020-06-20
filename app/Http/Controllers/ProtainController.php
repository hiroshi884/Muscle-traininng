<?php

namespace App\Http\Controllers;

use App\Models\Protain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class ProtainController extends Controller
{
    
  public function index()
{
    $protains = Protain::with(['user'])->orderBy('created_at', 'desc')->get();

    return view('index', ['protains' => $protains]);
}
public function create()
{
    return view('protains.create');
}
public function store(Request $request)
{
    $protain = new Protain;
    $protain->fill($request->all());
    $protain->user()->associate(Auth::user()); // ★
    $protain->save();

    return redirect()->to('/'); // '/' へリダイレクト
}
public function delete(Protain $protain)
{
    //投稿者本人でなければ削除を許可しない
    if (Auth::id() !== $protain->user_id) {
        abort(403);
    }
   
    $protain->delete();

    return redirect()->to('/');
}
}