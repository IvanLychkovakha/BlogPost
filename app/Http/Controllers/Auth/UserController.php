<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Users\UpdateRequest;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('web.sections.auth.signup');
    }


    public function show(Request $request)
    {
        $posts = Auth::user()->posts()->paginate(15);

        return view('web.sections.user.show', compact('posts'));
    }


    public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        User::create($validatedData);

        $loginRequest = app()->make(LoginRequest::class);
        $loginRequest->setMethod('POST');
        $loginRequest->replace($validatedData);
        
        return (new AccessController)->store($loginRequest);
    }

    public function update(UpdateRequest $request)
    {
        Auth::user()->update($request->validated());

        return redirect()->back();
    }

}
