<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function CreateHouse(Request $request)
    {
        if ($request->isMethod("post"))
        {
            $tempUser = new User();
            $tempUser->userId = session()->get("userId");

            $house = new House();
            $house->price = $request->price;
            $house->address = $request->address;
            $house->description = $request->description;
            $house->userId = session()->get("userId");
            $house->save();

            return view("welcome",[
                "user" => $tempUser
            ]);
        }
        if ($request->isMethod("get"))
        {
            session()->put("userId", $request->userId);
            return view("createHouse");
        }
    }
    public function HouseOverview(Request $request)
    {
        if ($request->isMethod("post"))
        {
            $houses = DB::table("houses")
            ->join("users", "users.id", "=", "houses.userId")
            ->select("houses.*", "users.name", "users.email")
            ->where("users.name", $request->searchFor)
            ->get();

            return view("houseOverview", [
                "houses" => $houses
            ]);
        }
        if ($request->isMethod("get"))
        {
            $houses = House::all();

            return view("houseOverview", [
                "houses" => $houses
            ]);
        }
    }
    public function BackToWelcome(Request $request)
    {
        $user = new User();
        $user->id = $request->userId;
        return view("welcome", [
            "user" => $user
        ]);
    }
    public function ViewHouse(Request $request)
    {
        $houses = DB::table("houses")
                    ->join("users", "users.id", "=", "houses.userId")
                    ->select("houses.*", "users.name", "users.email")
                    ->where("houses.id", $request->houseId)
                    ->first();

        return view("viewHouse", [
            "houses" => $houses
        ]);
    }
    public function Logout(Request $request)
    {
        session()->forget("userId");

        return view("home");
    }
}
