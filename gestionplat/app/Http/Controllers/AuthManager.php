<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\Budget;
use Carbon\Carbon;


class AuthManager extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('login');
    }
    public function registration(){
        return view('registration');
    }
    public function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect(route('home'));
        }
        return redirect(route('login'))->with("error", "Invalid username or password");
    }
    public function registrationPost(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with("error", "Something went wrong");
        }
        return redirect(route('login'))->with("success", "You have registered successfully");
    }
    public function logoutPost(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
    // public function home(){
    //     return view('home');
    // }
    public function home()
    {
        $data=Budget::select('id','exercice')->get()->groupBy(function($data){
            return Carbon::parse($data->exercice)->format('Y');
        });
        $exercices=[];
        $exerciceCount=[];
        foreach($data as $exercice => $values){
            $exercices[]=$exercice;
            $exerciceCount[]=count($values);
        }
        return view('home',['data'=>$data, 'exercices'=>$exercices, 'exerciceCount'=>$exerciceCount]);
    }
}
    
