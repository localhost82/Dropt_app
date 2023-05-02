<?php

namespace App\Http\Controllers;

use App\Models\CompanyNew;
use Illuminate\Contracts\{Foundation\Application};
use Illuminate\Contracts\View\{Factory, View};

class HomeController extends Controller {
    public function index(): View|Factory|Application {
        $news = CompanyNew::query()->orderBy('created_at', 'desc')->take(4)->get();

        return view( 'index', [
            'news' => $news
        ] );
    }
}
