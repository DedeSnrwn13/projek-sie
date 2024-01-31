<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $heroBanner = Banner::where('type', 'hero')->first();
        $footerBanner = Banner::where('type', 'footer')->first();
        $groupedDestinations = DB::table('districts as dt')
            ->select([
                'dt.id as id',
                'dt.name as name',
                DB::raw('COUNT(dn.id) as total'),
                DB::raw('MIN(dn.thumbnail) as thumbnail')
            ])
            ->join('destinations as dn', 'dn.district_id', '=', 'dt.id')
            ->groupBy('dt.id', 'dt.name')
            ->get();
        $destinations = Destination::latest()->take(6)->get();
        $articles = Article::where('is_active', true)->take(3)->latest()->get();

        return view('welcome', compact(
            'heroBanner', 'footerBanner', 'groupedDestinations',
            'destinations', 'articles'
        ));
    }

    public function destination()
    {
        $destinations = Destination::latest()->paginate(9);

        return view('destination', compact('destinations'));
    }

    public function blog()
    {
        $blogs = Article::where('is_active', true)->latest()->paginate(6);

        return view('blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $categories = DB::table('categories', 'c')
            ->select([
                'c.id as id',
                'c.name as name',
                DB::raw('COUNT(a.id) as total_posts')
            ])
            ->leftJoin('articles as a', 'a.category_id', '=', 'c.id')
            ->groupBy('c.id')
            ->get();
        $articles = Article::where('is_active', true)->take(3)->latest()->get();

        return view('blog-single', compact('article', 'categories', 'articles'));
    }
}
