<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SubKat;
use DB;
use DataTables;
use Image;

class SubCategoriesController extends Controller
{
    public function dataTable(){
        $data = SubKat::query();
        return DataTables::of($data)
        ->addColumn('kategori', function($data){
            return $data->kategori['nama_kategori'];
    })
    ->addColumn('action', function($data){
        return view('layouts.action', [
            'model' => $data,
            'url_show' => route('sub_categories.show', $data->id_subKategori),
            'url_edit' => route('sub_categories.edit', $data->id_subKategori),
            'url_destroy' => route('sub_categories.destroy', $data->id_subKategori),
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('subkategori_product')->paginate(10);
        //dd($data);
       return view('admin.sub.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub.create');
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
        //     $request->nama_subKategori, 
        //     $request->judul_subKategori, 
        //     $request->penjelasan_subKategori, 
        //     $request->brosur_subKategori, 
        //     $request->foto_subKategori, 
        //     $request->logo_subKategori, 
        //     $request->kategori_id,
        // );

        $data = new SubKat();
        $data->nama_subKategori = $request->nama_subKategori;
        $data->judul_subKategori = $request->judul_subKategori;
        $data->penjelasan_subKategori = $request->penjelasan_subKategori;
        $data->brosur_subKategori = $request->brosur_subKategori;
        $data->kategori_id = $request->kategori_id;
        $slug = $data->nama_subKategori;
        $data->url = str_slug($slug);

        if($request->file('foto_subKategori')){
            $foto = $request->file('foto_subKategori');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/subkategori/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto_subKategori = $filename;
        }

        if($request->file('logo_subKategori')){
            $logo = $request->file('foto_subKategori');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/subkategori/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_subKategori = $filename;
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
    public function show($id_subKategori)
    {
        $sub = SubKat::findOrFail($id_subKategori);

        return view('admin.sub.view')->withSub($sub);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_subKategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id_subKategori)
    {
        $sub = SubKat::findOrFail($id_subKategori);

        return view('admin.sub.edit')->withSub($sub);
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
        //     $request->nama_subKategori, 
        //     $request->judul_subKategori, 
        //     $request->penjelasan_subKategori, 
        //     $request->brosur_subKategori, 
        //     $request->foto_subKategori, 
        //     $request->logo_subKategori, 
        //     $request->kategori_id,
        // );

        $data = SubKat::findOrFail($id);
        $data->nama_subKategori = $request->nama_subKategori;
        $data->judul_subKategori = $request->judul_subKategori;
        $data->penjelasan_subKategori = $request->penjelasan_subKategori;
        $data->brosur_subKategori = $request->brosur_subKategori;
        $data->kategori_id = $request->kategori_id;
        $slug = $data->nama_subKategori;
        $data->url = str_slug($slug);

        if($request->file('foto_subKategori')){
            $foto = $request->file('foto_subKategori');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/subkategori/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto_subKategori = $filename;
        }

        if($request->file('logo_subKategori')){
            $logo = $request->file('foto_subKategori');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/subkategori/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_subKategori = $filename;
        }

        if(!$data->save()){
            App::abort(500, 'Error');
        }else{
            return redirect()->back()->with('message','Data Berhasil Disimpan');
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
        $model = SubKat::findOrFail($id);
        $model->delete();
    }
}
