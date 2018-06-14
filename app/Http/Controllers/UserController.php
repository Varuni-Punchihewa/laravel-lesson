<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\User;
use App\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * View User Update Page
     * @param $id - User ID
     * @return $this
     */
    public function user_update($id)
    {

        $user = User::with('userDetail')->where('id', $id)->first();
        return view("user_update")->with(["user" => $user]);
    }

    /**
     * View User Update Page
     * @param Request $request
     * @param $id - User ID
     */
    public function user_update_post(UserUpdateRequest $request, $id)
    {
        $inputs = $request->input();
        $user = User::where('id', $id)->first();
        $user->first_name = $inputs["first_name"];
        $user->last_name = $inputs["last_name"];
        $user->save();

        $user_detail = $user->userDetail()->updateOrCreate(
            [
                'user_id' => $id
            ],
            [
                'age' => $inputs["age"],
                'address' => $inputs["address"],
            ]);

        if ($user_detail) {
            return redirect('/home');
        } else {
            return redirect('/user_update/' . $id);
        }


    }
}
