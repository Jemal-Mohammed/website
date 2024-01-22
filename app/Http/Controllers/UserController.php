<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;

class UserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:2|max:32',
            'email'=>'required',
            'password'=>'required|min:8|max:12'
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)

        ]);
        if($user->save()){
toastr()->success('registration Successful!!!');

            return redirect()->route('login');
        }
        // Display an error toast with no title
toastr()->error('Oops! Something went wrong!');
        return redirect()->back();

    }
   
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
     
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            toastr()->success('Logged in Successfully!!!');
        
    
            return redirect()->intended('/');
        }
    
        toastr()->error('The provided credentials do not match our records.');
        
    
        return redirect()->back();
    }
    
    
    public function userlogout()

    {
        Auth::guard('web')->logout();
       
        toastr()->info('Logged out Successful!!!');
        return  redirect()->route('/');
    }
    
}
