<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\User;

class FrontendController extends Controller
{
	public function Index(Request $req)
	{
		return view('fe.index');
	}

	public function Login(Request $req)
	{
		return view('fe.login', ['title' => 'Log In']);
	}

	public function LoginPost(Request $req)
	{
		if(Auth::attempt(['user_username' => $req->user, 'password' => $req->pass]))
		{
			return response()->json(['authed' => true]);
		}
		else
		{
			$u = User::where('user_username', '=', $req->user)->first();
			if($u) {
				return response()->json(['authed' => false, 'attempts' => 0]);
			}
			return response()->json(['authed' => false]);
		}
	}
}
