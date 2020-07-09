<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware(['auth','verified']);
    }*/
    public function Index()
    {
        return view("home");
    }
    public function Login(Request $request)
    {
        $user = DB::table("users")->where("email", $request->email)->first();

        if ($user != null)
        {
            if (Hash::check($request->password, $user->password))
            {
                return view("welcome", [
                    "user" => $user
                ]);
            }
            else
            {
                echo("Forkert kodeord");
            }
        }
        else
        {
            echo("Forkert email");
        }
        
    }
    public function createUser(Request $request)
    {
        if($request->isMethod("post"))
        {
            
            /*$request->user()->fill([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "remember_token" => "random"
            ])->save();*/

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            //echo($user->name);
            $user->save();
            
            return view("home");
        }
        if($request->isMethod("get"))
        {
            return view("createUser");
        }
    }
}
