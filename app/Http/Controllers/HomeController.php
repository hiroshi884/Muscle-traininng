<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $user = null;
        if(
            isset($data['file'])
            && $data['file'] instanceof UploadedFile
        ){
            $filepath = $data['file']->store('public/uploads');
            
            $user= basename($filepath);
           
            
        }

        return view('protains.create',['users' => User::orderBy('id', 'desc')->paginate(),]);
    }
}
