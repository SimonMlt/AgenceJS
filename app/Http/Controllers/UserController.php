<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * All users
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('users')->with('users', $users);
    }

    /**
     * Delete user
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }
}
