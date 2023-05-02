<?php

namespace App\Http\Controllers;

use App\Jobs\SendPublishedNewsMail;
use App\Models\CompanyNew;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{

    public function index(): View|Factory|Application
    {
        $news = CompanyNew::query()->orderBy('created_at', 'desc')->get();

        return view('news.index', [
            'news' => $news
        ]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:10'],
            'content' => ['required', 'min:10'],
            'coll_time' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048']
        ]);

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('image', 'public');
        } else {
            return back()->with('error', 'Please upload an image')->withInput();
        }

        $news = new CompanyNew();
        $news->user_id = auth()->user()->id;
        $news->title = $request->get('title');
        $news->content = $request->get('content');
        $news->coll_time = $request->get('coll_time');
        $news->image = $image_path;
        $news->save();

        try {
            dispatch(new SendPublishedNewsMail($news));
        } catch (\Exception $exception) {
            Log::error(sprintf('%s: %s', 'Mailing Error:', $exception->getMessage()));
        }

        return back()->with('success', 'News content published successfully!');
    }
}
