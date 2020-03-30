<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;
use App\Model\KatApp;
use App\Model\Product;
use App\Model\News;
use App\Model\Galery;
use App\Model\KatProd;
use App\Model\SubKat;
use App\Model\SubKatProd;

class AdminController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        return view('admin.dashboard');
    }

    public function dashboard()
    {
        $product = Product::all();
        $galeri = Galery::all();
        $kategori = KatProd::all();
        $subkat = SubKat::all();
        $sub2kat = SubKatProd::all();
        $post = News::latest()->take(3)->get();
        $allpost = News::all();
        return view('admin.dashboard')->withProduct($product)->withPost($post)->withAllpost($allpost)->withGaleri($galeri)->withKategori($kategori)->withSubkat($subkat)->withSub2kat($sub2kat);
    }
    public function logout(){
        Auth::logout();
        return redirect('/adminweb'); // ini untuk redirect setelah logout
    }
    public function foot()
    {
        $data = KatApp::all();
        return view('layouts.master')->withData($data);
    }
    public function search()
    {
        $s = News::query()->whereLike(['title', 'subtitle', 'description'])->get();
        return view('admin.dashboard')->withS($s);
    }
}
