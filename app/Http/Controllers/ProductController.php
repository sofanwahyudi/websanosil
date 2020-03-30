<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use DB;
use DataTables;
use Image;

class ProductController extends Controller
{
    public function dataTable(){
        $data = Product::query();
        return DataTables::of($data)
        ->addColumn('kategori', function($data){
            foreach($data->categories as $categories)
            return $categories->nama_kategori;
        })
        ->addColumn('subkategori', function($data){
            foreach($data->subcategories as $subcategories)
            return $subcategories->nama_subKategori;
        })
        ->addColumn('sub2kategori', function($data){
            foreach($data->sub2categories as $sub2categories)
            return $sub2categories->nama_subsubKategori;
        })
        ->addColumn('action', function($data){
            return view('layouts.action', [
                'model' => $data,
                'url_show' => route('product.show', $data->id),
                'url_edit' => route('product.edit', $data->id),
                'url_destroy' => route('product.destroy', $data->id),
            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('product')->paginate(10);
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     dd(
    //     $request->nama,
    //     $request->deskripsi_singkat,
    //     $request->deskripsi,
    //     $request->foto,
    //     $request->application,
    //     $request->effectiveness,
    //     $request->packaging,
    //     $request->agents,
    //     $request->product_type,
    //     $request->self_life,
    //     $request->delivery_storage,
    //     $request->logo_product,
    //     $request->product_flyer,
    //     $request->brosur_product,
    // );

    $data = new Product();
    $data->nama = $request->nama;
    $slug = $data->nama;
    $data->slug = str_slug($slug);
    $data->deskripsi_singkat = $request->deskripsi_singkat;
    $data->deskripsi = $request->deskripsi;
    $data->application = $request->application;
    $data->effectiveness = $request->effectiveness;
    $data->packaging = $request->packaging;
    $data->agents = $request->agents;
    $data->product_type = $request->product_type;
    $data->shelf_life = $request->shelf_life;
    $data->delivery_storage = $request->delivery_storage;
    $data->product_flyer = $request->product_flyer;
    $data->brosur_product = $request->brosur_product;

//    $data->logo_product = $request->logo_product;

    if($request->file('logo_product')){
        $logo = $request->file('logo_product');
        $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
        $location = public_path('/uploads/product/' .$filename);
        Image::make($logo)->resize(800, 400)->save($location);
        $data->logo_product = $filename;
    }

 //   $data->foto = $request->foto;

    if($request->file('foto')){
        $foto = $request->file('foto');
        $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
        $location = public_path('/uploads/product/' .$filename);
        Image::make($foto)->resize(800, 400)->save($location);
        $data->foto = $filename;
    }
    $data->categories()->sync($request->kategori, false);
    $data->subcategories()->sync($request->subkategori, false);
    $data->sub2categories()->sync($request->subsubkategori, false);
    $data->save();

    return redirect()->back()->with('message','Data Berhasil Disimpan');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Product::findOrFail($id);
      //  dd($prod->kategori());
        // foreach($prod->kategori() as $p);
        // dd($p['nama']);
        return view('admin.product.view', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd(
        //     $request->nama,
        //     $request->deskripsi_singkat, 
        //     $request->deskripsi, 
        //     $request->foto, 
        //     $request->application, 
        //     $request->effectiveness, 
        //     $request->packaging, 
        //     $request->agents, 
        //     $request->product_type, 
        //     $request->self_life, 
        //     $request->delivery_storage, 
        //     $request->logo_product, 
        //     $request->product_flyer, 
        //     $request->brosur_product,
        // );
//dd($request->kategori);
        $data = Product::findOrFail($id);
        $data->nama = $request->nama;
        $slug = $data->nama;
        $data->slug = str_slug($slug);
        $data->deskripsi_singkat = $request->deskripsi_singkat;
        $data->deskripsi = $request->deskripsi;
        $data->application = $request->application;
        $data->effectiveness = $request->effectiveness;
        $data->packaging = $request->packaging;
        $data->agents = $request->agents;
        $data->product_type = $request->product_type;
        $data->shelf_life = $request->shelf_life;
        $data->delivery_storage = $request->delivery_storage;
        $data->product_flyer = $request->product_flyer;
        $data->brosur_product = $request->brosur_product;
    
    //    $data->logo_product = $request->logo_product;
    
        if($request->file('logo_product')){
            $logo = $request->file('logo_product');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/product/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_product = $filename;
        }
    
     //   $data->foto = $request->foto;
    
        if($request->file('foto')){
            $foto = $request->file('foto');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/product/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto = $filename;
        }

        
        $data->categories()->sync($request->kategori, false); //7
        $data->subcategories()->sync(39, false); //39
        $data->sub2categories()->sync($request->subsubkategori, false); //8
        $data->save();
    
        return redirect()->back()->with('message','Data Berhasil Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Product::findOrFail($id);
        $model->delete();
    }
}
