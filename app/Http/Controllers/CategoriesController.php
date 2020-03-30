<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KatProd;
use DB;
use DataTables;
use Image;

class CategoriesController extends Controller
{
    public function dataTable(){
        $data = KatProd::query();
        return DataTables::of($data)
        ->addColumn('action', function($data){
            return view('layouts.action', [
                'model' => $data,
                'url_show' => route('categories.show', $data->id),
                'url_edit' => route('categories.edit', $data->id),
                'url_destroy' => route('categories.destroy', $data->id),
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
        $data = DB::table('kategori_product')->paginate(10);
       // dd($data);
        return view('admin.categories.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(
        //     $request->nama_kategori, 
        //     $request->judul_kategori, 
        //     $request->penjelasan_kategori, 
        //     $request->brosur_kategori, 
        //     $request->foto_kategori, 
        //     $request->logo_kategori,
        // );

        $data = new KatProd();
        $data->nama_kategori = $request->nama_kategori;
        $data->judul_kategori = $request->judul_kategori;
        $data->penjelasan_kategori = $request->penjelasan_kategori;
        $data->brosur_kategori = $request->brosur_kategori;
        $slug = $data->nama_kategori;

        if($request->file('foto_kategori')){
            $foto = $request->file('foto_kategori');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/kategori/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto_kategori = $filename;
        }

        if($request->file('logo_kategori')){
            $logo = $request->file('foto_kategori');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/kategori/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_kategori = $filename;
        }

        if(!$data->save()){
            App::abort(500, 'Error');
        }else{
            return redirect()->back()->with('message','Data Berhasil Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat= KatProd::findOrFail($id);

        return view('admin.categories.view')->withCat($cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = KatProd::findOrFail($id);

        return view('admin.categories.edit')->withCategories($categories);
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
        $data = KatProd::findOrFail($id);
        $data->nama_kategori = $request->nama_kategori;
        $data->judul_kategori = $request->judul_kategori;
        $data->penjelasan_kategori = $request->penjelasan_kategori;
        $data->brosur_kategori = $request->brosur_kategori;
        $slug = $data->nama_kategori;
        $data->slug = str_slug($slug);

        if($request->file('foto_kategori')){
            $foto = $request->file('foto_kategori');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/kategori/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto_kategori = $filename;
        }

        if($request->file('logo_kategori')){
            $logo = $request->file('foto_kategori');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/kategori/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_kategori = $filename;
        }

        if(!$data->save()){
            App::abort(500, 'Error');
        }else{
            return redirect()->back()->with('message','Data Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KatProd::findOrFail($id);
        $model->delete();
    }
}
