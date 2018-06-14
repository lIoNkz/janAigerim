<?php

namespace App\Http\Controllers;

use App\Models\Photo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
    	return view('frontend.index');
    }

    public function show_category($category, $subcategory) {
        return view('frontend.goods');
    }

}
