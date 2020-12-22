<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);

        $imgName = Str::random(16) . '.jpg';
        $request->file('image')->move(public_path('images'), $imgName);

        $user->image = $imgName;
        $user->save();

        return redirect()->route('users.create');
    }

    public function show(User $user)
    {

        return view('users.show', compact('user'));
    }

    public function delete(User $user){
        $user->deleteImage();
        $user->delete();
    }
}
