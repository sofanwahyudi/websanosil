<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\galery;
use App\Model\News;

class SitemapController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $galeri = Galery::all();
        $news = News::all();

        return response()->view('sitemap.index', [
            'product' => $product,
            'galeri' => $galeri,
            'news' => $news,
       
        ])->header('Content-Type', 'text/xml');
    }
}
