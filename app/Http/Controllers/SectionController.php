<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KatApp;
use App\Model\KatProd;
use App\Model\SubKat;
use App\Model\Product;
use App\Model\News;
use App\Model\SubKatProd;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SectionController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax()) {
            $data = Product::where('nama', 'LIKE', $request->search.'%')->get();
            $output = '';
            if (count($data)>0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">'.'</ul>';
                // looping hasil array
                foreach ($data as $row){
                    // output ke array
                    $output .= $row->nama;
                }
                // output
                $output .= '';
            }
            else {
                // jika data tidak ada
                $output .= '<li class="list-group-item">'.'Data Yang Anda Cari Tidak ada'.'</li>';
            }
            return $output;
        }
    }
    public function section()
    {
        $gal= DB::table('galery')->latest()->paginate(6);
        $news= DB::table('news')->latest()->paginate(6);
        $app = KatApp::all();
        $kat= DB::table('kategori_product')->get();
        
     
    return view('welcome')->withNews($news)->withApp($app)->withKat($kat)->withGal($gal);   
    }

    public function pageProduct()
    {
    $kat = KatProd::all();
    $product= DB::table('product')->latest()->paginate(10);
    $subsubkat = SubKatProd::all();
    $subkat= SubKat::all();
    return view('product')->withProduct($product)->withKat($kat)->withSubsubkat($subsubkat)->withSubkat($subkat);   
    }
    public function detailProduct($slug)
    {
        $prod = Product::where('id', $slug)->orWhere('slug', $slug)->firstOrFail();
        return view('product_detail')->withProd($prod); 
    }
    public function productByCategories($slug)
    {
        $kategori = KatProd::where('id', $slug)->orWhere('slug', $slug)->firstOrFail();
        $subkat = Subkat::with('kategori')->where('kategori_id', $kategori->id)->get();
        $params = [
            'kategori' => $kategori,
            'subkategori' => $subkat,
        ];

        return view('product_by_categories', $params);
    }
    public function productBySubCategories($slug, $url)
    {
        $kategori = KatProd::where('id', $slug)->orWhere('slug', $slug)->firstOrFail();
        $subkategori = SubKat::where('id_subKategori', $url)->orWhere('url', $url)->firstOrFail();
        $subsubkategori = SubKatProd::with('subkategori')->where('subKategori_id', $subkategori->id_subKategori)->get();
        $product= Product::all();
       
        $params = [
            'kategori' => $kategori,
            'subkategori' => $subkategori,
            'subsubkategori' => $subsubkategori,
            'product' => $product,
        ];
        return view('product_by_sub_categories', $params);
    }

    public function productBySubSubCategories($slug, $url, $slugslug)
    {
        $kategori = KatProd::where('id', $slug)->orWhere('slug', $slug)->firstOrFail();
        $subkategori = SubKat::where('id_subKategori', $url)->orWhere('url', $url)->firstOrFail();
        $subsubkategori = SubKatProd::where('id_subsubKategori', $slugslug)->orWhere('slugslug', $slugslug)->firstOrFail();

        $params = [
            'kategori' => $kategori,
            'subkategori' => $subkategori,
            'subsubkategori' => $subsubkategori,
        ];
        return view('product_by_sub_sub_categories', $params);
    }
    public function productByApp($slug)
    {
        $kategori = KatApp::where('id_app', $slug)->orWhere('slug', $slug)->firstOrFail();
        $product= DB::table('product')->paginate(4);
        $params = [
            'kategori' => $kategori,
            'product' => $product,
        ];
        return view('product_by_application', $params); 
    }

    public function pageAbout()
    {
     
    return view('about');   
    }

    public function pageContact()
    {
     
    return view('contact');   
    }
    public function pageNews()
    {
    $gal = DB::table('galery')->paginate(9);
    $news= DB::table('news')->paginate(9);
    return view('news')->withNews($news)->withGal($gal);   
    }
    public function post($slug)
    {
    $blog = News::where('id', $slug)->orWhere('slug', $slug)->firstOrFail();
    return view('post')->withBlog($blog);   
    }
    function send(Request $request)
    {
    //    dd($request->name, $request->email, $request->phone, $request->subtitle, $request->message,);
     $this->validate($request, [
      'name'     =>  'required',
      'phone'     =>  'required',
      'subtitle'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'phone'   =>   $request->phone,
            'subtitle'   =>   $request->subtitle,
            'email'   =>   $request->email,
            'message'   =>   $request->message,
        );

     Mail::to('aurora.an98@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Terimakasih atas atensi yang anda berikan');

    }

}

