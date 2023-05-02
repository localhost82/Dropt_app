<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyNew;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = CompanyNew::paginate(10); // TODO change to limit items per page
        return view('admin.news.index', [
            'news' => $news
        ]);
    }
}
