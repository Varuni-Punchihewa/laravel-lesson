<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * View Register Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        return view("register");
    }

    /**
     * Submit Register Form
     * @param Request $request
     * @return string
     */
    public function register_post(RegisterRequest $request)
    {
        $inputs = $request->input();
        $first_name = $inputs["first_name"];
        $last_name = $inputs["last_name"];
        $username = $inputs["username"];
        $password = $inputs["password"];

        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->username = $username;
        $user->password = bcrypt($password);
        $result = $user->save();

        if ($result) {
            return redirect('/home');
        } else {
            return redirect('/register');
        }
    }

    /**
     * View Home Page
     * @return $this
     */
    public function home()
    {
        $users = User::all();
        return view("home")->with(["user_data" => $users]);
    }
}
