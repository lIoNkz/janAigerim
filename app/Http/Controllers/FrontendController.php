<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
    	return view('frontend.index');
    }

    public function show_subcategory($category, $subcategory) {

        $category_name = Category::where('slug',$category)->first()->title;
        $category_slug = Category::where('slug',$category)->first()->slug;
        $subcategory_name = Category::where('slug',$subcategory)->first()->title;
        $subcategory_slug = Category::where('slug',$subcategory)->first()->slug;

        $subcategory = Category::where('slug',$subcategory)->get();

        return view('frontend.goods', compact('subcategory'))->with([
            'category_name' => $category_name,
            'subcategory_name' => $subcategory_name,
            'category_slug' => $category_slug,
            'subcategory_slug' => $subcategory_slug
        ]);
    }

    public function show_category($category) {

        $category_name = Category::where('slug',$category)->first()->title;
        $category_slug = Category::where('slug',$category)->first()->slug;

        $category = Category::where('slug',$category)->get();

        return view('frontend.goods2', compact('category'))->with([
            'category_name' => $category_name,
            'category_slug' => $category_slug
        ]);
    }

}
