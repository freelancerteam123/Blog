<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller {
	public function showAdd () {
    	return view('admin.type.add.index');
    }

    public function showList () {
    	return view('admin.type.list.index');
    }
}
