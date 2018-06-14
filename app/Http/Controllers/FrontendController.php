<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Advantage;
use App\Models\Review;
use App\Models\Textblock;
use App\Models\Siteprice;
use App\Models\Metatag;
use App\Models\Breadcrumb;
use App\Models\Article;
use App\Models\Work;
use App\Mail\OrderFromSite;
use App\Mail\TextToUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index() {
    	return view('frontend.index');
    }

    public function show_category() {
        return view('frontend.goods');
    }

}
