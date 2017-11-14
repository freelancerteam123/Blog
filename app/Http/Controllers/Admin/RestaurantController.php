<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller {
    
	public function showList () {

	}

	public function showAdd () {
		return view('admin.restaurant.add.index');
	}

}
