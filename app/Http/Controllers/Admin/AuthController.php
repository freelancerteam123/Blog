<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AuthController extends Controller {
    
	public function showLogin () {
		return view('admin.login.index');
	}

	public function actionLogin (Request $request) {
		if ($this->checkAdmin($request->all())) {
			return redirect()->route('admin.home');
		} else {
			flash('Email hoặc mật khẩu không đúng')->error();
			return redirect()->back()->withInput();
		}
	}

	private function checkAdmin ($user) {
		return Auth::attempt(['email' => $user['email'], 'password' => $user['password']]);
	}

	public function createUserAdmin () {
		User::create([
			'name'=> 'Nguyễn Song Hào',
			'email'=> 'nguyensonghao974@gmail.com',
			'password' => bcrypt('123456'),
			'isSupperAdmin' => 1,
			'status' => 1
		]);
	}

	public function actionLogout () {
		Auth::logout();
		return redirect()->route('admin.login.show');
	}

}
