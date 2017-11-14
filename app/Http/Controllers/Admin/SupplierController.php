<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupplierController extends Controller {

	public function showAdd () {
    	return view('admin.supplier.add.index');
    }

    public function showList () {
    	return view('admin.supplier.list.index');
    }
}
