<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller {

    public function showList () {
    	$users = User::where('status', 1)
            ->paginate(config('constants.ADMIN.PAGINATION'));
    	return view('admin.admin.list.index')->with('users', $users)->with('query', []);
    }

    public function showAdd () {
    	return view('admin.admin.add.index');	
    }

    public function actionAdd (Request $request) {
    	$user = $request->all();
    	$user['password'] = bcrypt(config('constants.ADMIN.PASSWORD_DEFAULT'));
    	if ($this->checkEmailExist($user['email'])) {
    		flash("Email đã tồn tại!")->error();
	    	return redirect()->back()->withInput();
    	} else {
    		if (User::create($user)) {
	    		flash("Thêm admin thành công!");
	    		return redirect()->back();
	    	} else {
	    		flash("Hệ thống đang xảy ra lỗi!")->error();
	    		return redirect()->back();
	    	}
    	}
    }

    public function actionDelete (Request $request) {
        $id = $request->id;
        if (User::where('id', $id)->update(['status' => 0])) {
            flash("Khóa tài khoản thành công!");
            return redirect()->back();
        } else {
            flash("Hệ thống đang xảy ra lỗi!")->error();
            return redirect()->back();
        }
    }

    public function actionSearch (Request $request) {
        $query = $request->all();
        $users = User::search($query);
        return view('admin.admin.list.index')->with('users', $users)->with('query', $query);
    }

    private function checkEmailExist ($email) {
    	return User::where('email', $email)->count();
    }

}
