<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Protain;
use App\Models\Reply;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class ProtainController extends Controller
{
    
  public function index()
{
    $protains = Protain::with(['user'])->orderBy('date', 'desc')->get();
    return view('index', ['protains' => $protains]);
}

public function create()
{
    $protains = Protain::with(['user'])->orderBy('date', 'desc')->get();
    return view('protains.create',['users' => User::orderBy('id', 'desc')->paginate(),],['protains' => $protains]);
}
public function store(Request $request)
{
    $protain = new Protain;
    $protain->fill($request->all());
    $protain->user()->associate(Auth::user()); 
    $protain->save();

    return redirect()->to('/protains'); 
}
public function show(Protain $protain)
{ 
    return view('protains.show', ['protain' => $protain]);
}
public function edit(Protain $protain){
  
    return view('protains.edit',['protain' => $protain]);
}
public function update(Request $request, Protain $protain){
    $protain->fill($request->all())->save();
    
    return redirect()->to('/protains');
}
public function delete(Protain $protain)
{
    
    if (Auth::id() !== $protain->user_id) {
        abort(403);
    }
   
    $protain->delete();

    return redirect()->to('/protains');
}

public function reply(Request $request, Protain $protain)
{
    
    $reply = new Reply;
    $reply->protain_id =$protain->id;
    $reply->fill($request->all());
    $reply->user()->associate(Auth::user());
    $reply->protain()->associate($protain);
    $reply->save();

    return redirect()->back();
}
public function delet(Reply $reply)
{
    
    if (Auth::id() !== $reply->user_id) {
        abort(403);
    }
   
    $reply->delete();

    return redirect()->back();
}


public function __construct()
{
  $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
}

public function like($id)
{
        Like::create([
        'protain_id' => $id,
        'user_id' => Auth::id(),
      ]);

    session()->flash('success', 'You Liked the Reply.');

    return redirect()->back();
}
public function unlike($id)
  {
    $like = Like::where('protain_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Reply.');

    return redirect()->back();
  }

  public function profile( $user )
  {
    $user = User::findOrFail($user);

     
      return view('profile', ['user'=>$user]);
  }

}