<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\SubKatProd;
use DataTables;
use Image;

class SubCaregoriesProductController extends Controller
{
    public function dataTable(){
        $data = SubKatProd::query();
        return DataTables::of($data)
        ->addColumn('subkategori', function($data){
            return $data->subkategori['nama_subKategori'];
    })
        ->addColumn('action', function($data){
            return view('layouts.action', [
                'model' => $data,
                'url_show' => route('sub_cat_prod.show', $data->id_subsubKategori),
                'url_edit' => route('sub_cat_prod.edit', $data->id_subsubKategori),
                'url_destroy' => route('sub_cat_prod.destroy', $data->id_subsubKategori),
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
        $data = DB::table('subsubkategori_product')->paginate(10);
        // dd($data->sub->nama_subsubKategori);
       return view('admin.sub_categories_product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub_categories_product.create');
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
        //     $request->nama_subsubKategori, 
        //     $request->judul_subsubKategori, 
        //     $request->penjelasan_subsubKategori, 
        //     $request->brosur_subsubKategori, 
        //     $request->foto_subsubKategori, 
        //     $request->logo_subsubKategori, 
        //     $request->subKategori_id,
        // );

        $data = new SubKatProd();
        $data->nama_subsubKategori = $request->nama_subsubKategori;
        $data->judul_subsubKategori = $request->judul_subsubKategori;
        $data->penjelasan_subsubKategori = $request->penjelasan_subsubKategori;
        $data->brosur_subsubKategori = $request->brosur_subsubKategori;
        $data->subKategori_id = $request->subKategori_id;
        $slug = $data->nama_subsubKategori;
        $data->slugslug = str_slug($slug);

        if($request->file('foto_subsubKategori')){
            $foto = $request->file('foto_subsubKategori');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/subsubkategori/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto_subsubKategori = $filename;
        }

        if($request->file('logo_subsubKategori')){
            $logo = $request->file('foto_subsubKategori');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/subsubkategori/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_subsubKategori = $filename;
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
    public function show($id_subsubKategori)
    {
        $subsub = SubKatProd::findOrFail($id_subsubKategori);
        // dd($subsub);
        return view('admin.sub_categories_product.view')->withSubsub($subsub);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_subsubKategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id_subsubKategori)
    {
        $subsub = SubKatProd::findOrFail($id_subsubKategori);
       return view('admin.sub_categories_product.edit')->withSubsub($subsub);
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
        //     $request->nama_subsubKategori, 
        //     $request->judul_subsubKategori, 
        //     $request->penjelasan_subsubKategori, 
        //     $request->brosur_subsubKategori, 
        //     $request->foto_subsubKategori, 
        //     $request->logo_subsubKategori, 
        //     $request->subKategori_id,
        // );

        $data = SubKatProd::findOrFail($id);
        $data->nama_subsubKategori = $request->nama_subsubKategori;
        $data->judul_subsubKategori = $request->judul_subsubKategori;
        $data->penjelasan_subsubKategori = $request->penjelasan_subsubKategori;
        $data->brosur_subsubKategori = $request->brosur_subsubKategori;
        $data->subKategori_id = $request->subKategori_id;
        $slug = $data->nama_subsubKategori;
        $data->slugslug = str_slug($slug);

        if($request->file('foto_subsubKategori')){
            $foto = $request->file('foto_subsubKategori');
            $filename = str_slug($slug) . '.' . $foto->getClientOriginalExtension();
            $location = public_path('/uploads/subsubkategori/' .$filename);
            Image::make($foto)->resize(800, 400)->save($location);
            $data->foto_subsubKategori = $filename;
        }

        if($request->file('logo_subsubKategori')){
            $logo = $request->file('foto_subsubKategori');
            $filename = str_slug($slug) . '.' . $logo->getClientOriginalExtension();
            $location = public_path('/uploads/subsubkategori/' .$filename);
            Image::make($logo)->resize(800, 400)->save($location);
            $data->logo_subsubKategori = $filename;
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
        $model = SubKatProd::findOrFail($id);
        $model->delete();
    }
}
